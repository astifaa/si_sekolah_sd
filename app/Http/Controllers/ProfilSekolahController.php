<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi_Sekolah;
use File;

class ProfilSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Informasi_Sekolah::getListDataProfil();
        return view('pages.profil-sekolah.index')
        ->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */    
    public function show($id)
    {
        $data = Informasi_Sekolah::find($id);
        return view('pages.profil-sekolah.detail')
        ->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Informasi_Sekolah::find($id);
        return view('pages.profil-sekolah.update')
        ->with('data', $data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');

        $data = Informasi_Sekolah::where('id_informasi', $id)->first();
        if($files = $request->file('foto')){
            foreach($files as $file){
                $name = uniqid().'.'.$file->getClientOriginalExtension();
                $file->move('upload/',$name);
                $data->foto = 'http://127.0.0.1:8000/upload/'.$name;
            }
        }
        
        $data->judul = $judul;
        $data->deskripsi = $deskripsi;
        $data->save();
        
        return redirect('profil-sekolah/index');
    }
}
