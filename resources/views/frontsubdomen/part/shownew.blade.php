@extends('frontsubdomen.index')



@section('content')


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"

         style="background-image: url('images/bg_1.jpg');padding-top: 125px">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">{{$news->name}}</h2>
                    <p>февраль 6, 2020</p>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="{{ url('/') }}">Главная</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">Название новости</span>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 mb-4">
                    <p class="mb-5">
                        <img src="images/course_5.jpg" alt="Image" class="img-fluid">
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, facere inventore suscipit, et nemo possimus reiciendis dignissimos assumenda, cupiditate at consequatur minima natus deserunt optio ducimus deleniti. Voluptatum, aliquid aspernatur.</p>
                    <p>Neque officia error quam suscipit necessitatibus placeat impedit, esse, quod voluptates eius facilis dolorum dolores at accusantium totam, quis minima voluptatem quisquam saepe hic. Ipsum cupiditate harum quae earum dolore?</p>
                    <p>Ea similique vel eligendi ipsam, aspernatur odit itaque inventore. Alias veritatis, mollitia laudantium dignissimos, harum repellendus in tempora at autem velit laboriosam dolorum expedita dolorem commodi quia ipsam, earum et!</p>
                    <p>Beatae sunt temporibus, at officiis repudiandae quasi dolore, deserunt nemo expedita illum dolor voluptatem reiciendis sit, iure odit harum nihil illo unde repellendus magni. Iusto perferendis quis officiis assumenda consectetur.</p>
                    <p>Quisquam assumenda eum labore non in eligendi doloremque dicta sequi culpa corrupti reiciendis cupiditate libero accusantium quod, modi ipsa sed debitis deserunt sunt voluptatem sint maxime. Iure maxime consequatur ex.</p>
                </div>

            </div>
        </div>
    </div>


@endsection