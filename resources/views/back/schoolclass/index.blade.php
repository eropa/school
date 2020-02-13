@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-success"
                   href="{{ route('class.create') }}" role="button">
                    Добавить класс
                </a>

                <a class="btn btn-success"
                   href="{{ route('pupilclass.create') }}" role="button">
                    Добавить ученика
                </a>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dataTable">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Класс</th>
                        <th scope="col">Ученики</th>
                        <th scope="col">Предметы и учителя</th>
                        <th scope="col">Расписание</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>
                                    <a href="{{ route('class.edit',['id'=>$data->id]) }}">
                                        {{ $data->name }}
                                    </a>

                                </td>
                                <td>
                                    <a href="{{ route('pupilclass.list',['id'=>$data->id]) }}">
                                        Смотреть
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('showclass.list',['id'=>$data->id]) }}">
                                        Смотреть
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('timptimetable.list',['id'=>$data->id]) }}">
                                        Смотреть
                                    </a>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
