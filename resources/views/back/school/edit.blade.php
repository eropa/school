@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('school.list') }}">Школы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Редактировать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Редактировать школу
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
                               value="{{$data->name}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Полное название</label>
                        <input type="text"
                               value="{{$data->fullname}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <input type="text"
                               value="{{$data->about}}"
                               class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Субдомен</label>
                        <input type="text"
                               value="{{$data->url}}"
                               class="form-control">
                    </div>



                    <button type="submit" class="btn btn-primary">
                        Сохранить
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
