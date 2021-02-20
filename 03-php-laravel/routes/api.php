<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SettingsmController;
use App\Http\Controllers\SettingsdController;
use App\Http\Controllers\ProfilemController;
use App\Http\Controllers\ProfiledController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SubmitController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('settingsm', 'SettingsmController');
// Route::apiResource('settingsd', 'SettingsdController');

// Route::apiResource('profilem', 'ProfilemController');
// Route::apiResource('profiled', 'ProfiledController');

// Route::apiResource('forum', 'ForumController');
// Route::apiResource('review', 'TaskController');

//API-Schedules
Route::get('profilem/sche/{id}', [ProfilemController::class, 'index']);
Route::put('profilem/sche/edit/{id}', [ProfilemController::class, 'update']);
Route::post('profilem/sche/new',  [ProfilemController::class, 'store']);
Route::get('profilem/sche/show/{id}', [ProfilemController::class, 'show']);
Route::delete('profilem/sche/del/{id}', [ProfilemController::class, 'destroy']);

//API-Tasks
Route::get('/tasks', [TaskController::class, 'get']);
Route::get('/tasks/{id}', [TaskController::class, 'getById']);
Route::post('/tasks', [TaskController::class, 'post']);
Route::put('/tasks/{id}', [TaskController::class, 'put']);
Route::delete('/tasks/{id}', [TaskController::class, 'delete']);

//API-Users
Route::post('users/auth', [PagesController::class, 'authenticating']);
Route::get('users/show/{id}', [PagesController::class, 'show']);
Route::get('users/logout', [PagesController::class, 'userlogout']);
Route::put('users/settingsm/password/edit/{id}', [SettingsmController::class, 'editpass']);

//API-Index Page
Route::get('index/{id}', [PagesController::class, 'index']);

//API-Artifaccts
Route::get('settingsd/artifacts/show/{id}', [SettingsdController::class, 'show']);
Route::put('settingsd/artifacts/edit/{id}', [SettingsdController::class, 'update']);
Route::get('settingsd/artifacts', [SettingsdController::class, 'index']);
Route::delete('settingsd/artifacts/delete/{id}', [SettingsdController::class, 'destroy']);

//API-Scores
Route::get('scores', [GradeController::class, 'index']);
Route::put('scores/edit/{id}', [GradeController::class, 'updatescore']);
Route::post('scores/addscore',  [GradeController::class, 'store']);
Route::get('scores/{id}', [GradeController::class, 'show']);
Route::delete('scores/delete/{id}', [GradeController::class, 'destroy']);

//API-Forums
Route::get('/forum', [ForumController::class, 'get']);
Route::get('/forum/{id}', [ForumController::class, 'getById']);
Route::post('/forum', [ForumController::class, 'post']);
Route::put('/forum/{id}', [ForumController::class, 'put']);
Route::delete('/forum/{id}', [ForumController::class, 'delete']);

//API-Reviews
Route::get('review', [ReviewController::class, 'index']);
Route::get('review/{id}',  [ReviewController::class, 'show']);
Route::post('addreview',  [ReviewController::class, 'store']);

//API-Team
Route::get('/team', [TeamController::class, 'get']);
Route::get('/team/{id}', [TeamController::class, 'getById']);
Route::post('/team', [TeamController::class, 'post']);
Route::put('/team/edit/{id}', [TeamController::class, 'put']);
Route::delete('/team/delete/{id}', [TeamController::class, 'delete']);

//API-Submit
Route::post('/submit', [SubmitController::class, 'post']);

//API-Upload
Route::get('/upload', [UploadController::class, 'get']);
Route::get('/upload/{id}', [UploadController::class, 'getById']);
