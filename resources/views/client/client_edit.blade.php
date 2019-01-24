@extends('layouts.myl')
@section('content')
  <form class="form-horizontal" action="{{ route('client.update',$client)}}" method="post">
    <input name="_method" type="hidden" value="PATCH">
      @include('client.form')
      <div class="col-sm-6 col-sm-offset-3">
        <button class="btn btn-block btn-primary" type="submit">Сохранить</button>
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
