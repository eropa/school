@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">

        </nav>

        <div class="card">
            <div class="card-header">
                Расписание (10.02.2020)
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Порядок</th>
                        <th scope="col">Предмет</th>
                        <th scope="col">класс</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Математика
                            </td>
                            <td>
                                11А класс (
                                    <a href="{{ route('timetable.result') }}">
                                        успеваемость
                                    </a>

                                )
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
