@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Имя</th>
                <th>E-mail</th>
                <th>Роль в системе</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{ $user->name  }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  @if($user->dost === 0)
                    Админ
                  @elseif($user->dost === 1)
                    Лаборант
                  @else
                    Пользователь
                  @endif
                </td>
                <td>


                  <form class="" action="{{ route('delUser',$user) }}" method="post" onsubmit="if(confirm('Удалить?')){return true}else{return false}">
                    <input type="hidden" name="_method" value="DELETE">
                    {{ csrf_field() }}
                    <a href="/edUser{{$user->id}}"><ion-icon name="create"></ion-icon></a>
                    <button type="submit"><ion-icon name="close"></ion-icon></button>

                  </form>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>

          <div class="text-center">
            <a class=" text-center" href="{{ route('newUser') }}">Создать пользователя </a>
          </div>

            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
