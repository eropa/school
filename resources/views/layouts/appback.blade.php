<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Панель управления</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.index')}}">Главная
                            <span class="sr-only">(current)</span></a>
                    </li>

                    @can('showTeacher', \App\User::class)

                    @endcan

                    @can('showAdmin', \App\User::class)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Справочик
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item"
                               href="{{route('user.list')}}">Пользователи
                            </a>

                            <a class="dropdown-item"
                               href="{{ route('school.list') }}">Школы</a>
                        </div>
                    </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Дневник
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item"
                                   href="{{route('subjects.list')}}">Предметы
                                </a>

                            </div>
                        </li>
                    @endcan

                    @can('showManager', \App\User::class)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Сайт
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('option.list')}}">Параметры сайта</a>
                                <a class="dropdown-item" href="{{route('group.list') }}">Категория новостей</a>
                                <a class="dropdown-item" href="{{route('newpos.list') }}">Новости</a>
                                <a class="dropdown-item" href="{{route('grouppage.list')}}">Категория страниц</a>
                                <a class="dropdown-item" href="{{route('page.list') }}">Страницы</a>
                                <a class="dropdown-item" href="{{route('pagecontact.edit')}}">Страница контакты</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Дневник
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('class.list')}}">Классы</a>
                            </div>
                        </li>
                    @endcan

                    @can('showManager', \App\User::class)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Расписание
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('timetable.generate')}}">Генерация</a>
                                <a class="dropdown-item" href="{{route('timetable.show')}}">Просмотреть</a>
                            </div>
                        </li>
                    @endcan

                </ul>

                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">

                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>

            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->

</body>
</html>
