@extends('home')

@section('konten')
<div style="margin-left: 15px; ">
<div>
	<a href="#" class="btn btn-success btn-md btn-submit">Kembali</a>
</div>
</div>
<br>

<form action="/Shuttle/pesankursi" method="GET">
	
<div class="container">
	<div class="card">
		<div class="card-header">
		@foreach($jadwal_keberangkatan as $j)
			<p style="text-align: center;"> Pilih Kursi - {{ $j->kd_mobil }}</p>
		@endforeach
		</div>
		<div class="row">
		<div class="col-lg-6">
			<div class="square" style="margin: auto;">
				<input type="radio" name="no_kursi" value="1">1
			</div>
		</div>
			<div class="col-lg-6">
			<div class="square" style="margin: auto;">
				<input type="radio" name="no_kursi" value="2">2
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
			<div class="square" style="margin: auto;">
				<input type="radio" name="no_kursi" value="3">3
			</div>
		</div>
			<div class="col-lg-6">
			<div class="square" style="margin: auto;">
				<input type="radio" name="no_kursi" value="4">4
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
			<div class="square" style="margin: auto;">
				<input type="radio" name="no_kursi" value="5">5
			</div>
		</div>
			<div class="col-lg-6">
			<div class="square" style="margin: auto;">
				<input type="radio" name="no_kursi" value="6">6
			</div>
		</div>
		</div>
	</div>
</div>

<div style="margin-left: 15px; ">
<br>
<div>
@foreach($jadwal_keberangkatan as $j)
	<input type="hidden" name="id_jadwal_keberangkatan" value="{{ $j->id_jadwal_keberangkatan }}">
	<input type="hidden" name="kd_mobil" value="{{ $j->kd_mobil }}">
	<input type="hidden" name="sts_kursi" value="T">
@endforeach
	<button type="submit"  name="submit" class="btn btn-success btn-md btn-submit">Pesan</button>
</div>
</div>

</form>

@endsection