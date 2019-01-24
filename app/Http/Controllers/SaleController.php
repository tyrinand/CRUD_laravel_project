<?php

namespace App\Http\Controllers;

use App\sale;
use App\client;
use App\soft;
use App\shop;
use App\discount;
use Illuminate\Http\Request;
use DB;

class SaleController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth'); // конструктор только для зарегистрированных пользователей
      $this->authorizeResource(sale::class);
  }
    public function index()
    {
      $all_s=sale::orderBy('date','desc')->paginate(5);
      return view('sale.sale_all',compact('all_s'));
    }
    public function create()
    {
      $all_c = client::all();
      $all_soft = soft::all();
      $all_shop = shop::all();
      $all_d = discount::orderBy('val','asc')->get();

      return view('sale.new_sale',compact('all_c','all_soft','all_shop','all_d'));
    }
    public function store(Request $request)
    {
      $validator = $request->validate( [
          'date' => 'required',
          'count' => 'required|max:100',
          'id_client' => 'required|exists:clients,id',
          'id_shop' => 'required|exists:shops,id',
          'id_soft' => 'required|exists:softs,id',
          'id_discount'=>'required|exists:discounts,id'
      ]);

      sale::create([
        'date' => $request['date'],
        'count'=> $request['count'],
        'id_client' => $request['id_client'],
        'id_shop' => $request['id_shop'],
        'id_soft' => $request['id_soft'],
        'id_discount'=>$request['id_discount']
      ]);
      return redirect()->route('sale.index');
    }

    public function show(sale $sale)
    {
        $all_c = client::all();
        $all_soft = soft::all();
        $all_shop = shop::all();
        $all_d = discount::all();

        return view('sale.sale_edit',compact('sale','all_c','all_soft','all_shop','all_d'));
    }
    public function update(Request $request, sale $sale)
    {
      $data  = $request->validate( [
          'date' => 'required',
          'count' => 'required|max:100',
          'id_client' => 'required|exists:clients,id',
          'id_shop' => 'required|exists:shops,id',
          'id_soft' => 'required|exists:softs,id',
          'id_discount'=>'required|exists:discounts,id'
      ]);
      $sale->update($data);
       return redirect()->route('sale.index');
    }
    public function destroy(sale $sale)
    {
      $sale->delete();
      return redirect()->back();
    }
    public function prise(Request $request)
    {
      $id =  $request['id'];
      $soft = soft::find($id);
       return response()->json($soft->prise,200);
    }
    public function find_client()
    {
      $all_c = client::all();
      $all_s ='';
      return view('sale.find_client',compact('all_c','all_s'));
    }
      public function find_c(Request $request)
      {

        $all_c = client::all();
        $id = $request['id_client'];
        $all_s =sale::where('id_client', $id)->get();
        return view('sale.find_client',compact('all_c','all_s'));
      }
      public function find_po()
      {
        $all_soft = soft::all();
        $all_c = client::all();
        return view('sale.find_client_soft',compact('all_soft','all_c'));
      }
      public function po_client(Request $request)
      {
        $id =  $request['id'];
          $sale = sale::groupBy('id_client')->where('id_soft', $id)->get();
          foreach ($sale as $s) {
              $clients['name'][] = $s->client->name;
              $clients['id'][] = $s->client->id;
            }

      return response()->json($clients,200);
      }
      public function find_po_c(Request $request)
      {
          $all_soft = soft::all(); //весь софт

          $id_soft = $request['id_soft'];
          $id_client = $request['id_client'];

          $sale = sale::groupBy('id_client')->where('id_soft', $id_soft)->get(); // все продажи по


          $all_s = sale::where('id_soft', $id_soft)->where('id_client', $id_client)->get(); // двойное условие и софт и клиенты

          //dd($clients['name']);
        return view('sale.find_client_soft',compact('all_soft','sale','all_s'));
      }
      public function stat()
      {
        $stat[0]=soft::count();
        $stat[1]=client::count();
        $stat[2]=shop::count();
        $stat[3]=sale::count();
        return view('sale.stat',compact('stat'));
      }
      public function print(sale $sale)
      {
        $wordTest = new \PhpOffice\PhpWord\PhpWord(); //создание экземпляра класса
        $newSection = $wordTest->addSection(); // добавление раздела

          $s = $sale;
    $newSection2 = $wordTest->addSection();

          $table = $newSection2->addTable();
          $table->addRow(400);
    // Add cells
      $table->addCell(1500)->addText('ПО ');
      $table->addCell(2000)->addText($s->soft->name);

  $table->addRow(400);
      $table->addCell(1500)->addText('Цена за ед.');
      $table->addCell(2000)->addText($s->soft->prise.'.р');

  $table->addRow(400);
    $table->addCell(1500)->addText('Кол-во');
    $table->addCell(2000)->addText($s->count);

  $table->addRow(400);
    $table->addCell(1500)->addText('Скидка ');
    $table->addCell(2000)->addText($s->count.' %');

    $table->addRow(400);
      $table->addCell(1500)->addText('Стоимость ');
      $table->addCell(2000)->addText($s->full_prise($s->soft->prise,$s->count,$s->discount->val).'.р');
  $table->addRow(400);

    $table->addCell(1500)->addText('Дата продажи ');
    $table->addCell(2000)->addText($s->date->format('d.m.Y'));
  $table->addRow(400);
    $table->addCell(1500)->addText('Клиент');
    $table->addCell(2000)->addText($s->client->name);
    $table->addRow(400);
      $table->addCell(1500)->addText('Магазин');
      $table->addCell(2000)->addText($s->shop->name);

        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007'); // экземпляр документа
      try {
          $objectWriter->save(storage_path('Sale.docx'));
      } catch (Exception $e) {}

      return response()->download(storage_path('Sale.docx'));
      }
}
