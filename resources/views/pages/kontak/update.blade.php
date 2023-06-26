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
<h1 class="page-header">Ubah Kontak <small></small></h1>
<!-- end page-header -->

<!-- begin panel -->
<div class="panel panel-inverse">
	<div class="panel-heading">
		<h4 class="panel-title">Ubah Kontak</h4>
	</div>
	<div class="panel-body">
	<form class="form-horizontal" method="POST" action="{{ url('kontak/update', $data['id_kontak']) }}" enctype="multipart/form-data">
            @csrf
			<div class="card-body">
			<div class="form-group">
					<label for=""><strong>Alamat</strong></label>
					<textarea class="textarea form-control" id="wysihtml5" name="alamat" placeholder="Enter text ..." rows="12">{{ $data['alamat'] }}</textarea>
				</div>
				<div class="form-group">
					<label for=""><strong>Email</strong></label>
					<input type="text" name="email" class="form-control" value="{{ $data['email'] }}" >
				</div>
				<div class="form-group">
					<label for=""><strong>No. Whatsapp</strong></label>
					<input type="number" name="tlp" class="form-control" value="{{ $data['tlp'] }}" >
				</div>
				<div class="form-group" style="float:right;">
					<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Simpan</button>
					<a href="{{ url('kontak/index/') }}" class="btn btn-white" data-dismiss="modal">Kembali</a>
				</div>
			</form>
		</div>
	</div>
	<!-- end panel -->
	@endsection