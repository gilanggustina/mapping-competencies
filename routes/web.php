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

    Route::get('cr/get-skill', 'Curriculum@getSkill')->name('get.skill');
    Route::get('cr/get-jabatan', 'Curriculum@getJabatan')->name('get.cr.jabatan');


    Route::get('/curriculum', 'Curriculum@index')->name('Curriculum');
    Route::post('/curriculum-post', 'Curriculum@store')->name('Curriculum.post');
    Route::post('/curriculum-edit/{id}', 'Curriculum@edit')->name('Curriculum.edit');
    Route::post('/curriculum-delete/{id}', 'Curriculum@delete')->name('Curriculum.delete');

    Route::get('/competencies-directory', 'CompetenciesDirectory@index')->name('CompetenciesDirectory');
    Route::get('/competencies-group', 'CompetenciesGroup@index')->name('CompetenciesGroup');
    Route::get('/achievement-competencies', 'AchievementCompetencies@index')->name('AchievementCompetencies');
    Route::get('/tagging-list', 'Tagging@taglist')->name('TagList');
    Route::get('/tagging-card', 'Tagging@tagcard')->name('TagCard');
    Route::get('/ceme', 'Ceme@index')->name('ceme');

    Route::get('/white-tag', 'WhiteTag@index')->name('WhiteTag');
    Route::get('/white-tag-member', 'WhiteTag@cgJson')->name('WhiteTagMember');
    Route::get('/white-tag-func', 'WhiteTag@functional')->name('WhiteTagFunc');
    Route::get('/form-white-tag','WhiteTag@formWhiteTag')->name("formWhiteTag");
    Route::post('/action-white-tag','WhiteTag@actionWhiteTag')->name("actionWhiteTag");
    Route::get('/detail-white-tag', 'WhiteTag@detailWhiteTag')->name('detailWhiteTag');


});
