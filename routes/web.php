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

    Route::prefix("member")->group(function(){
        Route::get('/', 'MemberCG@index')->name('Member');
        Route::get('/member/cgJson', 'MemberCG@cgJson')->name('Member.get');
        Route::post('/member-post', 'MemberCG@store')->name('Member.post');
        Route::get('/form-member-edit', 'MemberCG@edit')->name('Member.edit');
        Route::post('/member-edit','MemberCG@update')->name('Member.update');
        Route::get('/member-detail', 'MemberCG@detail')->name('Member.detail');
        Route::get('/member-delete/{id}', 'MemberCG@deleteMember')->name('Member.delete');
    });

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
        Route::get('/export-white-tag','Tagging@exportTaggingList')->middleware(['isAdmin'])->name('exportTaggingList');
        Route::get('/tagging-print','Tagging@taggingPrint')->middleware(['isAdmin'])->name('taggingPrint');
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
        Route::get('/white-tag-json', 'WhiteTag@whiteTagJson')->name('memberJson');
        Route::get('/white-tag-all-json', 'WhiteTag@whiteTagAll')->name('whiteTagAll');
        Route::get('/white-tag-all-export','WhiteTag@exportWhiteTagAll')->middleware(['isAdmin'])->name('exportWhiteTagAll');
        Route::get('/form','WhiteTag@formWhiteTag')->name("formWhiteTag");
        Route::post('/action','WhiteTag@actionWhiteTag')->name("actionWhiteTag");
        Route::get('/detail', 'WhiteTag@detailWhiteTag')->name('detailWhiteTag');
    });

    //CEME
    Route::get('/ceme', 'Ceme@index')->name('ceme');
    Route::get('/ceme?q=all', 'Ceme@index')->name('ceme.all');
    Route::get('/ceme/json','Ceme@cgJson')->name('ceme.json');
    Route::get('/ceme/json/all','Ceme@cgJsonAll')->name('ceme.json.all');
    Route::post('/ceme-post', 'Ceme@actionCeme')->name('actionCeme');
    Route::post('ceme/add-job-title','Ceme@addJobTitle')->name('ceme.addJobTitle');
    Route::post('ceme/get-job-title','Ceme@getJobTitle')->name('ceme.getJobTitle');
    Route::post('ceme/delete-job-title','Ceme@deleteJobTitle')->name('ceme.deleteJobTitle');


    Route::prefix("grade")->group(function () {
        Route::get('/', 'Grade@index')->name('Grade');
        Route::post('/grade-post', 'Grade@store')->name('Grade.post');
        Route::get('/form-edit-Grade', 'Grade@getFormEditGrade')->name('getFormEditGrade');
        Route::post('/grade-edit', 'Grade@editGrade')->name('editGrade');
        Route::get('/grade-delete/{id}', 'Grade@delete')->name('Grade.delete');
    });


    Route::prefix("skill-categoty")->group(function () {
        Route::get('/', 'SkillCategory@index')->name('SkillCategory');
        Route::post('/create','SkillCategory@store')->name('SkillCategory.store');
        Route::post('/delete', 'SkillCategory@delete')->name('SkillCategory.delete');
    });

    Route::prefix("cg-master")->group(function () {
        Route::get('/', 'CGMaster@index')->name('CG');
        Route::post('/create', 'CGMaster@store')->name('CG.post');
        Route::post('/delete','CGMaster@destroy')->name('CG.destroy');
        // Route::get('/form-edit', 'CGMaster@FormEditCGMaster')->name('getFormEditCGMaster');
        // Route::post('/edit', 'CGMaster@editCGMaster')->name('editCGMaster');
        // Route::get('/delete/{id}', 'CGMaster@delete')->name('CGMaster.delete');
    });

    // jabatan/job title
    Route::get('jabatan/get','JabatanController@get')->name('jabatan.get');

    // department
    Route::prefix("department")->group(function () {
        Route::get('/', 'DepartmentController@index')->name('department.index');
        Route::post('/create', 'DepartmentController@store')->name('department.store');
        Route::post('/delete','DepartmentController@destroy')->name('department.destroy');
    });

    // divisi
    Route::prefix("divisi")->group(function () {
        Route::get('/', 'DivisiController@index')->name('divisi.index');
        Route::post('/create', 'DivisiController@store')->name('divisi.store');
        Route::post('/delete','DivisiController@destroy')->name('divisi.destroy');
    });

});
