<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Login_Controller extends Controller
{
	public function login_form(){
		return view('login_form');
	}

	public function login(Request $request){
		$id_member = $request->id_member;
		$member= DB::table('member')->where('id_member','=',$id_member)->first();
		// $jadwal = DB::table('jadwal_keberangkatan')->get();
		if ($member){
			$request->session()->put('id_member',$id_member);
			$request->session()->put('nama',$member->nama);
			$request->session()->put('deposit',$member->deposit);
			Session::put('login',TRUE);
            return redirect('home');
		}
		else{
			return view('login_form');
		}

	// 	foreach ($member as $m) {
	// 		echo $m->id_member;
	// 		echo $m->nama;
	// 	}
	}

	public function logout(Request $request) {
		$id_member = $request->id_member;
		$member= DB::table('member')->where('id_member','=',$id_member)->first();
		$request->session()->forget('id_member',$id_member);
			$request->session()->forget('nama',$member->nama);
			$request->session()->forget('deposit',$member->deposit);
			Session::put('login',FALSE);
		echo "Data telah dihapus dari session.";
	}
}