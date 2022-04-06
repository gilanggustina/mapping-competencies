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

    Route::get('/competencies-group', 'CompetenciesGroup@index')->name('CompetenciesGroup');
    Route::get('/achievement-competencies', 'AchievementCompetencies@index')->name('AchievementCompetencies');

    // Kurikulum
    Route::prefix("curriculum")->group(function () {
        Route::get('/', 'Curriculum@index')->name('Curriculum');
        Route::get('/cr/get-skill', 'Curriculum@getSkill')->name('get.skill');
        Route::get('/cr/get-jabatan', 'Curriculum@getJabatan')->name('get.cr.jabatan');
        Route::post('/curriculum-post', 'Curriculum@store')->name('Curriculum.post');
        Route::get('/form-edit-curriculum','Curriculum@getFormEditCurriculum')->name('getFormEditCurriculum');
        Route::post('/curriculum-edit', 'Curriculum@editCurriculum')->name('editCurriculum');
        Route::get('/curriculum-delete/{id}', 'Curriculum@delete')->name('Curriculum.delete');
    });
    
    // Taging
    Route::prefix("tagging-list")->group(function () {
        Route::get('/', 'Tagging@index')->name('TagList');
        Route::get('/tagging-json','Tagging@tagingJson')->name('taggingJson');
        Route::get('/form','Tagging@formTaggingList')->name('tagingForm');
        Route::post('/action','Tagging@actionTagingList')->name('actionTagingList');
        Route::get('/detail','Tagging@detail')->name('tagingDetail');
    });

    // Competency Directory
    Route::prefix("competencies-directory")->group(function () {
        Route::get('/', 'CompetenciesDirectory@index')->name('CompetenciesDirectory');
        Route::get('/json', 'CompetenciesDirectory@jsonDataTable')->name("jsonCompetencyDirectory");
        Route::get('/form','CompetenciesDirectory@formCompetency')->name('formCompetency');
        Route::get('/add-row','CompetenciesDirectory@addRow')->name('addRow');
        Route::post('/action','CompetenciesDirectory@storeCompetencyDirectory')->name('storeCompetencyDirectory');
        Route::get('/detail','CompetenciesDirectory@detail')->name("detailCompetencyDirectory");
    });
    
    // White Tag
    Route::prefix("white-tag")->group(function () {
        Route::get('/', 'WhiteTag@index')->name('WhiteTag');
        Route::get('/member-json', 'WhiteTag@cgJson')->name('memberJson');
        Route::get('/form','WhiteTag@formWhiteTag')->name("formWhiteTag");
        Route::post('/action','WhiteTag@actionWhiteTag')->name("actionWhiteTag");
        Route::get('/detail', 'WhiteTag@detailWhiteTag')->name('detailWhiteTag');
    });
        
        
    Route::get('/ceme', 'Ceme@index')->name('ceme');
    Route::post('/ceme-post', 'Ceme@actionCeme')->name('actionCeme');

});
