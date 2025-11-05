<?php

use Illuminate\Support\Facades\Route;
use Modules\TestingModule\Http\Controllers\TestingModuleController;


Route::any('testing-module-route', function () {
    return 'testing module route';

});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('testingmodules', TestingModuleController::class)->names('testingmodule');
});
