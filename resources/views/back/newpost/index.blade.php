@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Список новостей
                <a class="btn btn-success"
                   href="{{ route('newpos.create') }}" role="button">
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
                        <th scope="col">Дата публикации</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $new)
                            <tr>
                                <td>{{$new->id}}</td>
                                <td>
                                    <a href="{{route('newpos.edit',['id'=>$new->id])}}">
                                        {{$new->name}}
                                    </a>
                                   </td>
                                <td>{{$new->group->name}}</td>
                                <td>{{$new->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
