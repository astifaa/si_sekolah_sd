@extends('layouts.default')

@section('title', 'Home Page')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Profile Pengguna <small></small></h1>
	<!-- end page-header -->

	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
    <h4 class="panel-title">Ubah Profil Pengguna</h4>
        </div>
		<div class="panel-body">
    <form class="form-horizontal" method="POST" action="{{ url('profile/update_login',$data['id']) }}" enctype="multipart/form-data">
            @csrf
              <div class="box-body">
              <div class="form-group">
                  <label for="inputPassword3" class=" control-label">Email</label>

                  <div class="validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input type="text" name="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  id="email" placeholder="Masukkan Email" value="{{ old('email', $data->email) }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
						        <span class="focus-input100"></span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class=" control-label">Password</label>

                  <div class="validate-input" data-validate = "Password is required">
                    <input type="password" name="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Masukkan Password" value="{{ old('password') }}" required autofocus>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <span class="focus-input100"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class=" control-label">Konfirmasi Password</label>

                  <div class="validate-input" data-validate = "Password confirmation is not same">
                    <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password_confirmation" placeholder="Masukkan Konfirmasi Password" value="{{ old('password_confirmation') }}" required autofocus>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <span class="focus-input100"></span>
                  </div>
                </div>

                <div class="form-group" style="float: right;">
                <label for="inputPassword3" class="col-sm-4 control-label"></label>
                  <div class="col-sm-12">
                  <a href="{{ url('profile/index/') }}" class="btn btn-default btn-flat"><i class="fa fa-close"></i> Batal</a>
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                </div>
              </div>
              <div class="box-footer">
              
              </div>
            </form>		
		</div>
	</div>
	<!-- end panel -->
@endsection