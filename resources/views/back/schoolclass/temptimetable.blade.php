@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('class.list') }}">Классы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Щаблон расписания</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Щаблон расписания
            </div>
            <div class="card-body">
                Понедельник
                <a class="btn btn-primary" href="{{route('timptimetable.edit',['id'=>1,'n'=>1])}}" role="button">Изменить</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Порядок</th>
                        <th scope="col">Предмет</th>
                        <th scope="col">Учитель</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Математика
                            </td>
                            <td>
                                Трандасир Яна Перовна
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Математика
                            </td>
                            <td>
                                Трандасир Яна Перовна
                            </td>
                        </tr>

                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Русс.яз
                            </td>
                            <td>
                                Гудук Наталья Владимировна
                            </td>
                        </tr>

                        <tr>
                            <td>
                                4
                            </td>
                            <td>
                                Общество
                            </td>
                            <td>
                                Петрешка Яна Владимировна
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5
                            </td>
                            <td>
                                География
                            </td>
                            <td>
                                Петровна Наталья Ивановна
                            </td>
                        </tr>
                        <tr>
                            <td>
                                6
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                        </tr>


                    </tbody>
                </table>



            </div>
        </div>
    </div>
@endsection
