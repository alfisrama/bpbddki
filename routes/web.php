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
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['register']);
Route::get('/', 'HomeController@index');
Route::get('home/', 'HomeController@index');
Route::get('table', 'TableController@index');

Route:: get('data/','DataController@index');
Route::resource('profile','UserController');

Route::get('ddata', function() {
    DB::table('data')->insert([
        [
            'nama_pelapor'	=> 'Rashad',
            'alamat_pelapor' => '',
            'no_hp'=> '012345678',
            'jenis_kejadian'=> 'FIRE',
            'lokasi_kejadian' => '-5.3654609, 106.9485883',
            'created_at'    => '2016-03-10 19:10:15',
            'updated_at'    => '2016-03-10 19:10:15'
        ],
        [
             'nama_pelapor'	=> 'ariq',
            'alamat_pelapor' => 'DKI Jakarta',
            'no_hp'=> '23333555',
            'jenis_kejadian'=> 'AMBULANCE',
            'lokasi_kejadian' => '-6.3654609, 106.9485883',
            'created_at'    => '2016-03-10 19:10:15',
            'updated_at'    => '2016-03-10 19:10:15'
        ],
        [
           'nama_pelapor'	=> 'Farhan',
            'alamat_pelapor' => 'DKI Jakarta',
            'no_hp'=> '0123459876',
            'jenis_kejadian'=> 'FIRE',
            'lokasi_kejadian' => '-6.3654609, 10.9485883',            
            'created_at'    => '2016-03-10 19:10:15',
            'updated_at'    => '2016-03-10 19:10:15'
        ],
    ]);
});