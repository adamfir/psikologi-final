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
    <form method="POST" action="{{ route('tester.moodQuiz.moodQuizPost') }}">
    @csrf
    <table class="table">
      <tr>
        <th class="th">No</th>
        <th class="th" colspan="5">Mood Biasanya</th> 
        <th class="th">Pertanyaan</th>
        <th class="th" colspan="5">Mood Saat Ini</th>
      </tr>
      <tr>
        <td>1</td>
        <td><input type="radio" name="q10" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q10" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q10" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q10" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q10" value="5" style="margin-right"> 5</td>
        <td>Aktif</td>
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
        <td>Waspada</td>
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
        <td>Bergairah</td>
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
        <td>Penuh Atensi</td>
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
        <td>Bertekat</td>
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
        <td>Berhasrat</td>
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
        <td>Energik</td>
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
        <td>Bosan</td>
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
        <td>Terkuras</td>
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
        <td>Teler</td>
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
        <td>Jemu</td>
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
        <td>Letih</td>
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
        <td>Kelelahan</td>
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
        <td>Malas</td>
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
        <td>Takut</td>
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
        <td>Marah</td>
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
        <td>Jengkel</td>
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
        <td>Cemas</td>
        <td><input type="radio" name="q181" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q181" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q181" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q181" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q181" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>19</td>
        <td><input type="radio" name="q190" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q190" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q190" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q190" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q190" value="5" style="margin-right"> 5</td>
        <td>Malu</td>
        <td><input type="radio" name="q191" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q191" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q191" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q191" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q191" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>20</td>
        <td><input type="radio" name="q200" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q200" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q200" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q200" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q200" value="5" style="margin-right"> 5</td>
        <td>Di Bawah Tekanan</td>
        <td><input type="radio" name="q201" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q201" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q201" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q201" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q201" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>21</td>
        <td><input type="radio" name="q210" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q210" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q210" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q210" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q210" value="5" style="margin-right"> 5</td>
        <td>Berasalah</td>
        <td><input type="radio" name="q211" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q211" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q211" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q211" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q211" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>22</td>
        <td><input type="radio" name="q220" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q220" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q220" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q220" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q220" value="5" style="margin-right"> 5</td>
        <td>Santai</td>
        <td><input type="radio" name="q221" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q221" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q221" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q221" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q221" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>23</td>
        <td><input type="radio" name="q230" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q230" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q230" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q230" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q230" value="5" style="margin-right"> 5</td>
        <td>Kalem</td>
        <td><input type="radio" name="q231" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q231" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q231" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q231" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q231" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>24</td>
        <td><input type="radio" name="q240" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q240" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q240" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q240" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q240" value="5" style="margin-right"> 5</td>
        <td>Puas</td>
        <td><input type="radio" name="q241" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q241" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q241" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q241" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q241" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>25</td>
        <td><input type="radio" name="q250" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q250" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q250" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q250" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q250" value="5" style="margin-right"> 5</td>
        <td>Tak Acuh</td>
        <td><input type="radio" name="q251" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q251" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q251" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q251" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q251" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>26</td>
        <td><input type="radio" name="q260" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q260" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q260" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q260" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q260" value="5" style="margin-right"> 5</td>
        <td>Damai</td>
        <td><input type="radio" name="q261" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q261" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q261" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q261" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q261" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>27</td>
        <td><input type="radio" name="q270" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q270" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q270" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q270" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q270" value="5" style="margin-right"> 5</td>
        <td>Tenang</td>
        <td><input type="radio" name="q271" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q271" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q271" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q271" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q271" value="5" style="margin-right"> 5</td>
      </tr>

      <tr>
        <td>28</td>
        <td><input type="radio" name="q280" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q280" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q280" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q280" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q280" value="5" style="margin-right"> 5</td>
        <td>Terpuaskan</td>
        <td><input type="radio" name="q281" value="1" style="margin-right"> 1</td> 
        <td><input type="radio" name="q281" value="2" style="margin-right"> 2</td>
        <td><input type="radio" name="q281" value="3" style="margin-right"> 3</td>
        <td><input type="radio" name="q281" value="4" style="margin-right"> 4</td>
        <td><input type="radio" name="q281" value="5" style="margin-right"> 5</td>
      </tr>
    </table>
    <div class="centered" >
      <button type="submit" class="button3">Submit</button>
    </div>
    </form>
  </div>
</body>
