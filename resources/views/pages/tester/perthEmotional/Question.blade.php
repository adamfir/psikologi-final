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
    <link rel="stylesheet" href="{{asset('css/moodQuiz.css')}}">
    <link rel="stylesheet" href="{{asset('css/error.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- 

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
  
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>


<!------ Include the above in your HEAD tag ---------->
<body style ="background-color: #d2d6de" > 
    <div class="center" >
    <div class="isa_error" id="warn">
      <i class="fa fa-times-circle"></i>
      Isi Seluruh Pertanyaan !!
    </div>

    <form method="post" id="perthEmotional" action="javascript:void(0)">
    @csrf
    <table class="table">
      <tr>
        <th class="th">No</th>
        <th class="th" colspan="5">Reaksi Emosi Biasanya</th> 
        <th class="th">Pernyataan</th>
        <th class="th" colspan="5">Reaksi Emosi Saat ini</th>
      </tr>
      <tr>
        <td>1</td>
        <td><input type="radio" name="q10" value="1" id="q10" style="margin-right"> 1</td> 
        <td><input type="radio" name="q10" value="2" id="q10" style="margin-right"> 2</td>
        <td><input type="radio" name="q10" value="3" id="q10" style="margin-right"> 3</td>
        <td><input type="radio" name="q10" value="4" id="q10" style="margin-right"> 4</td>
        <td><input type="radio" name="q10" value="5" id="q10" style="margin-right"> 5</td>
        <td>Saya cenderung sangat mudah bahagia</td>
        <td><input type="radio" name="q11" value="1" id="q11" style="margin-right"> 1</td> 
        <td><input type="radio" name="q11" value="2" id="q11" style="margin-right"> 2</td>
        <td><input type="radio" name="q11" value="3" id="q11" style="margin-right"> 3</td>
        <td><input type="radio" name="q11" value="4" id="q11" style="margin-right"> 4</td>
        <td><input type="radio" name="q11" value="5" id="q11" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>2</td>
        <td><input type="radio" name="q20" value="1" id="q20" style="margin-right"> 1</td> 
        <td><input type="radio" name="q20" value="2" id="q20" style="margin-right"> 2</td>
        <td><input type="radio" name="q20" value="3" id="q20" style="margin-right"> 3</td>
        <td><input type="radio" name="q20" value="4" id="q20" style="margin-right"> 4</td>
        <td><input type="radio" name="q20" value="5" id="q20" style="margin-right"> 5</td>
        <td>Saya cenderung  sangat mudah marah/ kesal</td>
        <td><input type="radio" name="q21" value="1" id="q21" style="margin-right"> 1</td> 
        <td><input type="radio" name="q21" value="2" id="q21" style="margin-right"> 2</td>
        <td><input type="radio" name="q21" value="3" id="q21" style="margin-right"> 3</td>
        <td><input type="radio" name="q21" value="4" id="q21" style="margin-right"> 4</td>
        <td><input type="radio" name="q21" value="5" id="q21" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>3</td>
        <td><input type="radio" name="q30" value="1" id="q30" style="margin-right"> 1</td> 
        <td><input type="radio" name="q30" value="2" id="q30" style="margin-right"> 2</td>
        <td><input type="radio" name="q30" value="3" id="q30" style="margin-right"> 3</td>
        <td><input type="radio" name="q30" value="4" id="q30" style="margin-right"> 4</td>
        <td><input type="radio" name="q30" value="5" id="q30" style="margin-right"> 5</td>
        <td>Ketika saya bahagia, perasaan tersebut menetap dalam diriku cukup lama</td>
        <td><input type="radio" name="q31" value="1" id="q31" style="margin-right"> 1</td> 
        <td><input type="radio" name="q31" value="2" id="q31" style="margin-right"> 2</td>
        <td><input type="radio" name="q31" value="3" id="q31" style="margin-right"> 3</td>
        <td><input type="radio" name="q31" value="4" id="q31" style="margin-right"> 4</td>
        <td><input type="radio" name="q31" value="5" id="q31" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>4</td>
        <td><input type="radio" name="q40" value="1" id="q40" style="margin-right"> 1</td> 
        <td><input type="radio" name="q40" value="2" id="q40" style="margin-right"> 2</td>
        <td><input type="radio" name="q40" value="3" id="q40" style="margin-right"> 3</td>
        <td><input type="radio" name="q40" value="4" id="q40" style="margin-right"> 4</td>
        <td><input type="radio" name="q40" value="5" id="q40" style="margin-right"> 5</td>
        <td>Ketika saya kesal, perlu waktu cukup lama untuk keluar dari hal itu</td>
        <td><input type="radio" name="q41" value="1" id="q41" style="margin-right"> 1</td> 
        <td><input type="radio" name="q41" value="2" id="q41" style="margin-right"> 2</td>
        <td><input type="radio" name="q41" value="3" id="q41" style="margin-right"> 3</td>
        <td><input type="radio" name="q41" value="4" id="q41" style="margin-right"> 4</td>
        <td><input type="radio" name="q41" value="5" id="q41" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>5</td>
        <td><input type="radio" name="q50" value="1" id="q50" style="margin-right"> 1</td> 
        <td><input type="radio" name="q50" value="2" id="q50" style="margin-right"> 2</td>
        <td><input type="radio" name="q50" value="3" id="q50" style="margin-right"> 3</td>
        <td><input type="radio" name="q50" value="4" id="q50" style="margin-right"> 4</td>
        <td><input type="radio" name="q50" value="5" id="q50" style="margin-right"> 5</td>
        <td>Ketika saya gembira, saya cenderung merasakannya dengan sangat kuat</td>
        <td><input type="radio" name="q51" value="1" id="q51" style="margin-right"> 1</td> 
        <td><input type="radio" name="q51" value="2" id="q51" style="margin-right"> 2</td>
        <td><input type="radio" name="q51" value="3" id="q51" style="margin-right"> 3</td>
        <td><input type="radio" name="q51" value="4" id="q51" style="margin-right"> 4</td>
        <td><input type="radio" name="q51" value="5" id="q51" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>6</td>
        <td><input type="radio" name="q60" value="1" id="q60" style="margin-right"> 1</td> 
        <td><input type="radio" name="q60" value="2" id="q60" style="margin-right"> 2</td>
        <td><input type="radio" name="q60" value="3" id="q60" style="margin-right"> 3</td>
        <td><input type="radio" name="q60" value="4" id="q60" style="margin-right"> 4</td>
        <td><input type="radio" name="q60" value="5" id="q60" style="margin-right"> 5</td>
        <td>Jika saya marah/kesal, saya merasakannya lebih kuat dibandingkan dengan orang lain</td>
        <td><input type="radio" name="q61" value="1" id="q61" style="margin-right"> 1</td> 
        <td><input type="radio" name="q61" value="2" id="q61" style="margin-right"> 2</td>
        <td><input type="radio" name="q61" value="3" id="q61" style="margin-right"> 3</td>
        <td><input type="radio" name="q61" value="4" id="q61" style="margin-right"> 4</td>
        <td><input type="radio" name="q61" value="5" id="q61" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>7</td>
        <td><input type="radio" name="q70" value="1" id="q70" style="margin-right"> 1</td> 
        <td><input type="radio" name="q70" value="2" id="q70" style="margin-right"> 2</td>
        <td><input type="radio" name="q70" value="3" id="q70" style="margin-right"> 3</td>
        <td><input type="radio" name="q70" value="4" id="q70" style="margin-right"> 4</td>
        <td><input type="radio" name="q70" value="5" id="q70" style="margin-right"> 5</td>
        <td>Saya cepat menjadi senang tentang hal-hal positif</td>
        <td><input type="radio" name="q71" value="1" id="q71" style="margin-right"> 1</td> 
        <td><input type="radio" name="q71" value="2" id="q71" style="margin-right"> 2</td>
        <td><input type="radio" name="q71" value="3" id="q71" style="margin-right"> 3</td>
        <td><input type="radio" name="q71" value="4" id="q71" style="margin-right"> 4</td>
        <td><input type="radio" name="q71" value="5" id="q71" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>8</td>
        <td><input type="radio" name="q80" value="1" id="q80" style="margin-right"> 1</td> 
        <td><input type="radio" name="q80" value="2" id="q80" style="margin-right"> 2</td>
        <td><input type="radio" name="q80" value="3" id="q80" style="margin-right"> 3</td>
        <td><input type="radio" name="q80" value="4" id="q80" style="margin-right"> 4</td>
        <td><input type="radio" name="q80" value="5" id="q80" style="margin-right"> 5</td>
        <td>Saya cenderung sangat mudah   kecewa</td>
        <td><input type="radio" name="q81" value="1" id="q81" style="margin-right"> 1</td> 
        <td><input type="radio" name="q81" value="2" id="q81" style="margin-right"> 2</td>
        <td><input type="radio" name="q81" value="3" id="q81" style="margin-right"> 3</td>
        <td><input type="radio" name="q81" value="4" id="q81" style="margin-right"> 4</td>
        <td><input type="radio" name="q81" value="5" id="q81" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>9</td>
        <td><input type="radio" name="q90" value="1" id="q90" style="margin-right"> 1</td> 
        <td><input type="radio" name="q90" value="2" id="q90" style="margin-right"> 2</td>
        <td><input type="radio" name="q90" value="3" id="q90" style="margin-right"> 3</td>
        <td><input type="radio" name="q90" value="4" id="q90" style="margin-right"> 4</td>
        <td><input type="radio" name="q90" value="5" id="q90" style="margin-right"> 5</td>
        <td>Ketika saya merasa positif, saya bisa tetap merasa seperti itu tersebut  sepanjang hari</td>
        <td><input type="radio" name="q91" value="1" id="q91" style="margin-right"> 1</td> 
        <td><input type="radio" name="q91" value="2" id="q91" style="margin-right"> 2</td>
        <td><input type="radio" name="q91" value="3" id="q91" style="margin-right"> 3</td>
        <td><input type="radio" name="q91" value="4" id="q91" style="margin-right"> 4</td>
        <td><input type="radio" name="q91" value="5" id="q91" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>10</td>
        <td><input type="radio" name="q100" value="1" id="q100" style="margin-right"> 1</td> 
        <td><input type="radio" name="q100" value="2" id="q100" style="margin-right"> 2</td>
        <td><input type="radio" name="q100" value="3" id="q100" style="margin-right"> 3</td>
        <td><input type="radio" name="q100" value="4" id="q100" style="margin-right"> 4</td>
        <td><input type="radio" name="q100" value="5" id="q100" style="margin-right"> 5</td>
        <td>Sulit bagi saya untuk pulih dari frustasi</td>
        <td><input type="radio" name="q101" value="1" id="q101" style="margin-right"> 1</td> 
        <td><input type="radio" name="q101" value="2" id="q101" style="margin-right"> 2</td>
        <td><input type="radio" name="q101" value="3" id="q101" style="margin-right"> 3</td>
        <td><input type="radio" name="q101" value="4" id="q101" style="margin-right"> 4</td>
        <td><input type="radio" name="q101" value="5" id="q101" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>11</td>
        <td><input type="radio" name="q110" value="1" id="q110" style="margin-right"> 1</td> 
        <td><input type="radio" name="q110" value="2" id="q110" style="margin-right"> 2</td>
        <td><input type="radio" name="q110" value="3" id="q110" style="margin-right"> 3</td>
        <td><input type="radio" name="q110" value="4" id="q110" style="margin-right"> 4</td>
        <td><input type="radio" name="q110" value="5" id="q110" style="margin-right"> 5</td>
        <td>Saya mengalami suasana hati yang positif dengan kuat</td>
        <td><input type="radio" name="q111" value="1" id="q111" style="margin-right"> 1</td> 
        <td><input type="radio" name="q111" value="2" id="q111" style="margin-right"> 2</td>
        <td><input type="radio" name="q111" value="3" id="q111" style="margin-right"> 3</td>
        <td><input type="radio" name="q111" value="4" id="q111" style="margin-right"> 4</td>
        <td><input type="radio" name="q111" value="5" id="q111" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>12</td>
        <td><input type="radio" name="q120" value="1" id="q120" style="margin-right"> 1</td> 
        <td><input type="radio" name="q120" value="2" id="q120" style="margin-right"> 2</td>
        <td><input type="radio" name="q120" value="3" id="q120" style="margin-right"> 3</td>
        <td><input type="radio" name="q120" value="4" id="q120" style="margin-right"> 4</td>
        <td><input type="radio" name="q120" value="5" id="q120" style="margin-right"> 5</td>
        <td>Biasanya ketika saya tidak bahagia, saya merasakannya dengan sangat kuat</td>
        <td><input type="radio" name="q121" value="1" id="q121"style="margin-right"> 1</td> 
        <td><input type="radio" name="q121" value="2" id="q121"style="margin-right"> 2</td>
        <td><input type="radio" name="q121" value="3" id="q121"style="margin-right"> 3</td>
        <td><input type="radio" name="q121" value="4" id="q121"style="margin-right"> 4</td>
        <td><input type="radio" name="q121" value="5" id="q121"style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>13</td>
        <td><input type="radio" name="q130" value="1" id="q130" style="margin-right"> 1</td> 
        <td><input type="radio" name="q130" value="2" id="q130" style="margin-right"> 2</td>
        <td><input type="radio" name="q130" value="3" id="q130" style="margin-right"> 3</td>
        <td><input type="radio" name="q130" value="4" id="q130" style="margin-right"> 4</td>
        <td><input type="radio" name="q130" value="5" id="q130" style="margin-right"> 5</td>
        <td>Saya sangat cepat bereaksi terhadap kabar baik</td>
        <td><input type="radio" name="q131" value="1" id="q131" style="margin-right"> 1</td> 
        <td><input type="radio" name="q131" value="2" id="q131" style="margin-right"> 2</td>
        <td><input type="radio" name="q131" value="3" id="q131" style="margin-right"> 3</td>
        <td><input type="radio" name="q131" value="4" id="q131" style="margin-right"> 4</td>
        <td><input type="radio" name="q131" value="5" id="q131" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>14</td>
        <td><input type="radio" name="q140" value="1" id="q140" style="margin-right"> 1</td> 
        <td><input type="radio" name="q140" value="2" id="q140" style="margin-right"> 2</td>
        <td><input type="radio" name="q140" value="3" id="q140" style="margin-right"> 3</td>
        <td><input type="radio" name="q140" value="4" id="q140" style="margin-right"> 4</td>
        <td><input type="radio" name="q140" value="5" id="q140" style="margin-right"> 5</td>
        <td>Saya cenderung sangat  cepat menjadi pesimis tentang hal-hal negatif</td>
        <td><input type="radio" name="q141" value="1" id="q141" style="margin-right"> 1</td> 
        <td><input type="radio" name="q141" value="2" id="q141" style="margin-right"> 2</td>
        <td><input type="radio" name="q141" value="3" id="q141" style="margin-right"> 3</td>
        <td><input type="radio" name="q141" value="4" id="q141" style="margin-right"> 4</td>
        <td><input type="radio" name="q141" value="5" id="q141" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>15</td>
        <td><input type="radio" name="q150" value="1" id="q150" style="margin-right"> 1</td> 
        <td><input type="radio" name="q150" value="2" id="q150" style="margin-right"> 2</td>
        <td><input type="radio" name="q150" value="3" id="q150" style="margin-right"> 3</td>
        <td><input type="radio" name="q150" value="4" id="q150" style="margin-right"> 4</td>
        <td><input type="radio" name="q150" value="5" id="q150" style="margin-right"> 5</td>
        <td>Saya bisa tetap merasa antusias dalam waktu cukup lama</td>
        <td><input type="radio" name="q151" value="1" id="q151" style="margin-right"> 1</td> 
        <td><input type="radio" name="q151" value="2" id="q151" style="margin-right"> 2</td>
        <td><input type="radio" name="q151" value="3" id="q151" style="margin-right"> 3</td>
        <td><input type="radio" name="q151" value="4" id="q151" style="margin-right"> 4</td>
        <td><input type="radio" name="q151" value="5" id="q151" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>16</td>
        <td><input type="radio" name="q160" value="1" id="q160" style="margin-right"> 1</td> 
        <td><input type="radio" name="q160" value="2" id="q160" style="margin-right"> 2</td>
        <td><input type="radio" name="q160" value="3" id="q160" style="margin-right"> 3</td>
        <td><input type="radio" name="q160" value="4" id="q160" style="margin-right"> 4</td>
        <td><input type="radio" name="q160" value="5" id="q160" style="margin-right"> 5</td>
        <td>Sekali saya berada dalam suasana hati yang negatif, sulit untuk melupakannya</td>
        <td><input type="radio" name="q161" value="1" id="q161" style="margin-right"> 1</td> 
        <td><input type="radio" name="q161" value="2" id="q161" style="margin-right"> 2</td>
        <td><input type="radio" name="q161" value="3" id="q161" style="margin-right"> 3</td>
        <td><input type="radio" name="q161" value="4" id="q161" style="margin-right"> 4</td>
        <td><input type="radio" name="q161" value="5" id="q161" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>17</td>
        <td><input type="radio" name="q170" value="1" id="q170" style="margin-right"> 1</td> 
        <td><input type="radio" name="q170" value="2" id="q170" style="margin-right"> 2</td>
        <td><input type="radio" name="q170" value="3" id="q170" style="margin-right"> 3</td>
        <td><input type="radio" name="q170" value="4" id="q170" style="margin-right"> 4</td>
        <td><input type="radio" name="q170" value="5" id="q170" style="margin-right"> 5</td>
        <td>Ketika saya antusias tentang sesuatu saya merasakannya dengan sangat kuat</td>
        <td><input type="radio" name="q171" value="1" id="q171" style="margin-right"> 1</td> 
        <td><input type="radio" name="q171" value="2" id="q171" style="margin-right"> 2</td>
        <td><input type="radio" name="q171" value="3" id="q171" style="margin-right"> 3</td>
        <td><input type="radio" name="q171" value="4" id="q171" style="margin-right"> 4</td>
        <td><input type="radio" name="q171" value="5" id="q171" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>18</td>
        <td><input type="radio" name="q180" value="1" id="q180" style="margin-right"> 1</td> 
        <td><input type="radio" name="q180" value="2" id="q180" style="margin-right"> 2</td>
        <td><input type="radio" name="q180" value="3" id="q180" style="margin-right"> 3</td>
        <td><input type="radio" name="q180" value="4" id="q180" style="margin-right"> 4</td>
        <td><input type="radio" name="q180" value="5" id="q180" style="margin-right"> 5</td>
        <td>Perasaan negatif saya terasa sangat kuat</td>
        <td><input type="radio" name="q181" value="1" id="q181" style="margin-right"> 1</td> 
        <td><input type="radio" name="q181" value="2" id="q181" style="margin-right"> 2</td>
        <td><input type="radio" name="q181" value="3" id="q181" style="margin-right"> 3</td>
        <td><input type="radio" name="q181" value="4" id="q181" style="margin-right"> 4</td>
        <td><input type="radio" name="q181" value="5" id="q181" style="margin-right"> 5</td>
      </tr>
    </table>
    <div class="centered" >
      <button type="submit" id="send_form" class="button3">Submit</button>
    </div>
    </form>
  </div>
