<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShuttleController extends Controller
{
    //return cari tiket shuttle

    public function cari_tiket(){
    	// mengambil data dari table jadwal_keberangkatan
    	$jadwal = DB::table('jadwal_keberangkatan')->get();
    	return view('shuttle_cari',['jadwal_keberangkatan' => $jadwal]);
    }

   	public function cari(Request $request)
	{
		// menangkap data pencarian
		$keberangkatan 		= $request->keberangkatan;
		$tujuan 			= $request->tujuan;
		$tgl_keberangkatan	= $request->tgl_keberangkatan;
		$jam				= $request->jam;

		// echo $keberangkatan;
		// echo $tujuan;
		// $tujuan = $muara->tujuan;
 
    		// mengambil data dari table jadwal keberangkatan sesuai pencarian data
		$jadwal= DB::table('jadwal_keberangkatan')
		->where([['keberangkatan','like',"%".$keberangkatan."%"],
			['tujuan','like',"%".$tujuan."%"],
			['tgl_keberangkatan','=',$tgl_keberangkatan],
			['jam','=',$jam]])
		->paginate();
 
  //   		// mengirim data pegawai ke view index
		return view('shuttle_cari',['jadwal_keberangkatan' => $jadwal]);
 
	}

	public function pesan(Request $request,$id_jadwal_keberangkatan){
		if($request->session()->has('id_member')){
			// mengambil data dari table keberangkatan
			$jadwal = DB::table('jadwal_keberangkatan')->where('id_jadwal_keberangkatan',$id_jadwal_keberangkatan)->get();

    	// passing data pegawai yang didapat ke view pesan_kursi.blade.php
		return view('pesan_kursi',['jadwal_keberangkatan' => $jadwal]);
		}else{
			echo 'Tidak ada data dalam session.';
		}
		
    	
	}

	public function pesankursi(Request $request){
		if($request->session()->has('id_member')){
		// menangkap data pencarian

		$kd_mobil					= $request->kd_mobil;
		$id_jadwal_keberangkatan	= $request->id_jadwal_keberangkatan;
		//cara untuk get data jam dan tgl_keberangkatan

		// data untuk mengisikan nama ke data transaksi
		$id_member 		= $request->id_member;

		// data untuk update tabel kursi
		$no_kursi 		= $request->no_kursi;
		$kd_mobil 		= $request->kd_mobil;
		$sts_kursi 		= $request->sts_kursi;
		// update status kursi menjadi sudah dipesan
		DB::table('kursi')->where([['no_kursi','=',$no_kursi],
			['kd_mobil','=',$kd_mobil]])
		->update(['sts_kursi' => $sts_kursi]);

		//mengambil id_jadwal_keberangkatan
		// $id_jadwal_keberangkatan = DB::table('jadwal_keberangkatan')
		// ->where('kd_mobil','=',$kd_mobil)->get('id_jadwal_keberangkatan')->id_jadwal_keberangkatan;

		echo "id_jadwal_keberangkatan $id_jadwal_keberangkatan";

		//mengambil id_keberangkatan
		$id_keberangkatan = DB::table('tabel_keberangkatan')
		->where([['kd_mobil','=',$kd_mobil],['id_jadwal_keberangkatan','=',$id_jadwal_keberangkatan]])->get('id_keberangkatan');

		echo $kd_mobil;
		echo "$id_keberangkatan";

		//harus insert ke tabel transaksi, tabel keberangkatan,

		// //proses insert ke tabel transaksi
		// DB::table('transaksi')->insert([
		// 	'id_keberangkatan' 			=> $id_keberangkatan,
		// 	'id_member' 				=> $request->id_member,
		// 	'jam_transaksi' 			=>  $now = \Carbon\Carbon::now('+07:00')->isoFormat('HH:mm'),
		// 	'tgl_transaksi'				=>  $now = \Carbon\Carbon::now('+07:00')->isoFormat('D/M/YYYY')]);

		// DB::table('tabel_keberangkatan')->insert([
		// 	'id_jadwal_keberangkatan' 	=> $id_jadwal_keberangkatan,
		// 	'kd_mobil'					=> $request->kd_mobil,
		// 	'jam'						=> $request->jam,
		// 	'tgl_keberangkatan'			=> $request->tgl_keberangkatan
		// 	]);

		// // passing data pegawai yang didapat ke view pesan_kursi.blade.php
		// 	$pesanan =  DB::table('tabel_keberangkatan')
		// 		->join('jadwal_keberangkatan','tabel_keberangkatan.id_jadwal_keberangkatan','=','jadwal_keberangkatan.id_jadwal_keberangkatan')
		// 		->join('transaksi','tabel_keberangkatan.id_keberangkatan','=','transaksi.id_keberangkatan')
		// 		->join('member','transaksi.id_member','=','member.id_member')
		// 		->select('member.nama','jadwal_keberangkatan.tgl_keberangkatan','jadwal_keberangkatan.keberangkatan','jadwal_keberangkatan.tujuan','jadwal_keberangkatan.harga','jadwal_keberangkatan.kd_mobil','transaksi.status_transaksi')->get();
		// 		return view('lihat_pesanan',['pesanan' => $pesanan]);
		}
	}

	// public function konfirmasi_pesan(Request $request){
		
	// }

	public function lihat_pesanan(){
		// $jadwal = DB::table('jadwal_keberangkatan','member')->select('member.nama','jadwal_keberangkatan.tgl_keberangkatan','jadwal_keberangkatan.keberangkatan','jadwal_keberangkatan.tujuan','jadwal_keberangkatan.harga');
  //   	return view('lihat_pesanan',['jadwal_keberangkatan','member' => $jadwal]);

		$pesanan =  DB::table('tabel_keberangkatan')
		->join('jadwal_keberangkatan','tabel_keberangkatan.id_jadwal_keberangkatan','=','jadwal_keberangkatan.id_jadwal_keberangkatan')
		->join('transaksi','tabel_keberangkatan.id_keberangkatan','=','transaksi.id_keberangkatan')
		->join('member','transaksi.id_member','=','member.id_member')
		->select('member.nama','jadwal_keberangkatan.tgl_keberangkatan','jadwal_keberangkatan.keberangkatan','jadwal_keberangkatan.tujuan','jadwal_keberangkatan.harga','jadwal_keberangkatan.kd_mobil','transaksi.status_transaksi')
		->where('transaksi.status_transaksi','=','Belum Bayar')
		->get();
		return view('lihat_pesanan',['pesanan' => $pesanan]);
	}
}

