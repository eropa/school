@extends('layouts.appback')

@section('content')
    <div class="container-fluid">


        <div class="card">
            <div class="card-header">
                Успеваемость Математика  11А класс (10.02.2020)
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Ученик</th>
                        <th scope="col">Успеваемость</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">2</th>
                        <td>Иванов И.А.</td>
                        <td>
                            <select class="selectpicker" data-live-search="true" data-size="5">
                                <option value="0" selected disabled>Выберите значение</option>
                                <option value="-1" >Неявка</option>
                                <option value="2" >2</option>
                                <option value="3" >3</option>
                                <option value="4" >4</option>
                                <option value="5" >5</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Петров В.А.</td>
                        <td>
                            <select class="selectpicker" data-live-search="true" data-size="5">
                                <option value="0" selected disabled>Выберите значение</option>
                                <option value="-1" >Неявка</option>
                                <option value="2" >2</option>
                                <option value="3" >3</option>
                                <option value="4" >4</option>
                                <option value="5" >5</option>

                            </select>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <hr>
                <button type="button" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
@endsection
