@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">

        </nav>

        <div class="card">

            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Предметы</th>
                        <th scope="col">действие</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>
                                    {{$item->subject->name}}
                                </td>
                                <td>
                                    <a href="{{ route('parent.result',['id'=>$id,'idrecord'=>$item->id]) }}">
                                        смотреть
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
