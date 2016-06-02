<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => '/auth', 'middleware' => ['web']], function () {
        Route::post('/register', 'Auth\AuthController@postRegister');
        Route::post('/login', 'Auth\AuthController@loginUser');
});

Route::auth();
/*
 * This route belongs to dashboard
 */
Route::group(['prefix' => '/dashboard', 'middleware' => ['auth']], function () {

    Route::get('/', function(){
        return view('dashboard.index');
    });

    Route::get('/profile', function () {
        return view('dashboard.pages.view_myprofile');
    });

    Route::get('/download/cv', 'WorkExperienceController@downloadCV');
    
    Route::post('/work/create', 'WorkExperienceController@store');
    Route::post('/work/update/{id}', 'WorkExperienceController@updateWorkExperience');
    Route::get('/work/edit/{id}', 'WorkExperienceController@editWorkExperience');
    Route::get('/work/add', 'WorkExperienceController@getMyWorkExperience');
    Route::get('/work/delete/{id}', 'WorkExperienceController@deleteWorkExperience');
   
    Route::post('/academic/create', 'AcademicController@store');
    Route::post('/academic/update/{id}', 'AcademicController@updateMyAcademicProfile');
    Route::get('/academic/edit/{id}', 'AcademicController@editMyAcademicProfile');
    Route::get('/academic/add', 'AcademicController@getMyAcademicQualifications');
    Route::get('/academic/delete/{id}', 'AcademicController@deleteMyAcademicProfile');

    Route::post('/skill/create', 'SkillController@store');
    Route::post('/skill/update/{id}', 'SkillController@updateSkill');
    Route::get('/skill/add', 'SkillController@getMySkills');
    Route::get('/skill/edit/{id}', 'SkillController@editSkill');
    Route::get('/skill/delete/{id}', 'SkillController@deleteSkill');

    Route::get('/logout', 'Auth\AuthController@logUserOut');
    Route::post('/profile/update', 'UserController@updateProfile');
    Route::post('/picture/update', 'UserController@updateAvatar');

    Route::post('/upload/cv', 'FileUploaderController@uploadFileToLocalStorage');

});
