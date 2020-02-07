@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('class.list') }}">Классы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Список учеников</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Список учеников
            </div>
            <div class="card-body">
                @foreach($datas as $data)
                    {{$data->id}} - {{$data->pupil->name}} <br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
