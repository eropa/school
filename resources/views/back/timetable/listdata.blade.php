@extends('layouts.appback')

@section('content')
    <div class="container-fluid">

        <?php
            $datainfo=\App\Models\Teachersubjectclass::find($id);
            //dd($datainfo);
        ?>
        <div class="card">
            <div class="card-header">
                {{ $datainfo->school->name }} / {{ $datainfo->subject->name }}
            </div>
            <div class="card-body">

                    <form action="{{ route('timetable.adddate',['id'=>$id]) }}" method="post">
                        Новый урок  <input id="date" name="datagenerate" type="date" >
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            Сгенерировать
                        </button>
                    </form>
                    <hr>


            </div>
        </div>
    </div>
@endsection
