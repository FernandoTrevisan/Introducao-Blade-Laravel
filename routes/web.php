<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//
Route::get('/layout',[SiteController::class, 'layout']);

//
Route::get('/layout2',[SiteController::class, 'layout2']);

//
Route::get('/components',[SiteController::class, 'components']);

//
Route::get('/include',[SiteController::class, 'index2']);

//
Route::get('/',[SiteController::class, 'index']);

//
Route::get('/sair',[SiteController::class, 'exit']);

//
Route::get('/usuarios/{qnt}',[SiteController::class, 'users']);

//
Route::get('/condicionais',[SiteController::class, 'condicionais']);

// primeiro
Route::get('/exercicio/1',[SiteController::class, 'exe']);

// segundo
Route::get('/exercicio/2',[SiteController::class, 'exec']);









