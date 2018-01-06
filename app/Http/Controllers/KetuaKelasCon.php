<?php

namespace App\Http\Controllers;


use App\Kelas;

class KetuaKelasCon extends Controller
{
    //

    public function tampilUser()
    {
    	$isi = Kelas::all();
		return view('KetuaKelas/TampilKelasUser',['allDataClass'=>$isi]);
    }
}
