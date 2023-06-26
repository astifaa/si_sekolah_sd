<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi_Sekolah;
use App\Galeri;
use DB;
use File;

class FrontendController extends Controller
{
    public function about()
    {
        $data = Informasi_Sekolah::getListDataFasilitas();
        $data1 = Informasi_Sekolah::getListDataEskul();
        return view('frontend.about')
        ->with('data', $data)
        ->with('data1', $data1);
    }

    public function prestasi()
    {
        $data = Informasi_Sekolah::getListDataPrestasiPagination();
        $data1 = Informasi_Sekolah::getListDataPrestasiRecent();
        return view('frontend.prestasi')
        ->with('data1', $data1)
        ->with('data', $data);
    }

    public function berita()
    {
        $data = Informasi_Sekolah::getListDataBeritaPagination();
        $data1 = Informasi_Sekolah::getListDataRecent();
        return view('frontend.blog')
        ->with('data', $data)
        ->with('data1', $data1);
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$data = Informasi_Sekolah::getCariBerita($cari);
        $data1 = Informasi_Sekolah::getListDataBerita();
		return view('frontend.blog')
        ->with('data1', $data1)
        ->with('data', $data);
	}

    public function tag_pendidikan()
	{
		$data = Informasi_Sekolah::getTagPendidikan();
        $data1 = Informasi_Sekolah::getListDataBerita();
		return view('frontend.blog')
        ->with('data1', $data1)
        ->with('data', $data);
	}

    public function tag_kemendikbud()
	{
		$data = Informasi_Sekolah::getTagKemendikbud();
        $data1 = Informasi_Sekolah::getListDataBerita();
		return view('frontend.blog')
        ->with('data1', $data1)
        ->with('data', $data);
	}

    public function tag_sdjuara()
	{
		$data = Informasi_Sekolah::getTagSdjuara();
        $data1 = Informasi_Sekolah::getListDataBerita();
		return view('frontend.blog')
        ->with('data1', $data1)
        ->with('data', $data);
	}

    public function tag_beasiswa()
	{
		$data = Informasi_Sekolah::getTagBeasiswa();
        $data1 = Informasi_Sekolah::getListDataBerita();
		return view('frontend.blog')
        ->with('data1', $data1)
        ->with('data', $data);
	}

    public function tag_sekolah()
	{
		$data = Informasi_Sekolah::getTagSekolah();
        $data1 = Informasi_Sekolah::getListDataBerita();
		return view('frontend.blog')
        ->with('data1', $data1)
        ->with('data', $data);
	}

    public function cat_pendidikan()
	{
		$data = Informasi_Sekolah::getCatPendidikan();
        $data1 = Informasi_Sekolah::getListDataBerita();
		return view('frontend.blog')
        ->with('data1', $data1)
        ->with('data', $data);
	}

    public function cat_sdjuara()
	{
		$data = Informasi_Sekolah::getCatSdjuara();
        $data1 = Informasi_Sekolah::getListDataBerita();
		return view('frontend.blog')
        ->with('data1', $data1)
        ->with('data', $data);
	}

    public function cat_ebook()
	{
		$data = Informasi_Sekolah::getCatEbook();
        $data1 = Informasi_Sekolah::getListDataBerita();
		return view('frontend.blog')
        ->with('data1', $data1)
        ->with('data', $data);
	}

    public function detail_berita($id)
    {
        $data = Informasi_Sekolah::find($id);
        $data1 = Informasi_Sekolah::getListDataBerita();
        return view('frontend.berita')
        ->with('data1', $data1)
        ->with('data', $data);
    }

    public function ppdb()
    {
        $data = Informasi_Sekolah::getListDataPPDB();;
        return view('frontend.ppdb')
        ->with('data', $data);
    }

    public function detail_ppdb($id)
    {
        $data = Informasi_Sekolah::find($id);
        $data1 = Informasi_Sekolah::getListDataBerita();
        return view('frontend.berita')
        ->with('data1', $data1)
        ->with('data', $data);
    }

    public function index()
    {
        $data = Informasi_Sekolah::getListDataBerita();
        $data1 = Informasi_Sekolah::getListDataPrestasi();
        $data2 = Galeri::all();
        $data3 = Informasi_Sekolah::getListDataUnggulan();
        return view('frontend.index')
        ->with('data', $data)
        ->with('data2', $data2)
        ->with('data3', $data3)
        ->with('data1', $data1);
    }

    public function galeri()
    {
        $data = Galeri::all();
        return view('frontend.galeri')
        ->with('data', $data);
    }

}
