<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Core\DocsController;

Route::fallback(function () {
    abort(404);
});

Route::get('doc', function () {
    return response()->file('public/docs/index.html');
})
    ->middleware('DocsLogin');

Route::get('doc/postman', function () {
    return response()->file('public/docs/collection.json');
})
    ->name('scribe.postman')
    ->middleware('DocsLogin');

Route::get('doc/login', [DocsController::class, 'uiBasedAuthentication']);
Route::post('doc/check', [DocsController::class, 'uiBasedLogin']);
