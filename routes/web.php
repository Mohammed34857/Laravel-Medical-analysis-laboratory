<?php

use Illuminate\Support\Facades\Route;


Route::get('/Analysis_information', function () {
    return view('guest/pages/Analysis_information');
});
Route::get('/Analysis_result', function () {
    return view('guest/pages/Analysis_result');
});
Route::get('/Branches', function () {
    return view('guest/pages/branches');
});
Route::get('/lab', function () {
    return view('guest/pages/lab');
});
Route::get('/', function () {
    return view('guest/pages/laboratory');
});
Route::get('/list_of_analysis', function () {
    return view('guest/pages/list_of_analysis');
});
Route::get('/the_result', function () {
    return view('guest/pages/the_result');
 });






