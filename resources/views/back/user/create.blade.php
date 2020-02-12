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
                <form action="" method="post">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ф.И.О.</label>
                        <input type="text"
                               name="name"
                               class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Пароль</label>
                        <input type="password"
                               name="password"
                               class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Роль</label>
                        <select class="form-control" name="role" required>
                            <option value="" selected>Выберите роль</option>
                            <option value="admin">Администратор</option>
                            <option value="meneger">Менеджер</option>
                            <option value="teacher">Учитель</option>
                            <option value="parent">Родитель</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Создать
                    </button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
