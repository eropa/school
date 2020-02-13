@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('class.list') }}">Классы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">создать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Создать ученика
            </div>
            <div class="card-body">
                <form action="{{ route('pupilclass.story') }}" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ф.И.О.</label>
                        <input type="text"
                               name="name"
                               required
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Класс</label>
                        <select class="selectpicker" data-live-search="true" name="school_id" data-size="5">
                            <option value="0" selected disabled>Выберите класс</option>
                            @foreach($datas as $data)
                                <option value="{{ $data->id }}" >{{$data->name}}</option>
                            @endforeach



                        </select>
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-primary">
                        Создать
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
