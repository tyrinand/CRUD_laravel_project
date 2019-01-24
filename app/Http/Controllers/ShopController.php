<?php

namespace App\Http\Controllers;

use App\shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
  {
      $this->middleware('auth'); // конструктор только для зарегистрированных пользователей
        $this->authorizeResource(shop::class);
  }
    public function index()
    {
        $all_shop = shop::paginate(5);
        return view("shop.shop_all",compact('all_shop'));
    }
    public function create()
    {
        return view('shop.shop_new');
    }
    public function store(Request $request)
    {
      $date = $request->validate( [
          'name' => 'required|string',
          'site' => 'required|string',
          'fio' => 'required|string',
          'phone'=>'required|string'
      ]);
      shop::create($date);
      return redirect()->route('shop.index');
    }
    public function show(shop $shop)
    {
      return view('shop.shop_edit',compact('shop'));
    }
    public function update(Request $request, shop $shop)
    {
      $date = $request->validate( [
          'name' => 'required|string',
          'site' => 'required|string',
          'fio' => 'required|string',
          'phone'=>'required|string'
      ]);
        $shop->update($date);
    return redirect()->route('shop.index');
    }
    public function destroy(shop $shop)
    {
      $shop->delete();
      return redirect()->back();
    }
}
