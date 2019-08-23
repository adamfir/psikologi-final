<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{{ csrf_token() }}}"/>
    <title>Corsi Block Tapping Task</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ArraySpanTask.css')}}">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <script>
        var j = 1;
        var pict = [];
        var soal = [];
        var jawaban ;
        var diff, minutes, seconds;
        var iterasi = <?= $iterasi ?>;
        var seri = <?= $seri ?>;
        var kunjaw = <?= $jawaban ?>

    function startTimer(duration, display) {
    var modal = document.getElementById('myModal');
    var start = Date.now()
    function timer() {
            // get the number of seconds that have elapsed since 
            // startTimer() was called
            diff = duration - (((Date.now() - start) / 1000) | 0);

            // does the same job as parseInt truncates the float
            minutes = (diff / 60) | 0;
            seconds = (diff % 60) | 0;

            if(seconds == 0){
            //setTimeout(function(){ window.location = "/ChoosePractice";}, 10000);
                var detik = 10;
                window.location = "/tester/intro/question/"+ seri +"/" + iterasi;

            }

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds; 

            if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            start = Date.now() + 1000;
            }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000);
    }

    window.onload = function () {
        var times = '10';
        var fiveMinutes = times,
                display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };

    function choose(id){
        var detik = 10-seconds;

        var ans = 0;
        if(id == kunjaw){
            ans = 1;
        }

        if(iterasi<2){
            iterasi = iterasi +1;
        }
        else{
            seri = seri+1;
            iterasi = 1;
        }

        if(seri >1){
            // window.location = "/tester/latihan/instruksi"
            window.location = "/tester/pretest/instruksi"
        }
        else{
            window.location = "/tester/intro/question/"+ seri +"/" + iterasi;
        }
    }

    </script>
  </head>


<!------ Include the above in your HEAD tag ---------->
<body style ="background-color: #d2d6de" > 
        <div class="sidebar-nav-fixed affix">
            <h1><b>Time <span id="time" style="color: red">0.00</span></b></h1><br>
        </div>
        <div class="container">
            <div class="centered">
                <p>{{$soal}} </p>
                <p class="p">Benar Atau Salah </p>

                <div class="row">
                    <div class="column">
                        <?php $link ="/tester/arrayQuest1/". $seri ."/" . $iterasi ."/1"  ?>
                        <button onClick="choose(1)" class="button1">B</button>
                    </div>
                    <div class="columnss">
                        <button onClick="choose(0)" class="button2">S</button>
                    </div>
                </div>

            </div>
        </div>


</body>
