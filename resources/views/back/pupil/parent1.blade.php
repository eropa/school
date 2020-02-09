@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">

        </nav>

        <div class="card">

            <div class="card-body">
                <form method="post">
                    Предмет
                    <select class="selectpicker" data-live-search="true" data-size="5">
                        <option value="0" selected disabled>Выберите предмет</option>
                        <option value="0" >Математика</option>
                        <option value="0" >Русс.яз</option>

                    </select>
                    <hr>
                    <button type="submit" class="btn btn-primary">
                        Просмотреть
                    </button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
