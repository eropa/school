@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('page.list') }}">Список страниц</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Создать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Страница
            </div>
            <div class="card-body">
                <form action="{{route('page.story')}}" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
                               name="name"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст</label>
                        <textarea name="editor1"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Выберите группу</label>
                        <select class="selectpicker" data-live-search="true" name="grouppage_id" data-size="5">
                            <option value="0" selected disabled>Выберите группу</option>
                            @foreach($grouppage as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
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
