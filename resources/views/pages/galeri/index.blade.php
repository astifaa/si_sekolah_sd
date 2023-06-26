@extends('layouts.default')

@section('title', 'Home Page')

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
	<li class="breadcrumb-item">
		<a href="{{ url('galeri/create') }}" class="btn btn-primary text-white"><i class="fa fa-plus"></i> Tambah Data</a>
	</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Data galeri <small></small></h1>
<!-- end page-header -->

<!-- begin panel -->
<div class="panel panel-inverse">
	<div class="panel-heading">
		<h4 class="panel-title">Tabel Data galeri</h4>
	</div>
	<div class="panel-body">
		<div id="gallery" class="gallery">
			<!-- begin image -->
			@foreach($data as $row => $value)
			<div class="image gallery-group-1 bg-light" style="float: left;">
				<div class="image-inner">
					<!-- <a href="upload/{{ $value->foto }}" data-lightbox="gallery-group-1"> -->
						<div class="img" style="background-image: url({{ $value->foto }})"></div>
					</a>
					<p class="image-caption">
						#{{$value->kategori}}
					</p>
				</div>
				<div class="image-info">
					<div class="pull-right">
						<a href="{{ url('galeri/delete', $value->id_galeri) }}" class="btn bg-red btn-sm btn-flat text-white" title="Ubah Data ini" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" title="Hapus Data ini"><i class="fa fa-trash"></i> Hapus</a>
					</div>
					<div class="rating">
						<p>Aksi</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<!-- end panel -->
@endsection