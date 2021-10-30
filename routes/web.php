<?php

use Illuminate\Support\Facades\Route;


Route::get('/test', [\App\Http\Controllers\DesinPatternController::class, 'doSomeThing']);


Route::get('/bank', function() {

    $type = request()->get('type');

    \App\GateWayFactory::PrepareGateWay($type)->connectToBank();

});


