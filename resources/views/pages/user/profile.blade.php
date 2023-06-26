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
    <h4 class="panel-title">Profil Pengguna</h4>
        </div>
		<div class="panel-body">
    <form class="form-horizontal" enctype="multipart/form-data">
      @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="" class="control-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $data['name'] }}" disabled>
                  </div>
                <div class="form-group">
                  <label for="" class=" control-label">Email</label>

                    <input type="text" name="email" class="form-control" id="email" value="{{ $data['email'] }}" disabled>
                  </div>

                <div class="form-group">
                <label for="" class="control-label"></label>
                  <a href="{{ url('profile/edit_login', Auth::user()->id) }}" style="float: right;" class="btn btn-green btn-flat"><i class="fa fa-edit"></i> Ubah Data Profile</a>
                  </div>
              </div>
              <div class="box-footer">
              
              </div>
            </form>			
		</div>
	</div>
	<!-- end panel -->
@endsection