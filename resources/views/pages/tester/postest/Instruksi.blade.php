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
                  <h1 class="title" >Postest</h1> 
                </center>
            </div>
            <div class="mySlides ">
                  <h1 style="text-align:justify">Perhatikan kemunculan blok pada layar monitor, yang akan disajikan sekali secara singkat tanpa pengulangan.</h1> <Br><Br>
                  <h1 style="text-align:justify">Cobalah untuk mengingat urutan blok yang disajikan</h1> <Br><Br>
                  <h1 style="text-align:justify">Setelah kata benda disajikan, akan ada soal matematika sederhana/</h1> <Br><Br>
            </div>

            <div class="mySlides ">
                <h1 class="textQuest">Selanjutnya : </h1> <br> <br>
                <h3 style="text-align:justify">Anda akan diminta untuk menjawab pertanyaan, apakah persamaan matematika sederhana itu benar atau salahfakta. </h2> <br><br>
                <h3 style="text-align:justify">Jika persamaan tersebut benar, maka Anda klik huruf B di bawah kalimat pertanyaan. </h2> <br><br>
                <h3 style="text-align:justify">Jika persamaan tersebut salah, maka Anda klik huruf S di bawah kalimat pertanyaan. </h2> <br><br>
            </div>

            <div class="mySlides ">
                <h1 class="textQuest">Lalu : </h1> <br> <br>
                <h3 style="text-align:justify">Anda diminta untuk tapping dengan meng-klik blok sesuai urutan dengan <b> Tepat secara serial forward (maju) dan backward (mundur) </b> setelah Anda menjawab soal matematika</h2> <br><br>
            </div>
            <div class="mySlides ">
               <h1 style="text-align:justify">Apakah instruksi ini sudah cukup jelas dan dapat dipahami? Jika ada hal yang kurang jelas, silakan bertanya kepada peneliti.</h1> <br> <br>
                <h1 style="text-align:justify">Tekan mouse untuk melanjutkan. (dengan menekan tombol mouse, berarti anda telah bersedia untuk menjadi partisipan dalam penelitian ini)</h1> <br><br>
                <button onClick="clickButton()" class="button3">Lanjutkan</button>
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
    setTimeout(showSlides, 5000);
  }
  else if(slideIndex == 3){
    setTimeout(showSlides, 15000); // Change image every 2 seconds
  }
  else if(slideIndex == 5){
      // setTimeout(function(){window.location = "/tester/pretest/main/3/1";}, 10000);
  }
  else{
    setTimeout(showSlides, 10000); // Change image every 2 seconds
  }
}

function clickButton(){
  window.location = "/tester/postest/focus/3/1";
}

</script>
