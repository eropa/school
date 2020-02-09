@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">

        </nav>

        <div class="card">
            <div class="card-header">
                Сгенерировать расписание
            </div>
            <div class="card-body">
                <form>
                    Расписание с
                    <input id="date" type="date" > по
                    <input id="date" type="date" >

                    <hr>
                    <button type="submit" class="btn btn-primary">
                        Сгенерировать
                    </button>

                </form>
            </div>
        </div>
    </div>
@endsection
