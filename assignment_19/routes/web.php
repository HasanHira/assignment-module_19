<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(BlogController::class)->group(function(){
    Route::get( '/', 'blogPage' )->name( 'home' );
    Route::get( '/blog/details/{id}', 'blogDetails' )->name( 'blog.details' );

    Route::get( '/allBlog', 'allBlog' );
    Route::post( '/comment', 'comment' );
});
