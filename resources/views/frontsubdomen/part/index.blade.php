@extends('frontsubdomen.index')

@section('slider')
    <div class="hero-slide owl-carousel site-blocks-cover">


        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>{{$option['slaid1']}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>{{$option['slaid2']}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>{{$option['slaid3']}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="news-updates">

        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="text-black">Новости</h2>
                        <a href="{{ url('/news') }}">Читать все новости</a>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            @if(isset($news[0]))
                                <div class="post-entry-big">
                                    <a href="{{ url('new_'.$news[0]->id) }}" class="img-link">
                                        <img src="{{ asset('images/blog_large_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a href="{{ url('new_'.$news[0]->id) }}">
                                                @if(is_null($news[0]->created_at))
                                                    June 6, 2019
                                                @else
                                                    {{$news[0]->updated_at}}
                                                @endif
                                            </a>
                                            <span class="mx-1">/</span>
                                            <a href="{{ url('new_'.$news[0]->id) }}">{{$news[0]->group->name}}</a>
                                        </div>
                                        <h3 class="post-heading">
                                            <a href="{{ url('new_'.$news[0]->id) }}">
                                                {{$news[0]->name}}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            @endif
                        </div>


                        <div class="col-lg-6">
                            @for ($i =1; $i < count($news) ; $i++)
                                <div class="post-entry-big horizontal d-flex mb-4">
                                    <a href="{{ url('new_'.$news[$i]->id) }}" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a ref="{{ url('new_'.$news[$i]->id) }}">
                                                @if(is_null($news[$i]->created_at))
                                                    June 6, 2019
                                                @else
                                                    {{$news[$i]->updated_at}}
                                                @endif
                                            </a>
                                            <span class="mx-1">/</span>
                                            <a ref="{{ url('new_'.$news[$i]->id) }}">{{$news[$i]->group->name}}</a>
                                        </div>
                                        <h3 class="post-heading">
                                            <a href="{{ url('new_'.$news[$i]->id) }}">
                                                {{$news[$i]->name}}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection