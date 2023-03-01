<?php

use App\Http\Controllers\AnalitycController;
use App\Http\Controllers\GraduationController;
use App\Http\Controllers\SocialMediaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('visitor')->name('visitor.')->group(function () {
    Route::post('set', [AnalitycController::class, 'setDataVisitor'])->name('set');
});
Route::get('social/{id}', [SocialMediaController::class, 'edit'])->name('social.edit')->middleware('auth');
