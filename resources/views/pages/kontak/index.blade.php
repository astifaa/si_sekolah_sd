@extends('layouts.default')

@section('title', 'Home Page')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Data Kontak <small></small></h1>
	<!-- end page-header -->

	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Tabel Data Kontak</h4>
        </div>
		<div class="panel-body">
			<table id="data-table-responsive" class="table table-striped table-bordered table-td-valign-middle" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Alamat</th>
                        <th>No. Whatsapp</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach($data as $row => $value)
                    <?php $no++ ;?>
                    <tr>
                    <td>{{ $no }}</td>
                    <td>{{substr($value->alamat,0,63) }}...</td>
                    <td>{{ $value->tlp }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                        <a href="{{ url('kontak/detail', $value->id_kontak) }}" class="btn btn-info btn-sm btn-flat text-white" title="Lihat Data ini"><i class="fa fa-eye"></i> Lihat</a>                        <a href="{{ url('kontak/edit', $value->id_kontak) }}" class="btn btn-green btn-sm btn-flat text-white" title="Ubah Data ini"><i class="fa fa-edit"></i> Ubah</a>
                    </td>
                    </tr>
                @endforeach
         </tbody>
     </table>
		</div>
	</div>
	<!-- end panel -->
@endsection