<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\Kelas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $isiKelas = Kelas::all();
        return view('home',['semuaData'=>$isiKelas]);
    }

    public function tampilUser()
    {
       
    }

     public function dataKelas()
    {
      return Datatables::of(Kelas::query())->make(true);
    }
}
