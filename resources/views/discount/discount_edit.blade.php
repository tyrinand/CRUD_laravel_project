@extends('layouts.myl')
@section('content')
  <form class="form-horizontal" action="{{ route('discount.update',$discount)}}" method="post">
    <input name="_method" type="hidden" value="PATCH">
      @include('discount.form')
      <div class="col-sm-6 col-sm-offset-3">
        <button class="btn btn-block btn-primary" type="submit">Сохранить</button>
      </div>
  </form>
@endsection
