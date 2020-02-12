@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('subjects.list') }}">Предметы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Создать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Создать предмет
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('subjects.story') }}">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
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
