<?php

use Illuminate\Support\Facades\Route;
use Modules\TestingModule\Http\Controllers\TestingModuleController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('testingmodules', TestingModuleController::class)->names('testingmodule');
});
