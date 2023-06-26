<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
use File;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kontak::all();
        return view('pages.kontak.index')
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
        $data = Kontak::find($id);
        return view('pages.kontak.detail')
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
        $data = Kontak::find($id);
        return view('pages.kontak.update')
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
        $alamat = $request->input('alamat');
        $tlp = $request->input('tlp');
        //$koordinat = $request->input('koordinat');
        $email = $request->input('email');

        $data = Kontak::where('id_kontak', $id)->first();
        $data->alamat = $alamat;
        $data->tlp = $tlp;
        //$data->koordinat = $koordinat;
        $data->email = $email;
        $data->save();
        
        return redirect('kontak/index');
    }
}
