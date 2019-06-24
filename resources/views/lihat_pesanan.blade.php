@extends('home')

@section('konten')
<table border="1" style="margin: auto; text-align: center;">
<tr>
			<!-- <td>Kode Pesanan</td> -->
			<td>Nama</td>
			<td>Tanggal Berangkat</td>
			<td>Asal</td>
			<td>Tujuan</td>
			<td>Harga</td>
			<td>Kode Mobil</td>
			<td>No.Kursi</td>
			<td>Status</td>
			<td>Aksi</td>
</tr>

@foreach($pesanan as $p)
<tr>
<td>{{ $p->nama }}</td>
<td>{{ $p->tgl_keberangkatan }}</td>
<td>{{ $p->keberangkatan }}</td>
<td>{{ $p->tujuan }}</td>
<td>{{ $p->harga }}</td>
<td>{{ $p->kd_mobil }}</td>
<td>1</td>
<td>{{ $p->status_transaksi }}</td>
<td>
<a href="#" class="btn btn-success btn-submit" value="Edit" style="margin: auto;">Beli Tiket</a>
<a href="#" class="btn btn-success btn-submit" value="Edit" style="margin: auto;">Batal Tiket</a>
</td>
</tr>
@endforeach
</table>

@endsection