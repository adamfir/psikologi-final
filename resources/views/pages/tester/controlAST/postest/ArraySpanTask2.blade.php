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
        var jawaban = [];
        var diff, minutes, seconds;
        var iterasi = <?= $iterasi ?>;
        var seri = <?= $seri ?>;
        var detikBefore = <?= $detik ?>;
        var random = [[], [], [[4,8,2,9], [3,6,2,1]], [[6,4,9,2,3], [5,7,9,8,4]], [[1,4,9,8,5,6], [6,9,2,7,5,1]], [[5,2,1,7,9,8,3], [3,8,1,7,5,2,9]], [[5,2,8,9,7,1,4,6], [1,4,2,8,3,9,5,7]]]
        var totalSeconds = 0;
        var total = 0;
        setInterval(setTime, 1000);


    window.onload = function () {
    };

    function setTime() {
        ++totalSeconds;
        ++total;
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        secondsLabel.innerHTML = pad(totalSeconds % 60);
        minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
    }

    function pad(val) {
        var valString = val + "";
        if (valString.length < 2) {
            return "0" + valString;
        } else {
            return valString;
        }
    }

    function myFunction(id) {
        var x = document.getElementById(id);
        if(x.src == "{{asset('svg/circle2.png')}}"){
            return;
        }
        jawaban.push(id);
        console.log(id);
        x.src="{{asset('svg/circle2.png')}}";

        if(jawaban.length == random[seri-1][iterasi-1].length){
            var ans = 0;
            for(var l=jawaban.length-1, k=0; l>=0; l--, k++){
                if(jawaban[k] != random[seri-1][iterasi-1][l]){
                    break;
                }
                else{
                    ans = ans+1;
                }
            }
            
            var id2 = 0;
            if(ans == jawaban.length){
                console.log("benar");
                id2 = 1;
            }
            total = total + detikBefore;
            window.location = "/tester/control/postest/focus/"+seri +"/"+iterasi + "/" + <?= $id ?> + "/" + <?= $id1 ?> + "/" + id2 + "/" + total;
        }
    }

    </script>
  </head>


<!------ Include the above in your HEAD tag ---------->
<body style ="background-color: #d2d6de" > 
        <div class="sidebar-nav-fixed affix">
        <h1><b>Time <span id="minutes" style="color: red">00</span> : <span id="seconds" style="color: red">00</span></b></h1><br>
        </div>
        <div class="containers">
            <img id="1" onClick ="myFunction(1)" src="{{asset('svg/circle.png')}}" class="satu"/>
            <img id="2" onClick ="myFunction(2)" src="{{asset('svg/circle.png')}}" class="dua"/>
            <img id="3" onClick ="myFunction(3)" src="{{asset('svg/circle.png')}}" class="tiga"/>
            <img id="4" onClick ="myFunction(4)" src="{{asset('svg/circle.png')}}" class="empat"/>
            <img id="5" onClick ="myFunction(5)" src="{{asset('svg/circle.png')}}" class="lima"/>
            <img id="6" onClick ="myFunction(6)" src="{{asset('svg/circle.png')}}" class="enam"/>
            <img id="7" onClick ="myFunction(7)" src="{{asset('svg/circle.png')}}" class="tujuh"/>
            <img id="8" onClick ="myFunction(8)" src="{{asset('svg/circle.png')}}" class="delapan"/>
            <img id="9" onClick ="myFunction(9)" src="{{asset('svg/circle.png')}}" class="sembilan"/>
        </div>


</body>
