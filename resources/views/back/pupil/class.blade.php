@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('class.list') }}">Классы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Список учеников</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Список учеников
            </div>
            <div class="card-body">


                    <table class="table table-hover" id="dataTable">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Ученик</th>
                            <th scope="col">портфолио</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>
                                    {{$data->id}}
                                </td>
                                <td>
                                    {{$data->pupil->name}}
                                </td>
                                <td>
                                    <a href="{{ route('pupil.show',['id'=> $data->id]) }}" target="_blank">
                                        смотреть
                                    </a>
                                </td>
                            </tr>
                        @endforeach



                        </tbody>

            </div>
        </div>
    </div>
@endsection
