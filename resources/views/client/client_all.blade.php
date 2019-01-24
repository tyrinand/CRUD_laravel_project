@extends('layouts.myl')
@section('content')
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ФИО</th>
          <th>E-mail</th>
          <th>Адрес</th>
          <th>Телефон</th>
          <th>Оценка</th>
          <th>Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($all_c as $c)
          <tr>
            <td>{{ $c->name }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->adr }}</td>
            <td>{{ $c->phone }}</td>
            <td>{{ $c->mark }}</td>
            <td>
               <form class="" action="{{ route('client.destroy',$c) }}" method="post" onsubmit="if(confirm('Удалить?')){return true}else{return false}">
                <input type="hidden" name="_method" value="DELETE">
                  {{ csrf_field() }}
                  <a href="{{ route('client.show',$c) }}"><div class="mycreate"></div></a>
                  <button type="submit"><div class="mydel"></div></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    <div class="text-center">
        {{ $all_c->render() }}
    </div>
    <div class="text-center">
      <a class="btn btn-block btn-primary" href="{{route('client.create')}}">Добавить клиента</a>
    </div>

@endsection
