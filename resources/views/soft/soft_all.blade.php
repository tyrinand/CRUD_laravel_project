@extends('layouts.myl')
@section('content')
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Название</th>
          <th>Описание</th>
          <th>Язык</th>
          <th>Цена</th>
          <th>Сайт</th>
          <th>Кол-во</th>
          <th>Тип носителя</th>
          <th>Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($all_s as $c)
          <tr>
            <td>{{ $c->name }}</td>
            <td>{{ $c->descr }}</td>
            <td>{{ $c->lan}}</td>
            <td>{{ $c->prise }}</td>
            <td>{{ $c->site }}</td>
            <td>{{ $c->count }}</td>
            <td>{{ $c->type }}</td>
            <td>
               <form class="" action="{{ route('soft.destroy',$c) }}" method="post" onsubmit="if(confirm('Удалить?')){return true}else{return false}">
                <input type="hidden" name="_method" value="DELETE">
                  {{ csrf_field() }}
                  <a href="{{ route('soft.show',$c) }}"><div class="mycreate"></div></a>
                  <button type="submit"><div class="mydel"></div></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    <div class="text-center">
        {{ $all_s->render() }}
    </div>
    <div class="text-center">
      <a class="btn btn-block btn-primary" href="{{route('soft.create')}}">Добавить софт</a>
    </div>

@endsection
