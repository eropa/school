@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Список пользователей
                <a class="btn btn-success"
                    href="{{ route('user.create') }}" role="button">
                    Добавить
                </a>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dataTable">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Ф.И.О.</th>
                        <th scope="col">email</th>
                        <th scope="col">роль</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($dataUsers as $dataUser)
                            <tr>
                                <th scope="row">{{$dataUser->id}}</th>
                                <td>
                                    <a href="{{route('user.edit',['id'=>$dataUser->id])}}">
                                        {{$dataUser->name}}
                                    </a><i class="fa fa-close"></i>
                                  </td>
                                <td>{{$dataUser->email}}</td>
                                <td>{{$dataUser->role}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
