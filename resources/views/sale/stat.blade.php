@extends('layouts.myl')
@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="table-responsive">
      <table class="table table-bordered  table-hover">
        <tbody>
            <tr>
              <td>Кол-во ПО</td><td> {{ $stat[0] }}</td>
            </tr>
            <tr>
              <td>Кол-во клиентов</td><td> {{ $stat[1] }}</td>
            </tr>
            <tr>
              <td>Кол-во магазинов</td><td> {{ $stat[2] }}</td>
            </tr>
            <tr>
              <td>Кол-во продаж</td><td> {{ $stat[3] }}</td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

@endsection
