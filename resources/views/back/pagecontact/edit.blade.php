@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"
                    aria-current="page">Страница контакты</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Редактировать
            </div>
            <div class="card-body">
                <form action="{{ route('pagecontact.update') }}" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст страницы</label>
                        <textarea name="editor1">
                            {!! $data->texthtml !!}
                        </textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>


                    @csrf
                    <button type="submit" class="btn btn-primary">
                        Сохранить
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
