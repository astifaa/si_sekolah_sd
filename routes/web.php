<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permission', 'HomeController@cek')->name('permission');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'admin']], function () {
    //Profil Sekolah
    Route::get('profil-sekolah/index/', 'ProfilSekolahController@index');
    Route::get('profil-sekolah/detail/{id}', 'ProfilSekolahController@show');
    Route::get('profil-sekolah/edit/{id}', 'ProfilSekolahController@edit');
    Route::post('profil-sekolah/update/{id}', 'ProfilSekolahController@update');

    //Berita
    Route::get('berita/index/', 'BeritaController@index');
    Route::get('berita/detail/{id}', 'BeritaController@show');
    Route::get('berita/create/', 'BeritaController@create');
    Route::post('berita/save/', 'BeritaController@store');
    Route::get('berita/edit/{id}', 'BeritaController@edit');
    Route::post('berita/update/{id}', 'BeritaController@update');
    Route::get('berita/delete/{id}', 'BeritaController@destroy');

    //Prestasi
    Route::get('prestasi/index/', 'PrestasiController@index');
    Route::get('prestasi/detail/{id}', 'PrestasiController@show');
    Route::get('prestasi/create/', 'PrestasiController@create');
    Route::post('prestasi/save/', 'PrestasiController@store');
    Route::get('prestasi/edit/{id}', 'PrestasiController@edit');
    Route::post('prestasi/update/{id}', 'PrestasiController@update');
    Route::get('prestasi/delete/{id}', 'PrestasiController@destroy');

    //PPDB
    Route::get('ppdb/index/', 'PPDBController@index');
    Route::get('ppdb/detail/{id}', 'PPDBController@show');
    Route::get('ppdb/create/', 'PPDBController@create');
    Route::post('ppdb/save/', 'PPDBController@store');
    Route::get('ppdb/edit/{id}', 'PPDBController@edit');
    Route::post('ppdb/update/{id}', 'PPDBController@update');
    Route::get('ppdb/delete/{id}', 'PPDBController@destroy');

    //Eskul
    Route::get('eskul/index/', 'EskulController@index');
    Route::get('eskul/detail/{id}', 'EskulController@show');
    Route::get('eskul/create/', 'EskulController@create');
    Route::post('eskul/save/', 'EskulController@store');
    Route::get('eskul/edit/{id}', 'EskulController@edit');
    Route::post('eskul/update/{id}', 'EskulController@update');
    Route::get('eskul/delete/{id}', 'EskulController@destroy');

    //Fasilitas
    Route::get('fasilitas/index/', 'FasilitasController@index');
    Route::get('fasilitas/detail/{id}', 'FasilitasController@show');
    Route::get('fasilitas/create/', 'FasilitasController@create');
    Route::post('fasilitas/save/', 'FasilitasController@store');
    Route::get('fasilitas/edit/{id}', 'FasilitasController@edit');
    Route::post('fasilitas/update/{id}', 'FasilitasController@update');
    Route::get('fasilitas/delete/{id}', 'FasilitasController@destroy');

    //Fasilitas
    Route::get('unggulan/index/', 'UnggulanController@index');
    Route::get('unggulan/detail/{id}', 'UnggulanController@show');
    Route::get('unggulan/create/', 'UnggulanController@create');
    Route::post('unggulan/save/', 'UnggulanController@store');
    Route::get('unggulan/edit/{id}', 'UnggulanController@edit');
    Route::post('unggulan/update/{id}', 'UnggulanController@update');
    Route::get('unggulan/delete/{id}', 'UnggulanController@destroy');

    //Galeri
    Route::get('galeri/index/', 'GaleriController@index');
    Route::get('galeri/detail/{id}', 'GaleriController@show');
    Route::get('galeri/create/', 'GaleriController@create');
    Route::post('galeri/save/', 'GaleriController@store');
    Route::get('galeri/edit/{id}', 'GaleriController@edit');
    Route::post('galeri/update/{id}', 'GaleriController@update');
    Route::get('galeri/delete/{id}', 'GaleriController@destroy');

    //Profil Sekolah
    Route::get('kontak/index/', 'KontakController@index');
    Route::get('kontak/detail/{id}', 'KontakController@show');
    Route::get('kontak/edit/{id}', 'KontakController@edit');
    Route::post('kontak/update/{id}', 'KontakController@update');

    //User
    Route::get('profile/index/', 'UserController@profile')->name('profile');
    Route::get('profile/edit_login/{id}', 'UserController@edit_login');
    Route::post('profile/update_login/{id}', 'UserController@ubah_login');

});

// Route::get('/index', function () {
//     return view('frontend.index');
// });

//Landing Web
Route::get('/index', 'FrontendController@index');

Route::get('/about', 'FrontendController@about');
Route::get('/prestasi', 'FrontendController@prestasi');
Route::get('/blog', 'FrontendController@berita');
Route::get('/blog/cari','FrontendController@cari');
Route::get('/blog/pendidikan','FrontendController@tag_pendidikan');
Route::get('/blog/kemendikbud','FrontendController@tag_kemendikbud');
Route::get('/blog/sdjuara','FrontendController@tag_sdjuara');
Route::get('/blog/beasiswa','FrontendController@tag_beasiswa');
Route::get('/blog/sekolah','FrontendController@tag_sekolah');
Route::get('/blog/cat_pendidikan','FrontendController@cat_pendidikan');
Route::get('/blog/cat_sdjuara','FrontendController@cat_sdjuara');
Route::get('/blog/cat_ebook','FrontendController@cat_ebook');
Route::get('/blog/detail/{id}','FrontendController@detail_berita');

Route::get('/ppdb', 'FrontendController@ppdb');
Route::get('/ppdb/detail/{id}','FrontendController@detail_ppdb');

Route::get('/galeri', 'FrontendController@galeri');
