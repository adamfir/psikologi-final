<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{{ csrf_token() }}}"/>
    <title>Reading Span Sentences</title>
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
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>


<!------ Include the above in your HEAD tag ---------->
<body style ="background-color: #d2d6de" > 
    <div class=centered >
        <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
            <div class="mySlides ">
                <center>
                  <h1 class="title" >Latihan</h1> 
                </center>
            </div>

            <div class="mySlides ">
                <center><h1>Dalam bagian latihan ini, soal latihan terdiri dari 2 item seri blok. Seri blok akan disajikan sekali saja pada layar monitor tanpa adanya pengulangan. Cobalah untuk mengingat blok yang disajikan.</h1></center>
            </div>
            <div class="mySlides ">
                <center><h1 class="textQuest">Lalu : </h1> <br> <br>
                        <h3 >Anda diminta untuk tapping dengan meng-klik blok sesuai urutan dengan <b> Tepat secara serial forward (maju) dan backward (mundur) </b> setelah Anda menjawab soal matematika</h2> <br><br>
                </center>
              </div>
        </div>
    </div>
</body>


<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  console.log("satiu")
  if(slideIndex == 1){
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
  else if(slideIndex == 2){
      setTimeout(function(){window.location = "/tester/control/intro/main/2/1";}, 5000);

  }
  else{
    setTimeout(showSlides, 10000); // Change image every 2 seconds
  }
}

</script>
