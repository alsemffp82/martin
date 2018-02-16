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
    <div id="app">
        <nav style="height:100px;" id="navigation" class="w100 test-bor d-flex a-cen j-bet">
            <div class="col-md-8"><h2 class="mt0">Macho</h2></div>
            <ul class="col-md-4 d-flex j-end a-cen">
                <li class="mlm mrm d-ib"><a href="">Who I am</a></li>
                <li class="mlm mrm d-ib"><a href="">Works</a></li>
                <li class="mlm mrm d-ib"><a href="">Contact</a></li>
            </ul>
        </nav>    
        <section class="vw100 test-bor" style="height:calc(100vh - 100px);">
            <div id="rejection"></div>
        </section>
        <section class="vw100 vh100 test-bor">
            About me
        </section>
        <section class="vw100 vh100 test-bor">
            my works
        </section>

        <footer>
            contact ( email & linked in )
        </footer>
        
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/lottie.js') }}"></script>
    <script>
            
        $(function(){
            $(window).scroll(function(){
                let windowTop = $(window).scrollTop();
                let nav = $('#navigation');
                if( windowTop >= 100 ) {
                    nav.css('position','fixed');
                } else {
                    nav.css('position','relative');
                } 
            });
            
        });

        
        
        
            var anim;
            var elem = document.getElementById('mail');
            
            var animData = {
                container: elem,
                renderer: 'svg',
                loop: true,
                autoplay: true,
                rendererSettings: {
                    progressiveLoad:true,
                    preserveAspectRatio:'xMidYMid meet'
                },
                path: '/image/mail.json'
            };
            anim = lottie.loadAnimation(animData);
            
            anim.setSubframe(false);
        
    </script>
    
</body>
</html>