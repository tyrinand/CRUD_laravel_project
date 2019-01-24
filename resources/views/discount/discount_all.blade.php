@extends('layouts.myl')
@section('content')
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Величина</th>
          <th>Описание</th>
          <th>Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($all_d as $s)
          <tr>
            <td>{{ $s->val }}</td>
            <td>{{ $s->des }}</td>
            <td>
               <form class="" action="{{ route('discount.destroy',$s) }}" method="post" onsubmit="if(confirm('Удалить?')){return true}else{return false}">
                <input type="hidden" name="_method" value="DELETE">
                  {{ csrf_field() }}
                  <a href="{{ route('discount.show',$s) }}"><div class="mycreate"></div></a>
                  <button type="submit"> <div class="mydel"></div> </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    <div class="text-center">
        {{ $all_d->render() }}
    </div>
    <div class="text-center">
      <a class="btn btn-block btn-primary" href="{{route('discount.create')}}">Добавить</a>
    </div>

@endsection
