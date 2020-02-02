@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Список школ
                <a class="btn btn-success"
                    href="{{ route('school.create') }}" role="button">
                    Добавить
                </a>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Школа</th>
                            <th scope="col">url</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>
                                <a href="{{ route('school.edit',['id'=>$data->id]) }}">
                                    {{ $data->name }}
                                </a>
                                <i class="fa fa-close"></i></td>

                            <td>
                                <a target="_blank"
                                    href="http://{{ $data->url.".rybruno.ru" }}:8000">
                                    {{ $data->url }}
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