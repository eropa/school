@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('user.list') }}">Пользователи</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Создать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Создать пользователя
            </div>
            <div class="card-body">
                <form>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ф.И.О.</label>
                        <input type="text"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email"
                               class="form-control"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Роль</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="" selected>Выберите роль</option>
                            <option>Администратор</option>
                            <option>Менеджер</option>
                            <option>Учитель</option>
                            <option>Родитель</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">
                        Создать
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
