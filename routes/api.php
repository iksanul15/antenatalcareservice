<?php


Route::group(['middleware' => ['api']], function(){

    //Ibu
    Route::post('/ibu', 'IbuController@store');
    Route::get('/ibu', 'IbuController@index');
    Route::get('/ibu/{id}', 'IbuController@show');

    // Rkontrol
    Route::post('/reminder-kontrol', 'RkontrolController@store');
    Route::get('/reminder-kontrol', 'RkontrolController@index');
    Route::get('/reminder-kontrol/{id}', 'RkontrolController@show');

    // Rimunisasi
    Route::post('/reminder-imunisasi', 'RimunisasiController@store');
    Route::get('/reminder-imunisasi', 'RimunisasiController@index');
    Route::get('/reminder-imunisasi/{id}', 'RimunisasiController@show');

    // Informasi
    Route::post('/informasi', 'informasisController@store');
    Route::get('/informasi', 'informasisController@index');
    Route::get('/informasi/{id}', 'informasisController@show');

    // Risk
    Route::post('/risk', 'risksController@store');
    Route::get('/risk', 'risksController@index');
    Route::get('/risk/{id}', 'risksController@show');

    // Laboratory Rutin
    Route::post('/laboratory-rutin', 'laboratoryRutinController@store');
    Route::get('/laboratory-rutin', 'laboratoryRutinController@index');
    Route::get('/laboratory-rutin/{id}', 'laboratoryRutinController@show');

    // Laboratory Khusus
    Route::post('/laboratory-khusus', 'laboratoryKhususController@store');
    Route::get('/laboratory-khusus', 'laboratoryKhususController@index');
    Route::get('/laboratory-khusus/{id}', 'laboratoryKhususController@show');

    // Obat Rutin
    Route::post('/obat-rutin', 'obatRutinsController@store');
    Route::get('/obat-rutin', 'obatRutinsController@index');
    Route::get('/obat-rutin/{id}', 'obatRutinsController@show');

    // Obat Khusus
    Route::post('/obat-khusus', 'obatKhususController@store');
    Route::get('/obat-khusus', 'obatKhususController@index');
    Route::get('/obat-khusus/{id}', 'obatKhususController@show');

});

?>