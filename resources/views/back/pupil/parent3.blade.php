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
                        <th scope="col">Дата</th>
                        <th scope="col">Оценка</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->datelesson}}</td>
                                <td>
                                    <?php
                                        $dataresult=\App\Models\Result::where('timetable_id',$data->id)
                                            ->where('pupil_id',$id)->first();
                                        if(!is_null($dataresult)){
                                            if($dataresult->result==-1){
                                                echo "н.я";
                                            }else{
                                                echo $dataresult->result;
                                            }
                                        }

                                    ?>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
