@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Список групп страниц
                <a class="btn btn-success"
                   href="{{ route('grouppage.create') }}" role="button">
                    Добавить
                </a>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dataTable">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Название группы</th>
                        <th scope="col">Меню</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>
                                    <a href="{{route('grouppage.edit',['id'=>$data->id])}}">
                                        {{$data->name }}
                                    </a>
                                </td>
                                <td>
                                    @if($data->menu)
                                        да
                                    @else
                                        нет
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
