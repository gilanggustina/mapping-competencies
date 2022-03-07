<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'AuthController@index')->name('login');
    Route::post('/login', 'AuthController@login')->name('postlogin');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'Dashboard@index')->name('Dashboard');
    Route::get('/logout', 'AuthController@logout')->name('logout');


    Route::get('/cg', 'MemberCG@index')->name('Member');
    Route::get('/cg/cgJson', 'MemberCG@cgJson')->name('Member.get');
    Route::post('/cg-post', 'MemberCG@store')->name('Member.post');
    Route::post('/cg-edit', 'MemberCG@edit')->name('Member.edit');
    Route::post('/cg-delete', 'MemberCG@delete')->name('Member.delete');

    Route::get('/curriculum', 'Curriculum@index')->name('Curriculum');
    Route::get('/competencies-directory', 'CompetenciesDirectory@index')->name('CompetenciesDirectory');
    Route::get('/competencies-group', 'CompetenciesGroup@index')->name('CompetenciesGroup');
    Route::get('/achievement-competencies', 'AchievementCompetencies@index')->name('AchievementCompetencies');
    Route::get('/tagging', 'Tagging@index')->name('tagging');
    Route::get('/ceme', 'Ceme@index')->name('ceme');
});
