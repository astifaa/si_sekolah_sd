<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function profile()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('pages.user.profile')
        ->with('data', $data);
    }

    public function edit_login($id)
    {
        $data = User::find($id);
        return view('pages.user.login_ubah')
        ->with('data', $data);
    }

    public function ubah_login(Request $request, $id)
    {
        $data = User::where('id', $id)->first();
        if($data->email == $request->email){
            $this->validate($request, [
                'password' => 'required|string|min:6|confirmed'
            ]);
        }else{
            $this->validate($request, [
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed'
            ]);
        }

        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        

   		if($data->save()){
            return redirect('profile/index')
            ->with(['success' => 'Data Login berhasil diubah']);
        }else{
            return redirect('profile/index')
            ->with(['error' => 'Data Login gagal diubah']);
        }
    }
}