</body>

<script>
  $('#warn').hide();
   if ($("#perthEmotional").length > 0) {
    $("#perthEmotional").validate({
    rules: {
      q10: {
        required: true,
      },
      q11: {
        required: true,
      },
      q20: {
        required: true,
      },
      q21: {
        required: true,
      },
      q30: {
        required: true,
      },
      q31: {
        required: true,
      },
      q40: {
        required: true,
      },
      q41: {
        required: true,
      },
      q50: {
        required: true,
      },
      q51: {
        required: true,
      },
      q60: {
        required: true,
      },
      q61: {
        required: true,
      },
      q70: {
        required: true,
      },
      q71: {
        required: true,
      },
      q80: {
        required: true,
      },
      q81: {
        required: true,
      },
      q90: {
        required: true,
      },
      q91: {
        required: true,
      },
      q110: {
        required: true,
      },
      q111: {
        required: true,
      },
      q120: {
        required: true,
      },
      q121: {
        required: true,
      },
      q130: {
        required: true,
      },
      q131: {
        required: true,
      },
      q140: {
        required: true,
      },
      q141: {
        required: true,
      },
      q150: {
        required: true,
      },
      q151: {
        required: true,
      },
      q160: {
        required: true,
      },
      q161: {
        required: true,
      },
      q170: {
        required: true,
      },
      q171: {
        required: true,
      },
      q180: {
        required: true,
      },
      q181: {
        required: true,
      }  
    },
    invalidHandler: function(event, validator){
      $('#warn').show();

    },
    errorPlacement: function(error, element) {}, 
    submitHandler: function(form) {
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#send_form').html('Sending..');
      $.ajax({
        url: "{{ route('tester.perthEmotional.perthEmotionalPost') }}" ,
        type: "POST",
        data: $('#perthEmotional').serialize(),
        success: function( response ) {
            $('#send_form').html('Submit');
            $('#res_message').show();
            $('#res_message').html(response.msg);
            $('#msg_div').removeClass('d-none'); 
            setTimeout(function(){
            $('#res_message').hide();
            $('#msg_div').hide();

            window.location.replace("{{ route('tester.perthEmotional.finish') }}");
            },1000);
        }
      });
    }
  })
}
</script>
