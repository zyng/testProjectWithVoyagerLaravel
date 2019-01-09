<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME 1 GYM & FITNESS HTML Template</title>
    <meta name="author" content="iThemesLab">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{asset('iconpicker/css/fontawesome-iconpicker.css')}}">
    <link rel="stylesheet" href="{{asset( '/flaticon/medical/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/flaticon/medical2/medinova-font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/css/customFlaticon.css')}}">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">

    <!--All Css Here-->

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!--revolution slider-->
    <link rel="stylesheet" href="assets/css/vendor/rev_slider/settings.css">
    <link rel="stylesheet" href="assets/css/vendor/rev_slider/navigation.css">
    <!--Font-Awesome Css-->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <!--flat-icon-->
    <link rel="stylesheet" href="assets/css/vendor/flaticon.css">
    <!--Owl-Carousel Css-->
    <link rel="stylesheet" href="assets/css/vendor/owl.carousel.css">
    <!--Animate Css-->
    <link rel="stylesheet" href="assets/css/vendor/animate.css">
    <!--Animate Css-->
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <!--Jquery Ui Css-->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <!--Style Css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Responsive Css-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="style.css">

    <!--Modernizr Css-->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!--preloader-->
    <div class="preloader">
        <div class="ball ball-1">
        </div>
        <div class="ball ball-2"></div>
        <div class="ball ball-3"></div>
    </div>
    <!--preloader-->

    <!--main-container-->
    <div class="main-container">

        <!-- /.header start -->
        {{--
        <header class="header fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img src="assets/images/logo/logo.png"  alt="BEFIT logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Strona główna<span class="sr-only">(current)</span>
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="{{route('page.index')}}#kons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Konsultacje<span class="sr-only">(current)</span>
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="#eksperts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Eksperci<span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="#spec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Specjalizacje<span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="#formSend" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Kontakt<span class="sr-only">(current)</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </nav>
        </header> --}}

        <header class="header fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('page.index' )}}"><img src="assets/images/logo/logo.png"  alt="BEFIT logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link " href="{{ route('page.index' )}}">Strona główna</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#kons">Konsultacje</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#eksperts">Eksperci</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#spec">Specjalizacje</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contactform">Kontakt</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--header end-->



        <!-- Slider Area Start Here-->
        <div class="slider-area1">
            <div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="photography1" style="background-color:transparent;padding:0px;">
                <div id="rev_slider_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->

                        @foreach($banners as $banner) @if($banner->image)
                        <li data-index="rs-{{$loop->iteration}}" data-transition="slideoververtical">
                            <!-- MAIN IMAGE -->
                            <img src="{{ Voyager::image($banner->image) }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption slide-text-one tp-resizeme" id="slide-{{$loop->iteration}}-layer-1" data-x="['left','center','center','center']"
                                data-hoffset="['65','50','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-145','-60','-100']"
                                data-fontsize="['inherit','20','20','17']" data-lineheight="['60','30','30','26']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:-250px;y:0;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none"
                                data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; font-family: 'Roboto Condensed', sans-serif">
                                <h1>{{ $banner->title}} <span>{{ $banner->titleImportantWord }}</span></h1>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption slide-text-two tp-resizeme" id="slide-{{$loop->iteration}}-layer-2" data-x="['left','left','center','center']"
                                data-hoffset="['65','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-0','-80','30','0']"
                                data-fontsize="['60','60','60','30']" data-lineheight="['60','60','60','40']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2300;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:-200px;y:0;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="750" data-splitin="none"
                                data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-family: 'Roboto Condensed', sans-serif">
                                <h2>{{ $banner->subtitle}}</h2>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <a href="{{ $banner->btnURL}}" class="tp-caption rev-btn white-btn" id="slide-{{$loop->iteration}}-layer-4" data-x="['left','left','center','center']"
                                data-hoffset="['65','0','0','0']" data-y="['middle','middle','bottom','bottom']" data-voffset="['100','160','320','200']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:bottom;s:1200;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="1250"
                                data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                                data-responsive_offset="on" data-responsive="off" style="z-index: 8; white-space: nowrap; font-size: 18px; line-height: 15px; color: rgba(255, 255, 255, 1.00);font-family:'Roboto Condensed', sans-serif;text-transform: uppercase;">{{ $banner->btnTitle }}
                            </a>
                        </li>
                        @endif @endforeach

                    </ul>
                </div>
            </div>
            <!--#rev_slider_1_wrapper-->
        </div>
        <!-- Slider Area End Here-->



        <!--call to action-1 start-->


        <div class="call-to-action1 pad90" id="kons">
            <div class="container">
                <div class="row">
                    @foreach($consults as $consult)
                    <div class="col-lg-6">
                        <div class="cta-img">
                            <img src="{{ Voyager::image($consult->image) }}" alt="">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-6">
                        <div class="cta-box">
                            <h4 class="sub-title mb30">{{$consult->title}} </h4>
                            <h5 class="title mb30">{{$consult->subtitle}} </h5>
                            <p class="mb30">{{$consult->body}} </p>
                            <div class="bttn">
                                <a href="{{ $consult->btnURL}} " type="submit" class="btn active btn-primary">{{$consult->btnTitle}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    @endforeach

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!--call to action-1 end-->


        <!--pricing box start-->
        <div class="product-area pad90" id="eksperts">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-bar full-width mb20">
                                <img src="assets/images/logo/ttl-bar.png" alt="title-img">
                            </div>
                            <h3>Nasz zespoł</h3>
                            <p>składa się z samych profesjonalistów</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-carousel">
                            @foreach($teams as $member) @if($member->image)
                            <div class="col-md-12">
                                <div class="product-box">
                                    <div class="cart-box primary-overlay">
                                        <div class="cart-img full-width">
                                            <a href="{{ Voyager::image($member->image) }}">
                                                <img src="{{ Voyager::image($member->image) }}"  alt="price img" style="height: 300px;object-fit: cover;"><i class=" ovrlay fa fa-search"></i></a>
                                        </div>
                                        <div class="cart-element">
                                            <a href="{{$member->btnURL}}">{{$member->btnTitle}}</a>
                                            <i class=" fa fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="cart-dtl">
                                        <h4>{{ $member->name }}</h4>
                                    </div>
                                </div>

                            </div>
                            @endif @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pricing box end-->
        <div class="features-area pb90" id="spec">
            <div class="container">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-bar full-width mb20">
                            <img src="assets/images/logo/ttl-bar.png" alt="title-img">
                        </div>
                        <h3>Nasze specjalności</h3>
                        <p>szereg specjalnosci</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="features-body" style="transform: none;">

                            @foreach($tiles->chunk(2) as $tile)
                            <div class="features-box text-center">
                                @foreach($tile as $single)
                                <div class="features-elements">
                                    <a href="#"><i class="{{ $single->icon ? $single->icon : "fas fa-question" }}"></i></a>
                                    <h4 class="mb20">{{ $single->title ? $single->title : "specjalizacja" }}</h4>
                                    <p class="mb20">{{$single->body}}
                                    </p>
                                </div>
                                @endforeach
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!--call to action start-->
        <div class="call-to-action pad60">
            <div class="container">
                @foreach($infos as $info)
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <h4 style="font-size: 20px;">{{ $info->info}}</h4>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-12">
                        <div class=" bttn">
                            <a href="{{ $info->btnURL }}" type="submit" class="btn btn-primary" id="book-submit">{{ $info->btnTitle}}</a>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                @endforeach
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!--call to action end-->
        <!--contact-area start-->
        <div class="contact-area pad90" id="contactform">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left">
                            <div class="title-bar full-width mb20">
                                <img src="assets/images/logo/ttl-bar.png" alt="title-img">
                            </div>
                            <h3>leave your message</h3>
                            <p>get in touch with our fitness team</p>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-form mt20">
                            <div class="appointment-schedule">
                                {{-- @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <ul class="error-area">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif @if ($message = Session::get('success'))

                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif --}}
                                <ul id="error-area"></ul>
                                <iframe src="" name="votar" style="display: none;"></iframe>
                                <form method="post" action="{{ action('SendEmailController@send') }}" target="votar" id="contact-form" data-toggle="validator"
                                    role="form" class="appointment-form">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input data-error-message="Wprowadź prawidłową nazwę" name="name" id="inputName" type="text" placeholder="Name" class="form-control"
                                                    required>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input data-error-message="Wprowadź prawidłowy email" name="email" id="inputEmail" type="text" placeholder="Email" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input data-error-message="Wprowadź prawidłową nazwę tematu" name="subject" id="inputSubject" type="text" placeholder="Subject"
                                                    class="form-control" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input data-error-message="Wprowadź prawidłowy nr telefonu" name="phone" id="inputPhone" type="text" placeholder="Phone"
                                                    class="form-control" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea data-error-message="Wprowadź prawidłową treść" class="form-control" name="message" id="inputMessage" cols="10"
                                                    rows="5" placeholder="Your comment text here" required></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="bttn full-width">
                                                <button type="submit" id="submitForm" class="btn active full-width btn-primary">send</button>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="msgalert" class="">

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        @foreach($companyInfo as $info)
                        <div class="location mt20">
                            <h4>location</h4>
                            <div class="ctc-content">
                                <i class="fas fa-mobile-alt"></i>
                                <p>Phone: {{ $info->phone ? $info->phone : "-"}}
                                    <br> Fax: {{ $info->fax ? $info->fax : "-" }}</p>
                            </div>
                            @foreach($addresses as $location)
                            <div class="ctc-content">
                                <i class="fas fa-location-arrow"></i>
                                <p>{{ $location->street}}
                                    <br> {{$location->city.' '.$location->zipCode}}</p>
                            </div>
                            @endforeach
                            <div class="ctc-content">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>{{$info->email}}
                                    <br>{{$info->website}}</p>
                            </div>
                        </div>
                        @endforeach
                        <hr>
                        <div class="opening-time pt20">
                            <h4>opening time</h4>
                            <ul>
                                @foreach($workTime as $workDay)
                                <li>
                                    <p>{{$workDay->day}} : {{$workDay->startTime}} – {{$workDay->endTime}}</p>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!--contact-area end-->



        <div class="google-map">
            <div id="map" style="width: 100%; height: 450px;"></div>
        </div>
        <footer>

            <div class="copyright pad30">
                <h4>Copyright © <span>iThemeslab.</span> All Rights Reserved</h4>
            </div>
        </footer>

    </div>
    <!--main-container-->

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fa fa-close"></span></div>
        <div class="popup-inner">

            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                            <input type="submit" value="Search" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
            </div>
        </div>
    </div>
    <!--End Search Popup-->



    <!--All Js Here-->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
    <!--Migrate Js-->
    <script src="assets/js/vendor/jquery-migrate.js"></script>
    <!--Popper Js-->
    <script src="assets/js/vendor/popper-1.12.3.min.js"></script>
    <!--Bootstrap Js-->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Owl-Carousel Js-->
    <script src="assets/js/vendor/owl.carousel.min.js"></script>
    <!--counter Js-->
    <script src="assets/js/vendor/jquery.counterup.min.js"></script>
    <script src="assets/js/vendor/waypoints-jquery.js"></script>
    <!--Isotop Js-->
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>

    <!-- revolution slider js files start -->
    <script src="assets/js/vendor/rev_slider/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/vendor/rev_slider/jquery.themepunch.revolution.min.js"></script>

    <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/vendor/rev_slider/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>

    <!--magnific popup Js-->
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <!--scrollUp js-->
    <script src="assets/js/vendor/jquery.scrollUp.js"></script>
    <!--Jquery Ui Js-->
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <!--Wow Js-->
    <script src="assets/js/vendor/wow.min.js"></script>

    <!-- template main js file -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/fontawesome-iconpicker.min.js"></script>
    <script>
        $(document).ready(function(){
                
            var address;
                $.ajax({
                    url: "/api/address",
                    method: 'get',
                    
                    success: function (data) {
                       address = data;
                        
                        var city = address[0].city;
                        var street = address[0].street;
                        var icon = `/storage/${address[0].pinIcon}`;

                      
                       console.log(city);
                       console.log(street);
                       console.log(icon);
                       google.maps.event.addDomListener(window, 'load', () => initMap(city, street, icon));
                    }
                }); 
        })


        function initMap(city, street, icon) {
         

                var address = `${city}, ${street}`;
                var latitude, longitude, map, marker;
                var style =    [{
                                    "featureType": "water",
                                    "elementType": "all",
                                    "stylers": [{
                                            "hue": "#7fc8ed"
                                        },
                                        {
                                            "saturation": 55
                                        },
                                        {
                                            "lightness": -6
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "labels",
                                    "stylers": [{
                                            "hue": "#7fc8ed"
                                        },
                                        {
                                            "saturation": 55
                                        },
                                        {
                                            "lightness": -6
                                        },
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi.park",
                                    "elementType": "geometry",
                                    "stylers": [{
                                            "hue": "#83cead"
                                        },
                                        {
                                            "saturation": 1
                                        },
                                        {
                                            "lightness": -15
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "landscape",
                                    "elementType": "geometry",
                                    "stylers": [{
                                            "hue": "#f3f4f4"
                                        },
                                        {
                                            "saturation": -84
                                        },
                                        {
                                            "lightness": 59
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "landscape",
                                    "elementType": "labels",
                                    "stylers": [{
                                            "hue": "#ffffff"
                                        },
                                        {
                                            "saturation": -100
                                        },
                                        {
                                            "lightness": 100
                                        },
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "elementType": "geometry",
                                    "stylers": [{
                                            "hue": "#ffffff"
                                        },
                                        {
                                            "saturation": -100
                                        },
                                        {
                                            "lightness": 100
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "elementType": "labels",
                                    "stylers": [{
                                            "hue": "#bbbbbb"
                                        },
                                        {
                                            "saturation": -100
                                        },
                                        {
                                            "lightness": 26
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "geometry",
                                    "stylers": [{
                                            "hue": "#ffcc00"
                                        },
                                        {
                                            "saturation": 100
                                        },
                                        {
                                            "lightness": -35
                                        },
                                        {
                                            "visibility": "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry",
                                    "stylers": [{
                                            "hue": "#ffcc00"
                                        },
                                        {
                                            "saturation": 100
                                        },
                                        {
                                            "lightness": -22
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi.school",
                                    "elementType": "all",
                                    "stylers": [{
                                            "hue": "#d7e4e4"
                                        },
                                        {
                                            "saturation": -60
                                        },
                                        {
                                            "lightness": 23
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                }
                            ]                     

                

                
                var geocoder =  new google.maps.Geocoder();
                geocoder.geocode( { 'address': address}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        latitude = results[0].geometry.location.lat();
                        longitude = results[0].geometry.location.lng();

                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: latitude,
                                lng: longitude
                            },

        
                            zoom: 10,
                            styles: style
                        });

                        var image = {
                            url: icon,
                         
                        }
                        marker = new google.maps.Marker({   
                            position: map.getCenter(),
                            animation: google.maps.Animation.BOUNCE,
                            icon: image ,
                            map: map
                        });

                  
                    } else {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: 54.366607,
                                lng: 18.565742
                            },
         
                            zoom: 9,
                            styles: style
                        });
                    }
                });

            
                


           
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf64CyWpOBCEocXjocJL_wZiW82hNtbTA&callback=initMap" async
        defer>

    </script>

    <script>
        $(document).ready(function(){

            

            var btnForm = $('#submitForm');
            function isValidEmailAddress(emailAddress) {
                var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
                // alert( pattern.test(emailAddress) );
                return pattern.test(emailAddress);
            };

            var errorBox = $('#error-area');

            $(btnForm).click(function(e){

                var valid = true;
                
                $(errorBox).empty();
                $(errorBox).removeClass();

                var email = $("#inputEmail").val();

                if($("#inputName").val() === "" || $("#inputEmail").val() === "" || $("#inputSubject").val() === "" || $("#inputPhone").val() === "" || $("#inputMessage").val() === "" || !isValidEmailAddress(email)) {
                    valid = false; 
                }
                
                let errorMessage = '';
                if($("#inputName").val() === "") {
                    errorMessage = $("#inputName").data('error-message');
                    const li = document.createElement('li');
                    li.textContent = errorMessage;
                    console.log(li);
                    $('#error-area').append(li);
                }
                if($("#inputEmail").val() === "" || !isValidEmailAddress(email)) {
                    errorMessage = $("#inputEmail").data('error-message');
                    const li = document.createElement('li');
                    li.textContent = errorMessage;
                    $(errorBox).append(li);
                }
                if($("#inputSubject").val() === "") {
                    errorMessage = $("#inputSubject").data('error-message');
                    const li = document.createElement('li');
                    li.textContent = errorMessage;
                    $(errorBox).append(li);
                }
                if($("#inputPhone").val() === "") {
                    errorMessage = $("#inputPhone").data('error-message');
                    const li = document.createElement('li');
                    li.textContent = errorMessage;
                    $(errorBox).append(li);
                }
                if($("#inputMessage").val() === "") {
                    errorMessage = $("#inputMessage").data('error-message');
                    const li = document.createElement('li');
                    li.textContent = errorMessage;
                    $(errorBox).append(li);
                }




                if(!valid) {
                    console.log('1');
                    $(errorBox).addClass('error-message');
                    return true;
                } else {
                    console.log('2');
                    const li = document.createElement('li');
                    li.textContent = "Wysłano maila";
                    $(errorBox).addClass('success-message');
                    $(errorBox).append(li);
                    
                }

                // setTimeout(function(){
                //     $('#contact-form input').val('');
                //     $('#contact-form textarea').val('');
                // },1000)
                
                
            })


        });
    </script>

</body>

</html>