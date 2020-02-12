@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Список групп новостей
                <a class="btn btn-success"
                   href="{{ route('group.create') }}" role="button">
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
                        <th scope="col">Название группы</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>
                                    <a href="{{route('group.edit',['id'=>$data->id])}}">
                                        {{$data->name }}
                                    </a>
                                    <a href="{{ route('group.destroy',['id'=>$data->id]) }}">
                                        <i class="fa fa-close"></i>
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
