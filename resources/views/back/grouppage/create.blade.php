@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('grouppage.list') }}">Группы страниц</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Создать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Группу страниц
            </div>
            <div class="card-body">
                <form action="{{ route('grouppage.story') }}" method="post">
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

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="menu" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">В меню</label>
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
