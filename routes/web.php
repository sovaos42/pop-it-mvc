<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
   ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Admin::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/users', [Controller\Site::class, 'User']);
Route::add(['GET', 'POST'], '/subvision', [Controller\Site::class, 'subvision']);
Route::add(['GET', 'POST'], '/discipline', [Controller\Site::class, 'discipline']);
Route::add(['GET', 'POST'], '/jobTitle', [Controller\Site::class, 'jobTitle']);
Route::add(['GET', 'POST'], '/viewSubvision', [Controller\Admin::class, 'viewSubvision']);