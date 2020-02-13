@extends('frontsubdomen.index')



@section('content')
    <div class="news-updates">

        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="text-black">Новости</h2>
                        <a href="#">Читать все новости</a>
                    </div>
                    <div class="row">
                    @foreach($news as $item)
                        <div class="col-lg-4">
                            @if(isset($item))
                                <div class="post-entry-big">
                                    <a href="{{ route('schoolfront.shownew',['nameurl'=>$nameurl,'id'=>$item->id]) }}" class="img-link">
                                        <img src="{{ asset('images/blog_large_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a href="#">
                                                @if(is_null($item->created_at))
                                                    June 6, 2019
                                                @else
                                                    {{$item->updated_at}}
                                                @endif
                                            </a>
                                            <span class="mx-1">/</span>
                                            <a href="#">{{$item->group->name}}</a>
                                        </div>
                                        <h3 class="post-heading">
                                            <a href="{{ route('schoolfront.shownew',['nameurl'=>$nameurl,'id'=>$item->id]) }}">
                                                {{$item->name}}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection