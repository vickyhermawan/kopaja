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

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/pajakpusatpasal4',function(){
    return view('materi.pasal4');
})->name('pasal4');

Route::get('/latihansoalpasal4',function(){
    return view('latihansoal.latsoalpasal4');
})->name('latsoalpasal4');

Route::get('/latihansoalpasal15',function(){
    return view('latihansoal.latsoalpasal15');
})->name('latsoalpasal15');

Route::get('/pajakpusatpasal15',function(){
    return view('materi.pasal15');
})->name('pasal15');

Route::get('/pajakpusatpasal21',function(){
    return view('materi.pasal21');
})->name('pasal21');

Route::get('/latihansoalpasal21',function(){
    return view('latihansoal.latsoalpasal21');
})->name('latsoalpasal21');

Route::get('/pajakpusatpasal22',function(){
    return view('materi.pasal22');
})->name('pasal22');

Route::get('/latihansoalpasal22',function(){
    return view('latihansoal.latsoalpasal22');
})->name('latsoalpasal22');

Route::get('/pajakpusatpasal23',function(){
    return view('materi.pasal23');
})->name('pasal23');

Route::get('/latihansoalpasal23',function(){
    return view('latihansoal.latsoalpasal23');
})->name('latsoalpasal23');

Route::get('/pajakpusatpasal25',function(){
    return view('materi.pasal25');
})->name('pasal25');

Route::get('/latihansoalpasal25',function(){
    return view('latihansoal.latsoalpasal25');
})->name('latsoalpasal25');

Route::get('/pajakpusatppn',function(){
    return view('materi.ppn');
})->name('ppn');

Route::get('/latihansoalppn',function(){
    return view('latihansoal.latsoalppn');
})->name('latsoalppn');

Route::get('/pajakpusatppnbm',function(){
    return view('materi.ppnbm');
})->name('pnbm');

Route::get('/latihansoalppnbm',function(){
    return view('latihansoal.latsoalppnbm');
})->name('latsoalppnbm');

Route::get('/pajakpusatbeamterai',function(){
    return view('materi.beamaterai');
})->name('beamaterai');

Route::get('/latihansoalbeamaterai',function(){
    return view('latihansoal.latsoalbeamaterai');
})->name('latsoalbeamaterai');

Route::get('/pbb',function(){
    return view('materi.pbb');
})->name('pbb');

Route::get('/latihansoalppb',function(){
    return view('latihansoal.latsoalppb');
})->name('latsoalppb');

Route::get('/pajakprovinsi',function(){
    return view('materi.pajakprov');
})->name('pajakprovinsi');

Route::get('/latihansoalpajakprov',function(){
    return view('latihansoal.latsoalpajakprov');
})->name('latsoalpajakprov');

Route::get('/pajakkabupaten',function(){
    return view('materi.pajakkab');
})->name('pajakkabupaten');

Route::get('/latihansoalpajakkab',function(){
    return view('latihansoal.latsoalpajakkab');
})->name('latsoalpajakkab');

Route::get('/tentang',function(){
    return view('tentang');
})->name('tentang');


Route::get('/bantuan',function(){
    return view('bantuan');
})->name('bantuan');