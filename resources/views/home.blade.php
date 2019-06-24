<!DOCTYPE html>
<html>
<head>
	<title>Pergi Kemana.com</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/navbar_style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/button.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/seat_style.css') }}">
</head>

<body>

	<!-- javascript untuk navbar agar responsive -->
	<script type="text/javascript">
		/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	} 
	</script>


	<div class="topnav" id="myTopnav">
	  <a href="/home" class="active">Home</a>
	  <a href="/Shuttle/lihat_pesanan">Daftar Pesanan</a>
	  <a href="#contact">Bayar Pesanan</a>
	  <a href="#about">About</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>
<br>
<br>
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
	<p>Hallo, {{Session::get('id_member')}}. Apakabar?</p>

            <h2>* Email kamu : {{Session::get('nama')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>
<?php
           $now = \Carbon\Carbon::now('+07:00');
			echo $now->isoFormat('D/M/YYYY');
			echo "<br>";
			echo $now->isoFormat('HH:mm');
?>
 
	<!-- bagian konten blog -->
	@yield('konten')
<br>
<br>
</body>
</html>