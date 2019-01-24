<?php

namespace App\Http\Controllers;

use App\soft;
use Illuminate\Http\Request;

class SoftController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth'); // конструктор только для зарегистрированных пользователей
      $this->authorizeResource(soft::class);
  }
    public function index()
    {
      $all_s = soft::paginate(5);
      return view('soft.soft_all',compact('all_s'));
    }
    public function create()
    {
        $lan =['Русский','Русский/English'];
        $type =['физ. Носитель','электронная подписка'];
        return view('soft.soft_new',compact('lan','type'));
    }
    public function store(Request $request)
    {
      $date = $request->validate( [
          'name' => 'required|string',
          'descr' => 'required|string',
          'lan' => 'required|string',
          'prise' => 'required|numeric',
          'site'=>'required|string',
          'count' => 'required|integer',
          'type' => 'required|string'
      ]);
      soft::create($date);
      return redirect()->route('soft.index');
    }
    public function show(soft $soft)
    {
      $lan =['Русский','Русский/English'];
      $type =['физ. Носитель','электронная подписка'];
        return view('soft.soft_edit',compact('soft','lan','type'));
    }

    public function update(Request $request, soft $soft)
    {
      $date = $request->validate( [
          'name' => 'required|string',
          'descr' => 'required|string',
          'lan' => 'required|string',
          'prise' => 'required|numeric',
          'site'=>'required|string',
          'count' => 'required|integer',
          'type' => 'required|string'
      ]);
        $soft->update($date);
    return redirect()->route('soft.index');
    }
    public function destroy(soft $soft)
    {
      $soft->delete();
      return redirect()->back();
    }
}
