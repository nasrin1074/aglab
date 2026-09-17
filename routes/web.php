<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


/*
|--------------------------------------------------------------------------
| Research Focus Main Page
|--------------------------------------------------------------------------
*/

Route::get('/research-focus', function () {
    return view('research.index');
})->name('research.focus');


/*
|--------------------------------------------------------------------------
| Research Focus - Individual Pages
|--------------------------------------------------------------------------
*/

Route::get('/research-focus/plant-abiotic-stress', function () {
    return view('research.plant-abiotic-stress');
})->name('research.plant');


Route::get('/research-focus/whole-genome-analysis', function () {
    return view('research.whole-genome-analysis');
})->name('research.genome');


Route::get('/research-focus/soil-microbiota', function () {
    return view('research.soil-microbiota');
})->name('research.soil');


Route::get('/research-focus/ml-drug-design', function () {
    return view('research.ml-drug-design');
})->name('research.ml');