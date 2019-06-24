<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/navbar_style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">



@extends('home')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<!-- @section('judul_halaman', 'Halaman Home') -->
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<div class="col-lg-6" style="margin: auto;">
		<div class="row">
			<div class="col-lg-6">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="..." alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Shuttle</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="Shuttle/cari_tiket" class="btn btn-primary">Cari Tiket</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="..." alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Travel</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="Travel/cari_tiket" class="btn btn-primary">Cari Tiket</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
 
@endsection