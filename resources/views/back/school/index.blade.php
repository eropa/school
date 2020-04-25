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
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

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
                                <a href="{{ route('school.destroy',['id'=>$data->id]) }}">
                                    <i class="fa fa-close"></i>
                                </a>
                            </td>




                            <td>
                                <a target="_blank"
                                    href="http://{{ $data->url.env('APP_SCHOOL','.rfpgu.ru') }}">
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
