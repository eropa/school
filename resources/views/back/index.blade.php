@extends('layouts.appback')

@section('content')
    <div class="container-fluid">
            @can('showAdmin', \App\User::class)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Главная страница <b>Статистика</b></div>
                            <div class="card-body">
                                Всего школ : <b>{{ getCountSchool() }}</b>
                                <br>
                                Всего пользователей : <b>{{getCountUser()}}</b>
                                <hr>
                                Администратор: <b>{{getCountRole('admin')}}</b><br>
                                Менеджеров: <b>{{getCountRole('meneger')}}</b><br>
                                Учителей: <b>{{getCountRole('teacher')}}</b><br>
                                Родителей: <b>{{getCountRole('parent')}}</b><br>
                                <hr>
                                Учеников: <b>{{getCountPupil()}}</b><br>

                            </div>
                        </div>
                    </div>
                </div>
            @endcan


            @can('showManager', \App\User::class)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Главная страница <b>САЙТ</b></div>
                            <div class="card-body">
                                <a href="http://{{ getSite().env('SCHOOLDOMEN','.rybruno.ru:8000') }}" target="_blank">
                                    {{ getSite() }}
                                </a>

                                <hr>
                                Кол-во групп новостей - <b>{{getCountGroupNewSait()}}</b><br>
                                Кол-во новостей - <b>{{ getCountNewSait() }}</b><br>
                                Кол-во групп страниц - <b>{{ getCountGroupPageSait() }}</b><br>
                                Кол-во страниц - <b>{{getCountPageSait()}}</b><br>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
            @can('showParent', \App\User::class)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Главная страница <b>Ученики</b></div>
                            <div class="card-body">
                                <?php
                                    $datap=\App\Models\Pupolparent::
                                        where('user_id',\Illuminate\Support\Facades\Auth::user()->id)
                                        ->get();
                                ?>
                                @foreach($datap as $item)
                                        <?php
                                            $p=\App\Models\Pupil::find($item->pupil_id)->first();
                                            $clas=\App\Models\Classpupil::where('pupil_id',$p->id)->first();
                                            $clasinfo=\App\Models\Schoolclass::find($clas->schoolclass_id);
                                        ?>
                                            {{$p->name}}( {{$clasinfo->name}})
                                        <a href="{{route('parent.listsubject',['id' => $item->pupil_id])}}">успеваемость</a> <hr>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            @endcan
            @can('showTeacher', \App\User::class)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Главная страница <b> Учитель</b></div>
                            <div class="card-body">
                                Закрепленные дисциплины
                                <hr>
                                <table class="table table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Класс</th>
                                        <th scope="col">Предмет</th>
                                        <th scope="col">Успеваемость</th>
                                    </tr>
                                    </thead>
                                    <?php
                                        $user=\Illuminate\Support\Facades\Auth::user();
                                        $datas=\App\Models\Teachersubjectclass::where('user_id',$user->id)->get();
                                    ?>
                                    <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{$data->id}}</td>
                                                <td>{{$data->school->name}}</td>
                                                <td>{{$data->subject->name}}</td>
                                                <td>
                                                    <a href="{{ route('timetable.listdata',['id'=>$data->id]) }}">
                                                        Просмотреть
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
    </div>
@endsection
