<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [[
		'icon' => 'fa fa-th-large',
		'title' => 'Halaman Utama',
		'url' => '/home',
	],
	// [
	// 	'icon' => 'fa fa-school',
	// 	'title' => 'Profil Sekolah',
	// 	'url' => '/profil-sekolah/index',
	// ],
	[
		'icon' => 'fa fa-table',
		'title' => 'Berita',
		'url' => '/berita/index',
	],[
		'icon' => 'fa fa-star',
		'title' => 'Prestasi',
		'url' => '/prestasi/index',
	],[
		'icon' => 'fa fa-book',
		'title' => 'PPDB',
		'url' => '/ppdb/index',
	],
	[
		'icon' => 'fa fa-running',
		'title' => 'Extrakulikuler',
		'url' => '/eskul/index',
	],[
		'icon' => 'fa fa-bell',
		'title' => 'Fasilitas',
		'url' => '/fasilitas/index',
	],[
		'icon' => 'fa fa-school',
		'title' => 'Program Unggulan',
		'url' => '/unggulan/index',
	],[
		'icon' => 'fa fa-phone-alt',
		'title' => 'Kontak',
		'url' => '/kontak/index',
	],[
		'icon' => 'fa fa-image',
		'title' => 'Galeri',
		'url' => '/galeri/index',
	]]
];
