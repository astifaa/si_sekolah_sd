@extends('layouts.default')

@section('title', 'Home Page')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item">
				<a href="{{ url('berita/create') }}" class="btn btn-primary text-white"><i class="fa fa-plus"></i> Tambah Data</a>
        </li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Data berita <small></small></h1>
	<!-- end page-header -->

	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Tabel Data berita</h4>
        </div>
		<div class="panel-body">
			<table id="data-table-responsive" class="table table-striped table-bordered table-td-valign-middle" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach($data as $row => $value)
                    <?php $no++ ;?>
                    <?php
                        $iboy = date('d F Y', strtotime($value->tgl_posting));
                    ?>
                    <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $value->judul }}</td>
                    <td>{{ $iboy }}</td>
                    <td width="25%">
                        <a href="{{ url('berita/detail', $value->id_informasi) }}" class="btn btn-info btn-sm btn-flat text-white" title="Lihat Data ini"><i class="fa fa-eye"></i> Lihat</a>
                        <a href="{{ url('berita/edit', $value->id_informasi) }}" class="btn btn-green btn-sm btn-flat text-white" title="Ubah Data ini"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="{{ url('berita/delete', $value->id_informasi) }}" class="btn bg-red btn-sm btn-flat text-white" title="Ubah Data ini" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" title="Hapus Data ini"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                    </tr>
                @endforeach
         </tbody>
     </table>
		</div>
	</div>
	<!-- end panel -->
@endsection