@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('page.list') }}">Список страниц</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Редактировать</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
               Страница
            </div>
            <div class="card-body">
                <form action="{{ route('page.update',['id'=>$data->id]) }}" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text"
                               name="name"
                               value="{{$data->name}}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст</label>
                        <textarea name="editor1">
                            {!! $data->texthtml !!}
                        </textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Выберите группу</label>
                        <select class="selectpicker" data-live-search="true" name="grouppage_id" data-size="5">
                            @foreach($grouppage as $item)
                                <option value="{{$item->id}}"
                                        @if($item->id==$data->grouppage_id)
                                            selected
                                        @endif
                                         >{{$item->name}}</option>
                            @endforeach
                        </select>
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
