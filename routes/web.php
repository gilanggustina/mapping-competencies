<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/', 'LoginController@showlogin')->name('login');
//     Route::post('/login', 'LoginController@login')->name('postlogin');

//     Route::get('/register', 'LoginController@register')->name('register');
//     Route::post('/register', 'LoginController@postregister')->name('postregister');
// });

Route::get('/', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login')->name('postlogin');


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', 'Dashboard@index')->name('Dashboard');

Route::get('/member', 'MemberCG@index')->name('Member');

Route::get('/curriculum', 'Curriculum@index')->name('Curriculum');

Route::get('/competencies-directory', 'CompetenciesDirectory@index')->name('CompetenciesDirectory');

Route::get('/competencies-group', 'CompetenciesGroup@index')->name('CompetenciesGroup');

Route::get('/achievement-competencies', 'AchievementCompetencies@index')->name('AchievementCompetencies');

Route::get('/tagging', 'Tagging@index')->name('tagging');

Route::get('/ceme', 'Ceme@index')->name('ceme');
