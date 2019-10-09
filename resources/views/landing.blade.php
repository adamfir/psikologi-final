<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{{ csrf_token() }}}" />
	<title>Landing</title>
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
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<style>
		.button4 {
			background-color: #4c90af;
			border: none;
			border-radius: 2px;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
	</style>
</head>


<!------ Include the above in your HEAD tag ---------->

<body style="background-color: #d2d6de">
	<div class=centered>
		<div class="slideshow-container">
			<h1>Selamat datang Pada Penelitian</h1><br>
			<h1>EMOSI,WORKING MEMORY, EFFORTFUL CONTROL</h1><br><br>
			<h2>Terima kasih</h2><br>
			<h2>Anda bersedia berpartisipasi dalam penelitian</h2><br>
			<h2>Evi Afifah Hurriyati</h2><br>
			<h2>Program S3 Psikologi Fakultas Psikologi Universitas Padjadjaran</h2><br>
			<a href="{{route('result.iq')}}"><button class="button4" style="color-background:blue">Lihat Hasil Tes IQ</button></a>
			<button onClick="clickButton()" class="button3">Mulai</button>
		</div>
	</div>
</body>


<script>
	function clickButton(){
  window.location = "/login";
}

</script>