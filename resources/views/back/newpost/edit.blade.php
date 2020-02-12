@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('newpos.list') }}">Новости</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Редактировать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Редактировать новость
            </div>
            <div class="card-body">
                <form action="{{ route('newpos.update',['id'=>$data->id]) }}" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
                               name="name"
                               value="{{$data->name}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Часть текста</label>
                        <textarea name="editor1">
                            {!! $data->textsmallhtml !!}
                        </textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Остольной текст</label>
                        <textarea name="editor2">
                            {!! $data->textsfullhtml !!}
                        </textarea>
                        <script>
                            CKEDITOR.replace( 'editor2' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Группа новости</label>
                        <select class="selectpicker" data-live-search="true" name="groupnew_id" data-size="5">
                            @foreach($groupnew as $item)
                                <option value="{{$item->id}}"
                                    @if($item->id==$data->groupnew_id)
                                        selected
                                    @endif
                                >{{$item->name}}</option>
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
