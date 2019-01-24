<?php

namespace App\Http\Controllers;

use App\discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth'); // конструктор только для зарегистрированных пользователей
      $this->authorizeResource(discount::class);
  }

    public function index()
    {
      $all_d = discount::paginate(5);
      return view("discount.discount_all",compact('all_d'));
    }
    public function create()
    {
          return view('discount.discount_new');
    }
    public function store(Request $request)
    {
      $date = $request->validate( [
          'val' => 'required|integer|min:0|max:40',
          'des' => 'required|string'
      ]);
      discount::create($date);
      return redirect()->route('discount.index');
    }
    public function show(discount $discount)
    {
      return view('discount.discount_edit',compact('discount'));
    }

    public function update(Request $request, discount $discount)
    {
      $date = $request->validate( [
          'val' => 'required|integer|min:0|max:40',
          'des' => 'required|string'
      ]);
        $discount->update($date);
    return redirect()->route('discount.index');
    }
    public function destroy(discount $discount)
    {
      $discount->delete();
      return redirect()->back();
    }
}
