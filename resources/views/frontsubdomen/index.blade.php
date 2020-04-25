
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$option['title']}}</title>
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
                        @if(isset($option['logo']))
                        <img src="{{ asset('images/'.$option['logo']) }}"
                             alt="Image" class="img-fluid" height="42" width="42">
                            @endif
                    </a>
                </div>
                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active">
                                <a href="{{ url('/') }}" class="nav-link text-left">Главная</a>
                            </li>

                            <li class="has-children">
                                <a href="{{ url('/news') }}" class="nav-link text-left">Новости</a>
                                <ul class="dropdown">
                                    @foreach($groupnew as $item)
                                        <li>
                                            <a href="{{ url('/gr_'.$item->id) }}">
                                                {{$item->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <?php
                                $dataUrl=\App\Models\School::where('url',$nameurl)->first();

                                $groups=\App\Models\Grouppage::Where('school_id', $dataUrl->id)->Where('menu',1)->get();
                            ?>

                            @foreach($groups as $group)
                            <?php
                                    $countpage=\App\Models\Page::where('grouppage_id',$group->id)
                                        ->count();

                                ?>

                                @if($countpage>0)

                                    <li class="has-children">
                                        <a href="grp_{{$group->id}}" class="nav-link text-left">{{$group->name}}</a>
                                        <?php
                                            $pagas=\App\Models\Page::where('grouppage_id',$group->id)
                                                ->get();

                                        ?>
                                        <ul class="dropdown">
                                            @foreach($pagas as $paga)
                                                <li><a href="{{ url('/page_'.$paga->id) }}">{{$paga->name}}</a></li>
                                            @endforeach


                                        </ul>
                                    </li>

                                @else
                                    <li>
                                        <a href="grp_{{$group->id}}" class="nav-link text-left">{{ $group->name }}</a>
                                    </li>
                                @endif

                            @endforeach



                            <li>
                                <a href="{{ url('/contact') }}" class="nav-link text-left">Контакты</a>
                            </li>
                        </ul>                                                                                                                                                                                                                                                                                          </ul>
                    </nav>

                </div>
                <div class="col-lg-3 text-right">
                    <a href="{{ route('login') }}" class="small mr-3"><span class="icon-unlock-alt"></span> Вход</a>
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                </div>

            </div>
        </div>

    </header>

    @yield('slider')




    <div></div>




    @yield('content')


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @if(isset($option['logo']))
                        <p class="mb-4">
                            <img src="{{ asset('images/'.$option['logo']) }}" alt="Image" class="img-fluid"></p>
                    @endif
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Новости</span></h3>
                    <ul class="list-unstyled">
                        @foreach($groupnew as $item)
                            <li>  <a href="{{ url('/gr_'.$item->id) }}">{{$item->name}}</a></li>
                        @endforeach

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
