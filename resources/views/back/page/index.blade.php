@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Список страниц
                <a class="btn btn-success"
                   href="{{ route('page.create') }}" role="button">
                    Добавить
                </a>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dataTable">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Название</th>
                        <th scope="col">Название группы</th>
                        <th scope="col">Перейти на страницу</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>
                                <a href="{{ route('page.edit',['id'=> $data->id ]) }}">
                                    {{ $data->name }}
                                </a>
                            </td>
                            <td>{{ $data->group->name }}</td>
                            <td>
                                <a href="#">url</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
