<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'AuthController@index')->name('login');
    Route::post('/login', 'AuthController@login')->name('postlogin');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'Dashboard@index')->name('Dashboard');
    Route::get('/dashboard/get-card', 'Dashboard@card_profile')->name('Dashboard.card-profile');
    Route::get('/logout', 'AuthController@logout')->name('logout');

    Route::get('/cg', 'MemberCG@index')->name('Member');
    Route::get('/cg/cgJson', 'MemberCG@cgJson')->name('Member.get');
    Route::post('/cg-post', 'MemberCG@store')->name('Member.post');
    Route::post('/cg-edit', 'MemberCG@edit')->name('Member.edit');
    Route::post('/cg-delete', 'MemberCG@delete')->name('Member.delete');

    Route::get('/get-divisi', 'MemberCG@getDivisi')->name('get.divisi');
    Route::get('/get-jabatan', 'MemberCG@getJabatan')->name('get.jabatan');
    Route::get('/get-level', 'MemberCG@getLevel')->name('get.level');
    Route::get('/get-department', 'MemberCG@getDepartment')->name('get.department');
    Route::get('/get-subdept', 'MemberCG@getSubDepartment')->name('get.sub.department');
    Route::get('/get-cg', 'MemberCG@getLigaCG')->name('get.cg');


    Route::get('/curriculum', 'Curriculum@index')->name('Curriculum');
    Route::get('/competencies-directory', 'CompetenciesDirectory@index')->name('CompetenciesDirectory');
    Route::get('/competencies-group', 'CompetenciesGroup@index')->name('CompetenciesGroup');
    Route::get('/achievement-competencies', 'AchievementCompetencies@index')->name('AchievementCompetencies');
    Route::get('/tagging', 'Tagging@index')->name('tagging');
    Route::get('/ceme', 'Ceme@index')->name('ceme');
});
