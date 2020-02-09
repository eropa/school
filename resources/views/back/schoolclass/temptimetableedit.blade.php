@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('class.list') }}">Классы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Щаблон расписания(коректировать)</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Щаблон расписания / Коректировать
            </div>
            <div class="card-body">
                Понедельник
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Порядок</th>
                        <th scope="col">Предмет</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <select class="selectpicker" data-live-search="true" data-size="5">
                                    <option value="0" selected disabled>Выберите предмет/учитель</option>
                                    <option value="0" >Математика / Трандасир Яна Перовна</option>
                                    <option value="0" >Русс.яз / Гудук Наталья Владимировна</option>
                                    <option value="0" >Общество / Петрешка Яна Владимировна</option>
                                    <option value="0" >География / Петровна Наталья Ивановна</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                <select class="selectpicker" data-live-search="true" data-size="5">
                                    <option value="0" selected disabled>Выберите предмет/учитель</option>
                                    <option value="0" >Математика / Трандасир Яна Перовна</option>
                                    <option value="0" >Русс.яз / Гудук Наталья Владимировна</option>
                                    <option value="0" >Общество / Петрешка Яна Владимировна</option>
                                    <option value="0" >География / Петровна Наталья Ивановна</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                <select class="selectpicker" data-live-search="true" data-size="5">
                                    <option value="0" selected disabled>Выберите предмет/учитель</option>
                                    <option value="0" >Математика / Трандасир Яна Перовна</option>
                                    <option value="0" >Русс.яз / Гудук Наталья Владимировна</option>
                                    <option value="0" >Общество / Петрешка Яна Владимировна</option>
                                    <option value="0" >География / Петровна Наталья Ивановна</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                            <td>
                                <select class="selectpicker" data-live-search="true" data-size="5">
                                    <option value="0" selected disabled>Выберите предмет/учитель</option>
                                    <option value="0" >Математика / Трандасир Яна Перовна</option>
                                    <option value="0" >Русс.яз / Гудук Наталья Владимировна</option>
                                    <option value="0" >Общество / Петрешка Яна Владимировна</option>
                                    <option value="0" >География / Петровна Наталья Ивановна</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5
                            </td>
                            <td>
                                <select class="selectpicker" data-live-search="true" data-size="5">
                                    <option value="0" selected disabled>Выберите предмет/учитель</option>
                                    <option value="0" >Математика / Трандасир Яна Перовна</option>
                                    <option value="0" >Русс.яз / Гудук Наталья Владимировна</option>
                                    <option value="0" >Общество / Петрешка Яна Владимировна</option>
                                    <option value="0" >География / Петровна Наталья Ивановна</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                6
                            </td>
                            <td>
                                <select class="selectpicker" data-live-search="true" data-size="5">
                                    <option value="0" selected disabled>Выберите предмет/учитель</option>
                                    <option value="0" >Математика / Трандасир Яна Перовна</option>
                                    <option value="0" >Русс.яз / Гудук Наталья Владимировна</option>
                                    <option value="0" >Общество / Петрешка Яна Владимировна</option>
                                    <option value="0" >География / Петровна Наталья Ивановна</option>
                                </select>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <a class="btn btn-success" href="{{route('timptimetable.edit',['id'=>1,'n'=>1])}}" role="button">Сохранить</a>



            </div>
        </div>
    </div>
@endsection
