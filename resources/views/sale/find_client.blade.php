@extends('layouts.myl')
@section('content')
  <h4 class="text-center">Поиск продаж по клиенту</h4>
<form class="form-horizontal" action="{{ route('find_c') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
      <label for="id_client" class="col-md-4 control-label">Клиенты</label>
      <div class="col-md-5">
        <select class="form-control" name="id_client" id="id_client">
          <option selected disabled value="">Выберете клиента</option>
          @isset($_POST['id_client'])
          @foreach ($all_c as $c)
            @if($c->id == $_POST['id_client'])<option selected value="{{ $c->id }}">{{ $c->name }}</option>
            @else <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endif
          @endforeach
          @else
          @foreach ($all_c as $c)
           <option value="{{ $c->id }}">{{ $c->name }}</option>
          @endforeach
        @endisset
        </select>
      </div>
  </div>
    <div class="col-sm-6 col-sm-offset-3">
      <button class="btn btn-block btn-primary" type="submit" name="button">Найти</button>
    </div>
</form>
<br><br>
    <h1></h1>
  @if(!empty($all_s))
  <div class="container">
    <div class="col-md-12">
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
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    </div>
    @endif


@endsection
