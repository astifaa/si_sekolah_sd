<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
use App\Informasi_Sekolah;
use App\Galeri;
use File;


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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Informasi_Sekolah::getJumlahBerita();
        $data1 = Informasi_Sekolah::getJumlahPrestasi();
        $data2 = Informasi_Sekolah::getJumlahEskul();
        $data3 = Galeri::getJumlahGaleri();
        return view('pages.home')
        ->with('data', $data)
        ->with('data1', $data1)
        ->with('data2', $data2)
        ->with('data3', $data3);
    }
    
    public function cek()
    {
        return view('welcome');
    }
}
