@extends('layouts.myl')
@section('content')
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ПО</th>
          <th>Цена</th>
          <th>Кол-во</th>
          <th>Скидка</th>
          <th>Стоимость</th>
          <th>Дата</th>
          <th>Клиент</th>
          <th>Магазин</th>
          <th>Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($all_s as $s)
          <tr>
            <td>@isset ($s->soft)
                  {{$s->soft->name}}
                @endisset
            </td>
            <td>@isset ($s->soft)
                  {{$s->soft->prise}} p.
                @endisset
            </td>
            <td>{{ $s->count }}</td>
            <td>@isset ($s->discount)
                  {{$s->discount->val}}%
                @endisset
            </td>
            <td>
              {{ $s->full_prise($s->soft->prise,$s->count,$s->discount->val) }} p.
            </td>
            <td>{{ $s->date->format('d.m.Y') }}</td>

            <td>@isset ($s->client)
                  {{$s->client->name}}
                @endisset
            </td>

            <td>@isset ($s->shop)
                  {{$s->shop->name}}
                @endisset
            </td>
            <td>
               <form class="" action="{{ route('sale.destroy',$s) }}" method="post" onsubmit="if(confirm('Удалить?')){return true}else{return false}">
                <input type="hidden" name="_method" value="DELETE">
                  {{ csrf_field() }}
                  <a href="{{ route('sale.show',$s) }}"><div class="mycreate"></div></a>
                  <button type="submit"> <div class="mydel"></div> </button>
                  <a href="{{ route('sale.print',$s) }}"><div class="print"></div></a>
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
      <a class="btn btn-block btn-primary" href="{{route('sale.create')}}">Добавить</a>
    </div>

@endsection
