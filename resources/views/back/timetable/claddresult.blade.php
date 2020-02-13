@extends('layouts.appback')

@section('content')
    <div class="container-fluid">

        <?php
            $id=$dataDay->teachersubjectclass_id;
            $datainfo=\App\Models\Teachersubjectclass::find($id);
            $pupils=\App\Models\Classpupil::where('schoolclass_id', $datainfo->school->id)->get();
        ?>
        <div class="card">
            <div class="card-header">
                {{ $datainfo->school->name }} / {{ $datainfo->subject->name }} / {{$dataDay->datelesson}}
            </div>
            <div class="card-body">
                <form action="{{ route('timetable.setResult',['id'=>$id]) }}" method="post">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ученик</th>
                            <th scope="col">Успеваемость</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pupils as $pupil)
                            <?php
                                    $resultPupil=-2;
                                    $dataResultPupil=\App\Models\Result::where('timetable_id',$dataDay->id)
                                        ->where('pupil_id',$pupil->pupil->id)->first();
                                    if(!is_null($dataResultPupil)){
                                        $resultPupil=$dataResultPupil->result;
                                    }
                            ?>
                            <tr>
                                <td>
                                    {{$pupil->pupil_id}}
                                </td>
                                <td>
                                    {{$pupil->pupil->name}}
                                </td>
                                <td>
                                    <select class="selectpicker"
                                            name="result{{$pupil->pupil_id}}"
                                            data-live-search="true"
                                            data-size="7">
                                        <option value="" selected disabled>Выберите значение</option>
                                        <option value="0" >-</option>
                                        <option value="-1" @if($resultPupil==-1)selected @endif >н.я.</option>
                                        <option value="2"  @if($resultPupil==2)selected @endif>2</option>
                                        <option value="3"  @if($resultPupil==3)selected @endif>3</option>
                                        <option value="4"  @if($resultPupil==4)selected @endif>4</option>
                                        <option value="5"  @if($resultPupil==5)selected @endif>5</option>


                                    </select>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                    @csrf
                    <input type="hidden" name="datar" value="{{$dataDay->datelesson}}">
                    <input type="hidden" name="record" value="{{$dataDay->id}}">

                    <button type="submit" class="btn btn-primary">
                        Создать
                    </button>
                </form>


            </div>
        </div>
    </div>
@endsection
