@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('group.list') }}">Группы новостей</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Создать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Создать группу новостей
            </div>
            <div class="card-body">
                <form action="{{ route('group.story') }}" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
                               name="name"
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
