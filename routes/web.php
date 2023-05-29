<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Core\DocsController;

Route::fallback(function () {
    abort(404);
});

Route::get('docs', function () {
    return response()->file('public/docs/index.html');
})
    ->middleware('DocsLogin');

Route::get('docs/postman', function () {
    return response()->file('public/docs/collection.json');
})
    ->name('scribe.postman')
    ->middleware('DocsLogin');

Route::get('docs/login', [DocsController::class, 'uiBasedAuthentication']);
Route::post('docs/check', [DocsController::class, 'uiBasedLogin']);
