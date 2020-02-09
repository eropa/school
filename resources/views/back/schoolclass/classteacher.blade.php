@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('class.list') }}">Классы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Список учителей</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Список учителей
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="{{ route('showclass.addteacjer',['id'=>$id]) }}" role="button">Добавить</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Учитель</th>
                        <th scope="col">Предмет</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->user->name}}</td>
                            <td>{{$data->subject->name}}</td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>



            </div>
        </div>
    </div>
@endsection
