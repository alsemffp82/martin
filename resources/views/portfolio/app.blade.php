<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Martin Portfolio</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asar:400,700,800">  <!-- Google web font "Asar" -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   
    <div id="app" class="w100 h100" style="overflow-x:hidden; max-width:1200px;margin:0 auto;">

        <nav style="height:100px;" id="navigation" class="w100 d-flex a-cen j-bet z-in1 prelative">
            <div class="col-md-8"><h2 class="mt0 cpointer" @click="goPage(0)">Hello There</h2></div>
            <ul class="col-md-4 d-flex j-end a-cen">
                <li class="mlm mrm d-ib cpointer"><p @click="goPage(1)">Who I am</p></li>
                <li class="mlm mrm d-ib cpointer"><p @click="goPage(2)">Works</p></li>
            </ul>
        </nav>    
        <div class="main">
            <section>
                <lottie :options="defaultOptions" :height="400" :width="400"></lottie>
            </section>
            <section>
                <div class="row">
                    <div class="section-left col-xs-7">
                        <h2>I was thinking about what i am doing ordinary life which is repeat again and agin.</h2>
                        <h2>One thing I am assure, I love challenge. Even it is not possible.</h2>
                        <h2>Hey, who wants my challenge?</h2>

                        <h2>Also, would you like to kill two birds with one stone?</h2>
                        <p>I have Front & Back skill in my hand.</p>
                        <div class="d-flex" style="padding:4em 4em 0 4em;">
                            {!! Form::text('name', null, ['class'=>'form-control form-input', 'placeholder' => 'Challeger\'s Email','id' => 'user-name']) !!}
                            <button class="ml30 submit" style="width:50px;background-color:transparent;"><img class="w100" src="{{ asset('image/challenge.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="section-right col-xs-5">
                        <img src="{{ asset('image/myavatar.png') }}" alt="Awesome Matin" class="w100" id="martinPhoto">
                    </div>
                </div>
            </section>
            <section>
                <h2>Works</h2>
                <div class="row d-flex f-wrap mar0" v-if="workView">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 pad0" @click="eachWork(1)">
                        <div class="work-item mar16 test-bor" style="height:200px;">
                            1
                        </div>    
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 pad0">
                        <div class="work-item mar16 test-bor" style="height:200px;">
                            2
                        </div>    
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 pad0">
                        <div class="work-item mar16 test-bor" style="height:200px;">
                            3
                        </div>    
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 pad0">
                        <div class="work-item mar16 test-bor" style="height:200px;">
                            4
                        </div>    
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 pad0">
                        <div class="work-item mar16 test-bor" style="height:200px;">
                            5
                        </div>    
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 pad0">
                        <div class="work-item mar16 test-bor" style="height:200px;">
                            6
                        </div>    
                    </div>
                </div>
                <first-work v-else></first-work>
            </section>
        </div>

    </div>
    <div id="mobile">
        <h2>Too small</h2>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/lottie.js') }}"></script>
    
    
</body>
</html>