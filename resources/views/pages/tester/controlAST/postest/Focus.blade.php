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
        var j = 0;
        var pict = [];
        var soal = [];
        var jawaban ;
        var diff, minutes, seconds;
        var iterasi = <?= $iterasi ?>;
        var seri = <?= $seri ?>;

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
                    iterasi = iterasi+1;
                    
                    if(iterasi >2){
                        seri = seri+2;
                        iterasi = 1;
                    }

                    if(seri == 9){
                        seri =4;
                    }

                    if(seri ==8){
                        //disinis selesai
                        // window.location = "/tester/control/latihan/instruksi";
                        // window.location = "/tester/moodQuiz/instruksi";
                        window.location = "/tester/postest/break";
                    }else{
                        window.location = "/tester/control/postest/main/"+seri +"/"+iterasi;
                    }

                }

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;


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
            var times = '5';
            var fiveMinutes = times,
                    display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };

    </script>
  </head>


<!------ Include the above in your HEAD tag ---------->
<body style ="background-color: #d2d6de" > 
        <div class="centered">
            <H1 style="font-size:200px" >+</h1>
        </div>
</body>
