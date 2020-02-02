
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$option['title']}} &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 d-none d-lg-block">
                    <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Есть вопрос?</a>
                    <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>{{$option['phone']}}</a>
                    <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> {{$option['email']}}</a>
                </div>
            </div>
        </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="index.html" class="d-block">
                        <img src="{{ asset('images/'.$option['logo']) }}"
                             alt="Image" class="img-fluid" height="42" width="42">
                    </a>
                </div>
                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active">
                                <a href="index.html" class="nav-link text-left">Главная</a>
                            </li>

                            <li class="has-children">
                                <a href="about.html" class="nav-link text-left">Новости</a>
                                <ul class="dropdown">
                                    @foreach($groupnew as $item)
                                        <li><a href="teachers.html">{{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="has-children">
                                <a href="about.html" class="nav-link text-left">О школе</a>
                                <ul class="dropdown">
                                    <li><a href="teachers.html">Контактная информация</a></li>
                                    <li><a href="teachers.html">Педагогический коллектив</a></li>
                                    <li><a href="teachers.html">Правила поведения учащихся</a></li>
                                    <li><a href="teachers.html">Атрибутика школы</a></li>
                                    <li><a href="teachers.html">История школы</a></li>
                                    <li><a href="teachers.html">Школьная документация</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="admissions.html" class="nav-link text-left">Наши достижения</a>
                            </li>
                            <li>
                                <a href="contact.html" class="nav-link text-left">Контакты</a>
                            </li>
                        </ul>                                                                                                                                                                                                                                                                                          </ul>
                    </nav>

                </div>
                <div class="col-lg-3 text-right">
                    <a href="login.html" class="small mr-3"><span class="icon-unlock-alt"></span> Вход</a>
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                </div>

            </div>
        </div>

    </header>


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


    <div></div>





    <div class="news-updates">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="text-black">Новости</h2>
                        <a href="#">Читать все новости</a>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            @if(isset($news[0]))
                                <div class="post-entry-big">
                                    <a href="news-single.html" class="img-link">
                                        <img src="{{ asset('images/blog_large_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a href="#">
                                                @if(is_null($news[0]->created_at))
                                                    June 6, 2019
                                                @else
                                                    {{$news[0]->updated_at}}
                                                @endif
                                            </a>
                                            <span class="mx-1">/</span>
                                            <a href="#">{{$news[0]->group->name}}</a>
                                        </div>
                                        <h3 class="post-heading">
                                            <a href="news-single.html">
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
                                    <a href="news-single.html" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a href="#">
                                                @if(is_null($news[$i]->created_at))
                                                    June 6, 2019
                                                @else
                                                    {{$news[$i]->updated_at}}
                                                @endif
                                            </a>
                                            <span class="mx-1">/</span>
                                            <a href="#">{{$news[$i]->group->name}}</a>
                                        </div>
                                        <h3 class="post-heading">
                                            <a href="news-single.html">
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


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <p class="mb-4"><img src="{{ asset('images/'.$option['logo']) }}" alt="Image" class="img-fluid"></p>

                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Новости</span></h3>
                    <ul class="list-unstyled">
                        @foreach($groupnew as $item)
                            <li><a href="{{$item->id}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>О школе</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Школьная дума</a></li>
                        <li><a href="#">Наши достижения</a></li>
                        <li><a href="#">Начальная школа</a></li>
                        <li><a href="#">Конкурсы и положения</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>




<script src="js/main.js"></script>

</body>

</html>