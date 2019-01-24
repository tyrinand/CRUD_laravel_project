<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteControl extends Controller
{
  public function __construct()
  {
      $this->middleware('auth'); // конструктор только для зарегистрированных пользователей
  }
    public function home()
    {
      return view('site.first');
    }
}
