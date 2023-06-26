@extends('layouts.default')

@section('title', 'Home Page')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<!-- <li class="breadcrumb-item">
				<a href="{{ url('profil-sekolah/update/{id}') }}" class="btn btn-primary text-white"><i class="fa fa-plus"></i> Tambah Data</a>
        </li> -->
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Data Profil Sekolah <small></small></h1>
	<!-- end page-header -->

	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Tabel Data Profil Sekolah</h4>
        </div>
		<div class="panel-body">
			<table id="data-table-responsive" class="table table-striped table-bordered table-td-valign-middle" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Lihat Data</th>
                        <th>Ubah Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach($data as $row => $value)
                    <?php $no++ ;?>
                    <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $value->judul }}</td>
                    <td>{{ $value->deskripsi }}</td>
                    <td>
                        <a href="{{ url('profil-sekolah/detail', $value->id_informasi) }}" class="btn bg-cyan btn-flat" title="Lihat Data ini"><i class="fa fa-eye"></i> Lihat</a>
                    </td>
                    <td>
                        <a href="{{ url('profil-sekolah/edit', $value->id_informasi) }}" class="btn bg-orange btn-flat" title="Ubah Data ini"><i class="fa fa-edit"></i> Ubah</a>
                    </td>
                    </tr>
                @endforeach
         </tbody>
     </table>
		</div>
	</div>
	<!-- end panel -->
@endsection