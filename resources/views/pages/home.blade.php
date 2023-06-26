@extends('layouts.default')

@section('title', 'Home Page')

@section('content')
<!-- begin breadcrumb -->
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Dashboard <small></small></h1>
<!-- end page-header -->

<!-- begin panel -->
<div class="panel-body">
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-blue">
				<div class="stats-icon"><i class="fa fa-table"></i></div>
				<div class="stats-info">
					<h4>BERITA</h4>
					<p>{{ $data }}</p>	
				</div>
				<div class="stats-link">
					<a href="{{ url('berita/index/') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-info">
				<div class="stats-icon"><i class="fa fa-book"></i></div>
				<div class="stats-info">
					<h4>PRESTASI</h4>
					<p>{{ $data1 }}</p>	
				</div>
				<div class="stats-link">
					<a href="{{ url('prestasi/index/') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-orange">
				<div class="stats-icon"><i class="fa fa-running"></i></div>
				<div class="stats-info">
					<h4>EKSTRAKULIKULER</h4>
					<p>{{ $data2 }}</p>	
				</div>
				<div class="stats-link">
					<a href="{{ url('eskul/index/') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon"><i class="fa fa-image"></i></div>
				<div class="stats-info">
					<h4>Galeri</h4>
					<p>{{ $data3 }}</p>	
				</div>
				<div class="stats-link">
					<a href="{{ url('galeri/index/') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
	</div>
</div>
<!-- end panel -->
@endsection