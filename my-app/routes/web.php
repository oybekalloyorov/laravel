<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return view("test");
// });
// ikkalasi bir narsa ==
Route::view('/test', 'test-route');

Route::get('user/{id}/photo/{photo_id}', function ($user_id, $photo_id) {
    return 'Siz tanlagan user id bu ' . $user_id . ' Siz tanlagan photo id bu ' . $photo_id;
});

Route::post('contact', function(){
    return 'post route';
});
