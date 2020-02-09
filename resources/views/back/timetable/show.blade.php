@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">

        </nav>

        <div class="card">
            <div class="card-header">
                Просмотреть расписание
            </div>
            <div class="card-body">
                <form method="post">
                    Класс
                    <select class="selectpicker" data-live-search="true" data-size="5">
                        <option value="0" selected disabled>Выберите класс</option>
                        <option value="0" >11А класс</option>
                        <option value="0" >11Б класс</option>

                    </select>
                    <hr>
                    Расписание
                    <input id="date" type="date" >

                    <hr>
                    <button type="submit" class="btn btn-primary">
                        Просмотреть
                    </button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
