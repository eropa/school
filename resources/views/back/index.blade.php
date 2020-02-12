@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
            @can('showAdmin', \App\User::class)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Главная страница <b>Статистика</b></div>
                            <div class="card-body">
                                Всего школ : <b>{{ getCountSchool() }}</b>
                                <br>
                                Всего пользователей : <b>{{getCountUser()}}</b>
                                <hr>
                                Администратор: <b>{{getCountRole('admin')}}</b><br>
                                Менеджеров: <b>{{getCountRole('meneger')}}</b><br>
                                Учителей: <b>{{getCountRole('teacher')}}</b><br>
                                Родителей: <b>{{getCountRole('parent')}}</b><br>
                                <hr>
                                Учеников: <b>{{getCountPupil()}}</b><br>

                            </div>
                        </div>
                    </div>
                </div>
            @endcan


            @can('showManager', \App\User::class)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Главная страница <b>САЙТ</b></div>
                            <div class="card-body">
                                <a href="http://{{ getSite().env('SCHOOLDOMEN','.rybruno.ru:8000') }}" target="_blank">
                                    {{ getSite() }}
                                </a>

                                <hr>
                                Кол-во групп новостей - <b>{{getCountGroupNewSait()}}</b><br>
                                Кол-во новостей - <b>{{ getCountNewSait() }}</b><br>
                                Кол-во групп страниц - <b>{{ getCountGroupPageSait() }}</b><br>
                                Кол-во страниц - <b>{{getCountPageSait()}}</b><br>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
            @can('showParent', \App\User::class)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Главная страница <b>Ученики</b></div>
                            <div class="card-body">
                                Иванов Иван Анатольевич (МОУ РРСОШ Школа №6  л/к, класс 11А)
                                <a href="{{route('parent.parent1')}}">успеваемость</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
            @can('showTeacher', \App\User::class)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Главная страница <b> Учитель</b></div>
                            <div class="card-body">
                                <form method="post" action="{{ route('timetable.teacher') }}">
                                    Расписание на <input id="date" type="date">
                                    <hr>
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Посмотреть</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
    </div>
@endsection
