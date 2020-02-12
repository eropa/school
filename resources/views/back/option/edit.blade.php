@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"
                    aria-current="page">Параметр сайта</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Редактировать параметры сайта
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('option.update') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Телефон</label>
                        <input type="text"
                               name="phone"
                               value="{{$option['phone']}}"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input type="text"
                               name="email"
                               value="{{$option['email']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Название сайта</label>
                        <input type="text"
                               name="title"
                               value="{{$option['title']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст слайда1</label>
                        <input type="text"
                               name="slaid1"
                               value="{{$option['slaid1']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст слайда2</label>
                        <input type="text"
                               name="slaid2"
                               value="{{$option['slaid2']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст слайда3</label>
                        <input type="text"
                               name="slaid3"
                               value="{{$option['slaid3']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Картинка</label>
                        <input type="file" name="logo" class="form-control-file" >
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-primary">
                        Сохранить
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
