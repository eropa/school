@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('school.list') }}">Школы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Создать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Создать школу
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('school.story') }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
                               name="name"
                               required
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Полное название</label>
                        <input type="text"
                               name="fullname"
                               required
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <input type="text"
                               name="about"
                               required
                               class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Субдомен</label>
                        <input type="text"
                               name="url"
                               required
                               class="form-control">
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
