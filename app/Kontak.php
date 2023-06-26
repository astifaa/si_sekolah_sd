<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Kontak extends Model
{
    protected $table='kontaks';
    protected $primaryKey='id_kontak';
    public $incrementing =false;
    public $timestamps=true; 
    protected $fillable = [
      'id_kontak','alamat','tlp','koordinat','email','updated_at', 'created_at'
    ];

}
