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

/*
 * This route belongs to dashboard
 */
Route::group(['prefix' => '/dashboard', 'middleware' => ['web', 'auth']], function () {

    Route::get('/', function(){
        return view('dashboard.index');
    });

    Route::get('/profile', function () {
        return view('dashboard.pages.view_myprofile');
    });

    Route::get('/work/add', 'WorkExperienceController@getMyWorkExperience');
    Route::get('/academic/add', 'AcademicController@getMyAcademicQualifications');

    Route::get('/academic/edit/{id}', 'AcademicController@editMyAcademicProfile');
    Route::post('/academic/update/{id}', 'AcademicController@updateMyAcademicProfile');
    Route::get('/academic/delete/{id}', 'AcademicController@deleteMyAcademicProfile');
    Route::get('/skill/add', 'SkillController@getMySkills');

    Route::post('/academic/create', 'AcademicController@store');
    Route::post('/work/create', 'WorkExperienceController@store');
    Route::post('/skill/create', 'SkillController@store');

    Route::get('/logout', 'Auth\AuthController@logUserOut');
    Route::post('/profile/update', 'UserController@updateProfile');
    Route::post('/picture/update', 'UserController@updateAvatar');

    Route::auth();


});
