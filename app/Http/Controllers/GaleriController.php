<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use File;
use Auth;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Galeri::all();
        return view('pages.galeri.index')
        ->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deskripsi = $request->input('deskripsi');
        $kategori = $request->input('kategori');

        $data = new Galeri;
        if($files = $request->file('foto')){
            foreach($files as $file){
                $name = uniqid() .'.'. $file->getClientOriginalExtension();
                $file->move('upload/',$name);
                $data->foto = 'http://127.0.0.1:8000/upload/'.$name;
            }
        }

        $data->deskripsi = $deskripsi;        
        $data->kategori = $kategori;
        $data->created_by = Auth::user()->id;

        $data->save();

        return redirect('galeri/index')
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
        $data = Galeri::find($id);
        return view('pages.galeri.detail')
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
        $data = Galeri::find($id);
        return view('pages.galeri.update')
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
        
        $deskripsi = $request->input('deskripsi');
        $kategori = $request->input('kategori');

        $data = Galeri::where('id_informasi', $id)->first();
        if($files = $request->file('foto')){
            foreach($files as $file){
                $name = uniqid().'.'.$file->getClientOriginalExtension();
                $file->move('upload/',$name);
                $data->foto = 'http://127.0.0.1:8000/upload/'.$name;
            }
        }
        
        $data->deskripsi = $deskripsi;
        $data->kategori = $kategori;
        $data->updated_by = Auth::user()->id;
        $data->save();
        
        return redirect('galeri/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Galeri::where('id_galeri',$id)->first();
        File::delete('upload/'.$gambar->foto);
    
        Galeri::find($id)->delete();
        return redirect('galeri/index');
    }
}
