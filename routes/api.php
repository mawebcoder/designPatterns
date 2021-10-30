<?php

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/elastic', function () {

    $data=[

        'query'=>[
            'bool'=>
            [
                'must'=>
                [
                    [
                        'match'=>
                        [
                            'name'=>
                            [
                                'query'=>'mohammad'
                            ]
                        ]
                    ],
                ]
            ]
        ]

    ];

    $response = Http::post('http://localhost:9400/product/attribute/_search', $data);

    return response($response->json());

});
