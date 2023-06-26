<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi_Sekolah;
use File;
use Auth;

class PPDBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Informasi_Sekolah::getListDataPPDB();
        return view('pages.ppdb.index')
        ->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');

        $data = new Informasi_Sekolah;
        if($files = $request->file('foto')){
            foreach($files as $file){
                $name = uniqid().'.'.$file->getClientOriginalExtension();
                $file->move('upload/',$name);
                $data->foto = 'http://127.0.0.1:8000/upload/'.$name;
            }
        }
        $data->judul = $judul;
        $data->id_konten = 4;
        $data->deskripsi = $deskripsi;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect('ppdb/index')
        ->with('success', $data);
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
        return view('pages.ppdb.detail')
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
        return view('pages.ppdb.update')
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
        $data->updated_by = Auth::user()->id;
        $data->save();
        
        return redirect('ppdb/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Informasi_Sekolah::where('id_informasi',$id)->first();
        File::delete('upload/'.$gambar->foto);
    
        Informasi_Sekolah::find($id)->delete();
        return redirect('ppdb/index');
    }
}
