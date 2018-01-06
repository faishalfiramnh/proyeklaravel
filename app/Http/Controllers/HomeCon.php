<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kelas; //memanggil tabel databasenya

class HomeCon extends Controller
{
 
	public function tampilKelas()
	{
		//// DIBAWAH insert biasah
		// $isi = new Kelas;
		// $isi ->mataKuliah = 'QMS';
		// $isi ->hari ='JUMAD';
		// $isi ->jam = '4';
		// $isi ->save();

		// ////dibawah ini insert mass asaigment
		// Kelas::create([
		// 	'mataKuliah'=>'kwirausahaan',
		// 	'hari' => 'senin',
		// 	'jam' => '4'
		// 	]);

		// Kelas::find(2)->update([
		// 	'mataKuliah'=>'yuss',
		// 	'hari'=>'minggu',
		// 	'jam' => '200']);

		// Kelas::destroy([1,2,3]); untuk hapus

		$isi = Kelas::all();
		//dd($isi); memnaggil yang ingin dieksekusi array
		return view('home/ForumView',['kkk'=> $isi]);
	}

		public function denganID($id)
	{
		$isi=Kelas::find($id);
		if (! $isi) 
			dd('tidak ada');

		
		return view('home/ForumView',['kkk' =>$isi]); //tetap
	}


    //
}
