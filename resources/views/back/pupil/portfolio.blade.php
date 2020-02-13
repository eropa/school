@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('class.list') }}">Классы</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Портфолио ученика</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('pupil.storygramota',['id'=>$pupil->id]) }}" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
                               name="name"
                               required
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Загрузить</label>
                        <input type="file" class="form-control-file" name="fileload" id="exampleFormControlFile1">
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        Создать
                    </button>
                </form>
                <hr>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($datas as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->name}}</td>
                            <td><img src="{{ asset('/images/'.$data->foto) }}" alt="..." class="img-thumbnail"></td>
                            <td>
                                <a href="{{route('pupil.deleteport',['id'=>$data->id])}}">
                                    Удалить
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
