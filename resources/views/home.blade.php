@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Здравствуй, {{Auth::user()->name }}
                  <br>
                  Ваш уровень доступа -
                    @if(Auth::user()->dost == 0)
                    админ
                    @elseif(Auth::user()->dost == 1)
                         редактор
                    @else пользователь
                    @endif
                </div>
                <div class="panel-body">
                @can('view',Auth::user())
                  <a href="{{ route('allUsers') }}">Управлять пользователями</a>
                @endcan
                <br>
                <hr>
                  <a href="{{ route('firstpage') }}">Управлять системой</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
