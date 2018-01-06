<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kelas;
class KelasCon extends Controller
{

	public function tampilSemuaIsiKelas()
	{
		$isi = Kelas::all();
		return view('Kelas/TampilKelas',['allDataClass'=>$isi]);
	}

    public function dataKelas()
    {
      return Datatables::of(Kelas::query())->make(true);
    }

    public function tambahKelas()
    {
    	
    	return view('Kelas/tambahKelasView');

    }

    public function TambahKelasPost(Request $request)
    {

    	$tambahKls = new Kelas;
		$tambahKls ->mataKuliah = $request->mataKuliah;
		$tambahKls ->hari =$request->hari;
		$tambahKls ->gedung = $request ->gedung;
		$tambahKls ->lantai = $request ->lantai;
		$tambahKls ->namaRuangan = $request ->namaRuangan;
		$tambahKls ->status = $request->status;
		$tambahKls ->save();
		return redirect('/Kelas');//pemanggilan ke menu utama yang berada di root
    }



    public function editKelas($id)
    {
    	$isiKelas=Kelas::find($id);
		if (! $isiKelas) 
			dd('tidak ada');
		
		return view('Kelas/EditKelasView',['isi' =>$isiKelas]);

    }

    public function editKelasPut(Request $request, $id)
    {	//$kls
    	$isi = Kelas::find($id); //objes kls  tidak boleh sama dengan nama tabel
    	$isi->mataKuliah = $request->mataKuliah;
    	$isi->hari = $request->hari;
    	$isi ->gedung = $request ->gedung;
		$isi ->lantai = $request ->lantai;
		$isi ->namaRuangan = $request ->namaRuangan;
    	$isi->status = $request->status;
    	$isi->save();
    	return redirect('/Kelas');

    }

    public function hapus($id)
    {
    	$allDataClass = Kelas::find($id);
    	$allDataClass -> delete();
    	return redirect('/Kelas');
    }


 }
