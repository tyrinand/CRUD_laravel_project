@extends('layouts.myl')
@section('content')
  <form class="form-horizontal" action="{{ route('soft.update',$soft)}}" method="post">
    <input name="_method" type="hidden" value="PATCH">
      @include('soft.form')
      <div class="col-sm-6 col-sm-offset-3">
        <button class="btn btn-block btn-primary" type="submit">Сохранить</button>
      </div>
  </form>
@endsection
