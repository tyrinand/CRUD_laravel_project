@extends('layouts.myl')
@section('content')
  <form class="form-horizontal" action="{{ route('shop.store') }}" method="post">
      @include('shop.form')
      <div class="col-sm-6 col-sm-offset-3">
        <button class="btn btn-block btn-primary" type="submit" name="button">Добавить</button>
      </div>
  </form>
@endsection
@section('myscript')
<script src="{{ asset('jquery.js') }}"></script>
<script src="{{ asset('jq.mask.js') }}"></script>
<script>
  $("#phone").mask("8-(999)-999-99-99");
</script>
@endsection
