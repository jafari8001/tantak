<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Core\DocsController;

Route::get('docs', function () {
    return view('scribe.index');
})
    ->middleware('DocsLogin');

Route::get('docs/postman', function () {
    return response()->file('upload/scribe/collection.json');
})
    ->name('scribe.postman')
    ->middleware('DocsLogin');

Route::get('docs/login', [DocsController::class, 'uiBasedAuthentication']);
Route::post('docs/check', [DocsController::class, 'uiBasedLogin']);
