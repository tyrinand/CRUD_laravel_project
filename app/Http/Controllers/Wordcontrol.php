<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sale;

class Wordcontrol extends Controller
{
  public function __construct()
  {
      $this->middleware('auth'); // конструктор только для зарегистрированных пользователей
  }
  
    public function one_doc()
    {
      $wordTest = new \PhpOffice\PhpWord\PhpWord(); //создание экземпляра класса
      $newSection = $wordTest->addSection(); // добавление раздела

      $s = sale::first();
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
  $table->addCell(2000)->addText($s->discount->val.' %');

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
        $objectWriter->save(storage_path('Test.docx'));
    } catch (Exception $e) {
        return 'Error print';
    }

    return response()->download(storage_path('Test.docx'));
    }
public function many_doc()
{
  $all_s = sale::all();
  $wordTest = new \PhpOffice\PhpWord\PhpWord(); //создание экземпляра класса

  $wordTest->setDefaultFontName('times');

  $newSection = $wordTest->addSection(); // добавление раздела

  $table = $newSection->addTable();
  $table->addRow();
    $table->addCell(1500)->addText('ПО');
    $table->addCell(1200)->addText('Цена за ед.');
    $table->addCell(700)->addText('Кол-во');
    $table->addCell(700)->addText('Скидка ');
    $table->addCell(1200)->addText('Стоимость ');
    $table->addCell(800)->addText('Дата продажи ');
    $table->addCell(1200)->addText('Клиент');
    $table->addCell(1000)->addText('Магазин');

    foreach ($all_s as $s) {
        $table->addRow();
        $table->addCell(1500)->addText($s->soft->name);
        $table->addCell(1200)->addText($s->soft->prise.'.р');
        $table->addCell(700)->addText($s->count);
        $table->addCell(700)->addText($s->discount->val.' %');
        $table->addCell(1200)->addText($s->full_prise($s->soft->prise,$s->count,$s->discount->val).'.р');
        $table->addCell(800)->addText($s->date->format('d.m.Y'));
        $table->addCell(1200)->addText($s->client->name);
        $table->addCell(1000)->addText($s->shop->name);
    }

    $domPdfPath = base_path( 'vendor/dompdf/dompdf');
\PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
\PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');

    $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'PDF'); // экземпляр документа
  try {
      $objectWriter->save(storage_path('Test_all.pdf'));
  } catch (Exception $e) {
     return 'Error print';
  }

  //return response()->download(storage_path('Test_all.pdf'));


  return response()->file(storage_path('Test_all.pdf'), [
      'Content-Type' => 'application/pdf'
  ]);


}
}
