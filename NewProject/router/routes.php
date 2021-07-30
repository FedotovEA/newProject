<?php

use App\Services\Router;
use App\Controllers\Auth;

Router::page('/home', 'home');
Router::page('/login', 'login');
Router::page('/register', 'register');


Router::page('/favorites', 'favorites');

Router::post('/favorite/delFavorite', \App\Controllers\Favorite::class,'delFavorite');
Router::post('/favorite/addToFavorite', \App\Controllers\Favorite::class,'addToFavorite');

Router::post('/auth/register', Auth::class,'register');
Router::post('/auth/login', Auth::class,'login');
Router::post('/auth/logout', Auth::class,'logout');

Router::enable();
?>