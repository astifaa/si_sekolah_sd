<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Informasi_Sekolah extends Model
{
    protected $table='informasi_sekolahs';
    protected $primaryKey='id_informasi';
    public $incrementing =false;
    public $timestamps=true; 
    protected $fillable = [
      'id_informasi','judul','foto','deskripsi','id_konten','updated_at', 'created_at'
    ];

    public static function getListDataProfil(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '1')
      ->get();
    }

    public static function getListDataBerita(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '2')
      ->get();
    }

    public static function getListDataBeritaPagination(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '2')
      ->paginate(5);
    }

    public static function getListDataRecent(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '2')
      ->orderBy('tgl_posting', 'DESC')
      ->take(5)
      ->get();
    }

    public static function getListDataPrestasiRecent(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '3')
      ->orderBy('tgl_posting', 'DESC')
      ->take(5)
      ->get();
    }

    public static function getListDataPrestasiPagination(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '3')
      ->paginate(5);
    }

    public static function getListDataPrestasi(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '3')
      ->get();
    }

    public static function getListDataPPDB(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '4')
      ->get();
    }

    public static function getListDataEskul(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '5')
      ->get();
    }

    public static function getListDataFasilitas(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '6')
      ->get();
    }

    public static function getListDataUnggulan(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '7')
      ->get();
    }
    
    public static function getJumlahBerita(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '2')
      ->count();
    }

    public static function getJumlahPrestasi(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '3')
      ->count();
    }

    public static function getJumlahEskul(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('id_konten', '5')
      ->count();
    }

    public static function getCariBerita($cari){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('judul','like',"%".$cari."%")
      ->where('id_konten', '2')
      ->get();
    }

    public static function getTagPendidikan(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('judul','like',"%pendidikan%")
      ->where('id_konten', '2')
      ->get();
    }

    public static function getTagKemendikbud(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('judul','like',"%kemendikbud%")
      ->where('id_konten', '2')
      ->get();
    }

    public static function getTagSekolah(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('judul','like',"%sekolah%")
      ->where('id_konten', '2')
      ->get();
    }

    public static function getTagSdjuara(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('judul','like',"%sdjuara%")
      ->where('id_konten', '2')
      ->get();
    }

    public static function getTagBeasiswa(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('judul','like',"%beasiswa%")
      ->where('id_konten', '2')
      ->get();
    }

    public static function getCatSdjuara(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('judul','like',"%SD Juara%")
      ->where('id_konten', '2')
      ->get();
    }

    public static function getCatPendidikan(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('judul','like',"%Pendidikan%")
      ->where('id_konten', '2')
      ->get();
    }

    public static function getCatEbook(){
      return $data = DB::table('informasi_sekolahs')
      ->select('*')
      ->where('judul','like',"%E-Book%")
      ->where('id_konten', '2')
      ->get();
    }
}
