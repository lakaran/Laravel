<?php


use App\Http\Controllers\ScoreController;

Route::post('/score', [ScoreController::class, 'store']);