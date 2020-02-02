@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('user.list') }}">Пользователи</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Редактировать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Редактировать пользователя
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ф.И.О.</label>
                        <input type="text"
                               value="{{$data->name}}"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email"
                               class="form-control"
                               value="{{$data->email}}"
                               readonly
                               >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Роль</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option
                                    @if($data->role=="admin")
                                     selected
                                    @endif>
                                Администратор
                            </option>

                            <option
                                    @if($data->role=="meneger")
                                    selected
                                    @endif>Менеджер</option>

                            <option
                                    @if($data->role=="teacher")
                                    selected
                                    @endif>Учитель</option>

                            <option
                                    @if($data->role=="parent")
                                    selected
                                    @endif>Родитель</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Сохранить
                    </button>
                </form>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Новый пароль</label>
                        <input type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Сохранить новый пароль
                    </button>
                </form>
                @if($data->role=="meneger")
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Связать со школой</label>
                            <select class="selectpicker" data-live-search="true" data-size="5">
                                <option value="0" selected disabled>Выберите школу</option>
                                @foreach($schools as $school)
                                    <option value="{{$school->id}}"
                                        @if($data->school->school_id==$school->id)
                                            selected
                                        @endif
                                    >{{$school->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <button type="submit" class="btn btn-primary">
                            Сохранить связь
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
