<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('/match', function () {

    $data = [

        'query' => [

            'match' => [

                'car_name' => [
                    'query' => 'bugatti',
                    'operator' => 'and'
                ]

            ],

        ]
    ];
    $res = Http::post('http://localhost:9400/automobile/model/_search', $data);

    dd($res->json());
});

Route::get('/create', function () {

    $data_one = [
        'car_name' => 'mercedes',
        'color' => 'blue',
        'produced_date' => '2023'
    ];
    $data_two = [
        'car_name' => 'mercedes',
        'color' => 'red',
        'produced_date' => '2020'
    ];

    $data_three = [
        'car_name' => 'bugatti',
        'color' => 'red',
        'produced_date' => '2000'
    ];
    $data_four = [
        'car_name' => 'bugatti',
        'color' => 'green',
        'produced_date' => '1990'
    ];

    $res1 = Http::post('http://localhost:9400/automobile/model', $data_one);
    $res2 = Http::post('http://localhost:9400/automobile/model', $data_two);
    $res3 = Http::post('http://localhost:9400/automobile/model', $data_three);
    $res4 = Http::post('http://localhost:9400/automobile/model', $data_four);

    dd($res1, $res2, $res3, $res4);

});


Route::get('/update', function () {

});


Route::get('/delete', function () {

});

Route::get('/delete-by-id', function () {

});


Route::get('/delete-by-query', function () {

});

Route::get('/update-by-query', function () {

});
