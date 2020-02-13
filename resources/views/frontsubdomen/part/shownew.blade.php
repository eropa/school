@extends('frontsubdomen.index')



@section('content')


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"

         style="background-image: url('images/bg_1.jpg');padding-top: 125px">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">{{$news->name}}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 mb-4">
                    <p class="mb-5">
                        <img src="images/course_5.jpg" alt="Image" class="img-fluid">
                    </p>
                    {!! $news->textsmallhtml !!}
                    {!! $news->textsfullhtml !!}
                </div>

            </div>
        </div>
    </div>


@endsection