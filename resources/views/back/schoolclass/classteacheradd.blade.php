@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('class.list') }}">Классы</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('showclass.list',['id'=>$id]) }}">Список учителей</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Добавить</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Форма добавления
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('showclass.addteacjerpost',['id'=>$id]) }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Класс</label>
                        <input class="form-control"
                               value="{{$class->name}}"
                               readonly
                               type="text" placeholder="Default input">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Предмет</label>
                        <select class="selectpicker" data-live-search="true" name="subject_id" data-size="5">
                            <option value="0"

                                    selected disabled>Выберите предмет</option>
                            @foreach($datasubject as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Учитель</label>
                        <select class="selectpicker" data-live-search="true" name="user_id" data-size="5">
                            <option value="0" selected disabled>Выберите учителя</option>
                            @foreach($datauser as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
