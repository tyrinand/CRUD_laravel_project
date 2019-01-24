@extends('layouts.myl')
@section('content')
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Название</th>
          <th>Сайт</th>
          <th>ФИО админа</th>
          <th>Телефон</th>
          <th>Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($all_shop as $s)
          <tr>
            <td>{{ $s->name }}</td>
            <td>{{ $s->site }}</td>
            <td>{{ $s->fio }}</td>
            <td>{{ $s->phone }}</td>
            <td>
               <form class="" action="{{ route('shop.destroy',$s) }}" method="post" onsubmit="if(confirm('Удалить?')){return true}else{return false}">
                <input type="hidden" name="_method" value="DELETE">
                  {{ csrf_field() }}
                  <a href="{{ route('shop.show',$s) }}"><div class="mycreate"></div></a>
                  <button type="submit"> <div class="mydel"></div> </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    <div class="text-center">
        {{ $all_shop->render() }}
    </div>
    <div class="text-center">
      <a class="btn btn-block btn-primary" href="{{route('shop.create')}}">Добавить</a>
    </div>

@endsection
