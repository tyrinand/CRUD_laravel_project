<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1 class="text-center">БД учет продажи ПО</h1>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
                  <div class="panel-heading">Вход в систему</div>

                    <div class="panel-body">

                      <div class="text-center">
                        @if(!empty($e)){{$e}}
                        @endif
                      </div>
                        
                      <br>
                      <form class="form-horizontal" method="post" action="{{ route('login') }}">
                        {{ csrf_field() }}
                          <div class="form-group
                          @if(!empty($e)){{$e}}
                          {{ $e ? ' has-error' : '' }}
                            @endif
                          ">
                              <label for="email" class="col-md-4 control-label">Логин</label>
                              <div class="col-md-6">
                                  <input id="email" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                              </div>
                          </div>
                          <div class="form-group @if(!empty($e)){{$e}}
                          {{ $e ? ' has-error' : '' }}
                            @endif">
                              <label for="password" class="col-md-4 control-label">Пароль</label>
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-10 col-sm-offset-1">
                                <button type="submit" class="btn btn-block  btn-primary">Войти</button>
                              </div>
                          </div>

                          </div>
                      </form>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
