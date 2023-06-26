@extends('layouts.default')

@section('title', 'Home Page')

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
	<li class="breadcrumb-item">
		<!-- <a href="" class="btn btn-primary text-white"><i class="fa fa-plus"></i> Tambah Data</a> -->
	</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Detail Kontak <small></small></h1>
<!-- end page-header -->

<!-- begin panel -->
<div class="panel panel-inverse">
	<div class="panel-heading">
		<h4 class="panel-title">Detail Kontak</h4>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" enctype="multipart/form-data">
            @csrf
			<div class="card-body">
				<div class="form-group">
					<label for=""><strong>Alamat</strong></label>
					<input type="text" name="alamat" class="form-control bg-white" style="border: none;" value="{{ $data['alamat'] }}" disabled>
				</div>
				<div class="form-group">
					<label for=""><strong>Email</strong></label>
					<input type="text" name="email" class="form-control bg-white" style="border: none;" value="{{ $data['email'] }}" disabled>
				</div>
				<div class="form-group">
					<label for=""><strong>No. Whatsapp</strong></label>
					<input type="number" name="tlp" class="form-control bg-white" style="border: none;" value="{{ $data['tlp'] }}" disabled>
				</div>
				<div class="form-group" style="float:right;">
					<a href="{{ url('kontak/index/') }}" class="btn btn-white" data-dismiss="modal">Kembali</a>
				</div>
			</form>
		</div>
	</div>
	<!-- end panel -->
	@endsection