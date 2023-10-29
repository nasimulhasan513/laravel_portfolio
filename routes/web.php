<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    // get data from storage/data/myself.json
    $data = json_decode(file_get_contents(storage_path('data/myself.json')), true);

    return view('welcome', $data);
});

Route::get('/projects', function () {
    // get data from storage/data/projects.json
    $projects = json_decode(file_get_contents(storage_path('data/projects.json')), true);

    return view('projects', [
        'projects' => $projects,
    ]);
});

Route::get('/experience', function () {
    // get data from storage/data/experiance.json
    $data = json_decode(file_get_contents(storage_path('data/experience.json')), true);

    return view('experience', [
        'experiences' => $data,
    ]);
});
