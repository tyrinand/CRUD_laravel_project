<?php

namespace App\Http\Controllers;

use App\client;
use App\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth'); // конструктор только для зарегистрированных пользователей
      $this->authorizeResource(client::class);
  }
    public function index()
    {
       $all_c = client::paginate(5);
       return view('client.client_all',compact('all_c'));
    }
    public function create()
    {
        $client = '';
        $marks = ['Превосходно','Почти отлично','Хорошо','Удовлетворительно','Неудовлетворительно'];
        return view('client.new_client',compact('marks','$client'));
    }
    public function store(Request $request)
    {
      $validator = $request->validate( [
          'name_c' => 'required|string|max:100',
          'email' => 'required|string|email|max:100|unique:users',
          'adr' => 'required|string|max:255',
          'phone'=>'required|string|max:255',
          'mark'=> 'required|string'
      ]);
      client::create([
        'name' => $request['name_c'],
        'email'=> $request['email'],
        'adr' => $request['adr'],
        'phone' => $request['phone'],
        'mark'=>$request['mark']
      ]);
      return redirect()->route('client.index');
    }

    public function show(client $client)
    {
      $marks = ['Превосходно','Почти отлично','Хорошо','Удовлетворительно','Неудовлетворительно'];
      return view('client.client_edit',compact('client','marks'));
    }
    public function update(Request $request, client $client)
    {
      $data  = $request->validate( [
          'name_c' => 'required|string|max:100',
          'email' => 'required|string|email|max:100|unique:users',
          'adr' => 'required|string|max:255',
          'phone'=>'required|string|max:255',
          'mark'=> 'required|string'
      ]);
        $client->name = $request['name_c'];
        $client->email = $request['email'];
        $client->adr = $request['adr'];
        $client->phone = $request['phone'];
        $client->mark = $request['mark'];
        $client->save();
      return redirect()->route('client.index');
    }
    public function destroy(client $client)
    {
      $client->delete();
      return redirect()->back();
    }
}
