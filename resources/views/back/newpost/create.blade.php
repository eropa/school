@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('newpos.list') }}">Новостей</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Создать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Создать новость
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Часть текста</label>
                        <textarea name="editor1"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Остольной текст</label>
                        <textarea name="editor2"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor2' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Остольной текст</label>
                        <select class="selectpicker" data-live-search="true" data-size="5">
                            <option value="0" selected disabled>Выберите группу</option>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Создать
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
