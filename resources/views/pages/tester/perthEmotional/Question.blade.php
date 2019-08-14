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


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>


<!------ Include the above in your HEAD tag ---------->
<body style ="background-color: #d2d6de" > 
    <div class="center" >
    @if (count($errors) > 0)
    <div class="isa_error">
      <i class="fa fa-times-circle"></i>
      Isi Seluruh Pertanyaan !!
    </div>
    @endif

    <form method="POST" action="{{ route('tester.perthEmotional.perthEmotionalPost') }}">
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
        <td><input type="radio" name="q10" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q10" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q10" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q10" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q10" value="5" style="margin-right"> 5</td>
        <td>Saya cenderung sangat mudah bahagia</td>
        <td><input type="radio" name="q11" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q11" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q11" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q11" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q11" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>2</td>
        <td><input type="radio" name="q20" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q20" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q20" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q20" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q20" value="5" style="margin-right"> 5</td>
        <td>Saya cenderung  sangat mudah marah/ kesal</td>
        <td><input type="radio" name="q21" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q21" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q21" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q21" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q21" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>3</td>
        <td><input type="radio" name="q30" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q30" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q30" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q30" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q30" value="5" style="margin-right"> 5</td>
        <td>Ketika saya bahagia, perasaan tersebut menetap dalam diriku cukup lama</td>
        <td><input type="radio" name="q31" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q31" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q31" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q31" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q31" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>4</td>
        <td><input type="radio" name="q40" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q40" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q40" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q40" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q40" value="5" style="margin-right"> 5</td>
        <td>Ketika saya kesal, perlu waktu cukup lama untuk keluar dari hal itu</td>
        <td><input type="radio" name="q41" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q41" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q41" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q41" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q41" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>5</td>
        <td><input type="radio" name="q50" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q50" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q50" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q50" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q50" value="5" style="margin-right"> 5</td>
        <td>Ketika saya gembira, saya cenderung merasakannya dengan sangat kuat</td>
        <td><input type="radio" name="q51" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q51" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q51" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q51" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q51" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>6</td>
        <td><input type="radio" name="q60" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q60" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q60" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q60" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q60" value="5" style="margin-right"> 5</td>
        <td>Jika saya marah/kesal, saya merasakannya lebih kuat dibandingkan dengan orang lain</td>
        <td><input type="radio" name="q61" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q61" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q61" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q61" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q61" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>7</td>
        <td><input type="radio" name="q70" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q70" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q70" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q70" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q70" value="5" style="margin-right"> 5</td>
        <td>Saya cepat menjadi senang tentang hal-hal positif</td>
        <td><input type="radio" name="q71" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q71" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q71" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q71" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q71" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>8</td>
        <td><input type="radio" name="q80" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q80" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q80" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q80" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q80" value="5" style="margin-right"> 5</td>
        <td>Saya cenderung sangat mudah   kecewa</td>
        <td><input type="radio" name="q81" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q81" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q81" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q81" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q81" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>9</td>
        <td><input type="radio" name="q90" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q90" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q90" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q90" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q90" value="5" style="margin-right"> 5</td>
        <td>Ketika saya merasa positif, saya bisa tetap merasa seperti itu tersebut  sepanjang hari</td>
        <td><input type="radio" name="q91" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q91" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q91" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q91" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q91" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>10</td>
        <td><input type="radio" name="q100" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q100" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q100" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q100" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q100" value="5" style="margin-right"> 5</td>
        <td>Sulit bagi saya untuk pulih dari frustasi</td>
        <td><input type="radio" name="q101" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q101" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q101" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q101" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q101" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>11</td>
        <td><input type="radio" name="q110" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q110" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q110" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q110" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q110" value="5" style="margin-right"> 5</td>
        <td>Saya mengalami suasana hati yang positif dengan kuat</td>
        <td><input type="radio" name="q111" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q111" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q111" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q111" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q111" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>12</td>
        <td><input type="radio" name="q120" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q120" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q120" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q120" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q120" value="5" style="margin-right"> 5</td>
        <td>Biasanya ketika saya tidak bahagia, saya merasakannya dengan sangat kuat</td>
        <td><input type="radio" name="q121" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q121" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q121" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q121" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q121" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>13</td>
        <td><input type="radio" name="q130" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q130" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q130" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q130" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q130" value="5" style="margin-right"> 5</td>
        <td>Saya sangat cepat bereaksi terhadap kabar baik</td>
        <td><input type="radio" name="q131" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q131" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q131" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q131" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q131" value="5" style="margin-right"> 5</td>

      </tr>
      <tr>
        <td>14</td>
        <td><input type="radio" name="q140" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q140" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q140" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q140" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q140" value="5" style="margin-right"> 5</td>
        <td>Saya cenderung sangat  cepat menjadi pesimis tentang hal-hal negatif</td>
        <td><input type="radio" name="q141" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q141" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q141" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q141" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q141" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>15</td>
        <td><input type="radio" name="q150" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q150" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q150" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q150" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q150" value="5" style="margin-right"> 5</td>
        <td>Saya bisa tetap merasa antusias dalam waktu cukup lama</td>
        <td><input type="radio" name="q151" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q151" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q151" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q151" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q151" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>16</td>
        <td><input type="radio" name="q160" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q160" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q160" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q160" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q160" value="5" style="margin-right"> 5</td>
        <td>Sekali saya berada dalam suasana hati yang negatif, sulit untuk melupakannya</td>
        <td><input type="radio" name="q161" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q161" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q161" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q161" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q161" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>17</td>
        <td><input type="radio" name="q170" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q170" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q170" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q170" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q170" value="5" style="margin-right"> 5</td>
        <td>Ketika saya antusias tentang sesuatu saya merasakannya dengan sangat kuat</td>
        <td><input type="radio" name="q171" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q171" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q171" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q171" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q171" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>18</td>
        <td><input type="radio" name="q180" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q180" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q180" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q180" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q180" value="5" style="margin-right"> 5</td>
        <td>Perasaan negatif saya terasa sangat kuat</td>
        <td><input type="radio" name="q181" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q181" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q181" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q181" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q181" value="5" style="margin-right"> 5</td>
      </tr>
    </table>
    <div class="centered" >
      <button type="submit" class="button3">Submit</button>
    </div>
    </form>
  </div>
</body>

<script>
</script>
