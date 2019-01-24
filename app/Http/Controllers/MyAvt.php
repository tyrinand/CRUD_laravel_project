<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\User;

class MyAvt extends Controller
{
  public function __construct()
  {
    $this->authorizeResource(User::class);
  }
     public function login(Request $request)
     {

       $name = $request['name'];
       $password = $request['password'];

       if ( Auth::attempt(['name' => $name, 'password' => $password]) ) {
            if(Auth::user()->dost === 0) return redirect('/home');
            else return redirect('/first');
        }
        {
          $e = "Не верный логин или пароль";
          return view('welcome',compact('e'));
        }

     }

     public function logout(Request $request)
     {
         $this->guard()->logout();

         $request->session()->invalidate();

         return redirect('/');
     }



    public function index(Request $request)
    {
      $u =Auth::user();
      $users = User::paginate(10);
      return view('users',compact('users'));
    }
    public function create()
    {
        return view('users_new');
    }

    public function store(Request $request)
    {
      $validator = $request->validate( [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
          'dost' => 'required|min:1|max:2'
      ]);
      User::create([
        'name' => $request['name'],
        'email'=> $request['email'],
        'password'=>bcrypt($request['password']),
        'dost'=> $request['dost'],
      ]);
      return redirect()->route('allUsers');
    }

    public function edit(User $user)
    { //
        return view('user_edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
      $validator = $request->validate( [
          'name' => 'required|string|max:255',
          'email' => [
            'required',
            'string',
            'email',
          ],
          'password' => 'nullable|string|min:6|confirmed',
          'dost' => 'required|min:1|max:2',
      ]);
      $user->name = $request['name'];
      $user->email = $request['email'];
      $request['password'] == null ?: $user->password=bcrypt($request['password']);
      $user->dost = $request['dost'];
      $user->save();
      return redirect()->route('allUsers');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('allUsers');
    }
    protected function guard()
    {
        return Auth::guard();
    }

}
