<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


 

class AdminController extends Controller
{
    //


	public function indexr($id)
	{
		
		$admin = DB::table('admin')->where('username','like','%i%')->get(); //mengambil data dari dataase, bisa juga dibuat where
		//bisa juga diutak-atik dbnya
		return view('login/AdminLogin',['tes'=> $admin]);

	}

	public function show($no)
	{
		$nilai = 'ini adalah ambil data ' .$no;
		 $orang = ['andy','james','messi']; //data statis array yang akan diambil

		

		return view('login/TambahKelasView',['Coba'=>$nilai, 'nama'=>$orang]); //tetap
	}

}
