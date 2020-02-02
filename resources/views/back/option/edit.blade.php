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
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Телефон</label>
                        <input type="text"
                               value="{{$option['phone']}}"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input type="text"
                               value="{{$option['email']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Название сайта</label>
                        <input type="text"
                               value="{{$option['title']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст слайда1</label>
                        <input type="text"
                               value="{{$option['slaid1']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст слайда2</label>
                        <input type="text"
                               value="{{$option['slaid2']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст слайда3</label>
                        <input type="text"
                               value="{{$option['slaid3']}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст слайда3</label>
                        <input type="text"
                               value="{{$option['logo']}}"
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
