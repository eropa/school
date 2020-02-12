@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('subjects.list') }}">Предметы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Редактировать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Редактировать предмет
            </div>
            <div class="card-body">
                <form action="{{ route('subjects.update',['id'=>$data->id]) }}" method="post">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
                               value="{{$data->name}}"
                               name="name"
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
