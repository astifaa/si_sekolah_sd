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
<h1 class="page-header">Ubah prestasi <small></small></h1>
<!-- end page-header -->

<!-- begin panel -->
<div class="panel panel-inverse">
	<div class="panel-heading">
		<h4 class="panel-title">Ubah prestasi</h4>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" method="POST" action="{{ url('prestasi/update', $data['id_informasi']) }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<div class="form-group">
					<label for=""><strong>Foto</strong></label>
					<div class="col-sm-10">
						<a href="{{ $data['foto'] }}" data-toggle="lightbox" data-gallery="image-gallery" data-title="{{ $data['judul'] }}" style="width:500px">
							<img src="{{ $data['foto'] }}" class="img-fluid" width="600px">
						</a>
						<input type="hidden" name="tmp_image" value="{{ $data['foto'] }}">
					</div>
				</div>
				<div class="form-group">
					<input type="file" name="foto[]" class="form-control" id="file" multiple>
				</div>
				<div class="form-group">
					<label for=""><strong>Judul</strong></label>
					<input type="text" name="judul" id="judul" class="form-control" value="{{ $data['judul'] }}">
				</div>
				<div class="form-group">
					<label for=""><strong>Deskripsi</strong></label>
					<textarea class="textarea form-control" id="wysihtml5" name="deskripsi" placeholder="Enter text ..." rows="12">{{ $data['deskripsi'] }}</textarea>
				</div>
				<div class="form-group" style="float:right;">
					<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Simpan</button>
					<a href="{{ url('prestasi/index/') }}" class="btn btn-white" data-dismiss="modal">Kembali</a>
				</div>
			</form>
		</div>
	</div>
	<!-- end panel -->
	@endsection