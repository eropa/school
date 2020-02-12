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

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

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
                                    </a>

                                    <a href="{{ route('user.destroy',['id'=>$dataUser->id]) }}">
                                        <i class="fa fa-close"></i>
                                    </a>
                                  </td>
                                <td>{{$dataUser->email}}</td>
                                <td>

                                    @if($dataUser->role=='admin')
                                        Администратор ИС
                                    @endif
                                    @if($dataUser->role=='meneger')
                                        Менеджер сайт
                                    @endif
                                    @if($dataUser->role=='teacher')
                                        Учитель
                                    @endif
                                    @if($dataUser->role=='parent')
                                        Родитель
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
