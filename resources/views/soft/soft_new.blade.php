@extends('layouts.myl')
@section('content')
  <form class="form-horizontal" action="{{ route('soft.store') }}" method="post">
      @include('soft.form')
      <div class="col-sm-6 col-sm-offset-3">
        <button class="btn btn-block btn-primary" type="submit" name="button">Добавить</button>
      </div>
  </form>
@endsection
