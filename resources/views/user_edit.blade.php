@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $er)
                <li>{{ $er }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form class="form-horizontal" method="POST" action="{{ route('upUser',$user) }}">
            {{ csrf_field() }}
              <input type="hidden" name="_method" value="put">
              <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} ">
                  <label for="email" class="col-md-4 control-label">Имя</label>
                  <div class="col-md-6">
                      <input id="email" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                  </div>
              </div>
              <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}" >
                  <label for="password" class="col-md-4 control-label">Email</label>
                  <div class="col-md-6">
                      <input id="password" value="{{ $user->email }}" type="email" class="form-control" name="email" required>
                  </div>
              </div>
              <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

                  <label for="password" class="col-md-4 control-label">Новый пароль</label>
                  <div class="col-md-6">
                      <input id="password"  type="password" class="form-control" name="password" >
                  </div>
              </div>
              <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

                  <label for="password2" class="col-md-4 control-label">Повторите пароль</label>
                  <div class="col-md-6">
                      <input id="password2" type="password" class="form-control" name="password_confirmation" >
                  </div>
              </div>
              <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

                  <label for="password2" class="col-md-4 control-label">Роль пользователя</label>
                  <div class="col-md-6">
                      <select class="form-control" name="dost" required>
                        <option value="" selected >Выберете роль</option>
                        <option value="1">Работник лаболатории (редактор)</option>
                        <option value="2">Пользователь</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <button type="submit" class="btn btn-block  btn-primary">Создать</button>
                  </div>
              </div>

              </div>
          </form>

        </div>
    </div>
</div>
@endsection
