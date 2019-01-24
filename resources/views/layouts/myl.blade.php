<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Продажа ПО</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/first') }}">
                      <img src="{{ asset('1.png') }}" width="100" height="30" alt="logo">
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                Просмотр справочников <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('sale.index') }}">Продажи</a>
                                    <a href="{{ route('soft.index') }}">Софт</a>
                                    <a href="{{ route('shop.index') }}">Магазины</a>
                                    <a href="{{ route('client.index') }}">Клиенты</a>
                                    <a href="{{ route('discount.index') }}">Скидки</a>
                                </li>
                            </ul>
                        </li>
                          <li><a href="{{ route('sale.create') }}">Добавить заказ</a> </li>

                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                  Поиск <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu">
                                  <li>
                                      <a href="{{ route('find_client') }}">Клиента</a>
                                      <a href="{{ route('find_po') }}">По клиенту и ПО</a>
                                  </li>
                              </ul>
                          </li>

                          <li> <a href="{{ route('stat') }}">Статистика</a> </li>

                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                  Печать <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu">
                                  <li>
                                      <a href="{{ route('print_one') }}">Простой документ</a>
                                      <a href="{{ route('print_many') }}">Список всех продаж</a>
                                  </li>
                              </ul>
                          </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
          @yield('content')
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('myscript')
</body>
</html>
