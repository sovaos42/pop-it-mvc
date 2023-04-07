<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
   ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Admin::class, 'signup'])
   ->middleware('admin');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']) 
   ->middleware('auth');
Route::add(['GET', 'POST'], '/users', [Controller\Site::class, 'User'])
   ->middleware('auth');
Route::add(['GET', 'POST'], '/subvision', [Controller\Site::class, 'subvision'])
   ->middleware('auth');   
Route::add(['GET', 'POST'], '/discipline', [Controller\Site::class, 'discipline']) 
   ->middleware('auth');
Route::add(['GET', 'POST'], '/jobTitle', [Controller\Site::class, 'jobTitle'])
   ->middleware('auth');
Route::add(['GET', 'POST'], '/viewSubvision', [Controller\Admin::class, 'viewSubvision'])
   ->middleware('admin');
Route::add(['GET', 'POST'], '/viewSubvisionAdd', [Controller\Admin::class, 'ViewSubvisionAdd'])
   ->middleware('admin');
Route::add(['GET', 'POST'], '/subvisionAdd', [Controller\Site::class, 'SubvisionAdd'])
   ->middleware('admin');
Route::add(['GET', 'POST'], '/disciplineAdd', [Controller\Site::class, 'DisciplineAdd'])
   ->middleware('admin');
Route::add(['GET', 'POST'], '/jobTitleAdd', [Controller\Site::class, 'JobTitleAdd'])
   ->middleware('admin');