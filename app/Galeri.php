<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Galeri extends Model
{
    protected $table='galeris';
    protected $primaryKey='id_galeri';
    public $incrementing =false;
    public $timestamps=true; 
    protected $fillable = [
      'id_galeri','deskripsi','kategori','foto','updated_by', 'created_by','updated_at', 'created_at'
    ];

    public static function getListDataLomba(){
      return $data = DB::table('galeris')
      ->select('*')
      ->where('kategori', 'Lomba')
      ->get();
    }
    
    public static function getListDataPameran(){
      return $data = DB::table('galeris')
      ->select('*')
      ->where('kategori', 'Pameran')
      ->get();
    }

    public static function getListDataEkstrakulikuler(){
      return $data = DB::table('galeris')
      ->select('*')
      ->where('kategori', 'Ekstrakulikuler')
      ->get();
    }

    public static function getJumlahGaleri(){
      return $data = DB::table('galeris')
      ->select('*')
      ->count();
    }
}
