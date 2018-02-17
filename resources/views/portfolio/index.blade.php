<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Martin Portfolio</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="app" class="w100 h100" style="overflow-x:hidden">
        <nav style="height:100px;" id="navigation" class="pfixed w100 d-flex a-cen j-bet z-in1">
            <div class="col-md-8"><h2 class="mt0">Macho</h2></div>
            <ul class="col-md-4 d-flex j-end a-cen">
                <li class="mlm mrm d-ib"><p @click="goPage(1)">Who I am</p></li>
                <li class="mlm mrm d-ib"><p @click="goPage(2)">Works</p></li>
                <li class="mlm mrm d-ib"><p @click="goPage(3)">Contact</p></li>
            </ul>
        </nav>    
        <div class="main">

            <section class="pt100">
                <div id="rejection"></div>
            </section>
            <section id="about" class="pt100 row">
                <div class="section-right col-md-5 col-md-offset-7">
                    <img src="{{ asset('image/myavatar.png') }}" alt="Awesome Matin" class="w100" id="martinPhoto">
                </div>
            </section>
            <section id="work" class="pt100">
                my works
            </section>

        </div>
        
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/lottie.js') }}"></script>
    <script>
        $(function(){
            $(window).scroll(function(){
                let windowTop = $(window).scrollTop();
                let photo = $('#martinPhoto');

            });
            
            $('.main').onepage_scroll();
        });
            
    </script>
    
</body>
</html>