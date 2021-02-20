<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfilemController;
use App\Http\Controllers\ProfiledController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SettingsmController;
use App\Http\Controllers\SettingsdController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\UploadController;


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

Route::get('/', [PagesController::class, 'login']);
Route::post('/auth', [PagesController::class, 'auth']);
Route::get('/logout', [PagesController::class, 'logout']);

Route::get('/index' , [PagesController::class, 'home']);
Route::get('/indexd' , [PagesController::class, 'homed']);
Route::get('/indexk' , [PagesController::class, 'homek']);

Route::get('artefak/public' , [PagesController::class, 'publicarct']);
Route::get('/artefak' , [PagesController::class, 'artefak']);
Route::get('/artefakd' , [PagesController::class, 'artefakd']);
Route::get('/artefak/view/{id}' , [PagesController::class, 'view']);
Route::get('/artefak/search' , [PagesController::class, 'search']);
Route::get('/artefak/searchd' , [PagesController::class, 'searchd']);
Route::get('/artefak/searchp' , [PagesController::class, 'searchp']);

Route::get('/events',  [EventController::class, 'event']);
Route::post('/events/addevent',  [EventController::class, 'addevent']);
Route::get('/events/details',  [EventController::class, 'details']);
Route::get('/events/edit/{id}',  [EventController::class, 'edit']);
Route::get('/events/delete/{id}',  [EventController::class, 'delete']);
Route::post('/events/update',  [EventController::class, 'update']);

Route::get('/settingsd', [SettingsdController::class, 'settings']);
Route::get('/artifactsd/search', [SettingsdController::class, 'search']);
Route::get('/artifacts/editviewpublic/{id}',  [SettingsdController::class, 'editviewpub']);
Route::get('/artifacts/editviewprivate/{id}',  [SettingsdController::class, 'editviewpri']);
Route::get('/artifacts/delete/{id}',  [SettingsdController::class, 'delete']);
Route::get('/settingsd/password/edit/{id}',  [SettingsdController::class, 'edit']);
Route::post('/settingsd/password/update',  [SettingsdController::class, 'updatepass']);
Route::get('/settingsd/password/cancel',  [SettingsdController::class, 'cancel']);

Route::get('/settingsm', [SettingsmController::class, 'settings']);
Route::get('/artifacts/search', [SettingsmController::class, 'search']);
Route::get('/settingsm/password/edit/{id}',  [SettingsmController::class, 'edit']);
Route::post('/settingsm/password/update',  [SettingsmController::class, 'updatepass']);


Route::get('/addscore', [GradeController::class, 'grade']);
Route::post('/scores/addscore',  [GradeController::class, 'addgrade']);
Route::get('/scores',  [GradeController::class, 'score']);
Route::get('/scores/delete/{id}',  [GradeController::class, 'delete']);
Route::get('/scores/edit/{id}',  [GradeController::class, 'edit']);
Route::post('/scores/update',  [GradeController::class, 'update']);
Route::get('/score/cancel',  [GradeController::class, 'cancel']);

Route::get('/progress', function () {
    return view('progress');
});

Route::get('/upload', [UploadController::class, 'home']);

Route::get('/submit',  [SubmitController::class, 'submit']);
Route::post('/addsubmit',  [SubmitController::class, 'addsubmit'])->name('addsubmit');

Route::get('/team',  [TeamController::class, 'team']);
Route::get('/team/create',  [TeamController::class, 'crTeam']);
Route::get('/team/sup/create',  [TeamController::class, 'crSup']);
Route::get('/team/ex/create',  [TeamController::class, 'crEx']);
Route::post('/addTeam',  [TeamController::class, 'addTeam']);
Route::post('/addSup',  [TeamController::class, 'addSup']);
Route::post('/addExam',  [TeamController::class, 'addExa']);
Route::get('/team/edit/{id}',  [TeamController::class, 'edit']);
Route::get('/sup/edit/{id}',  [TeamController::class, 'supedit']);
Route::get('/ex/edit/{id}',  [TeamController::class, 'exedit']);
Route::get('/team/delete/{id}',  [TeamController::class, 'deleteTeam']);
Route::get('/sup/delete/{id}',  [TeamController::class, 'deleteSup']);
Route::get('/ex/delete/{id}',  [TeamController::class, 'deleteEx']);
Route::post('/team/update',  [TeamController::class, 'update']);
Route::post('/sup/update',  [TeamController::class, 'updateSup']);
Route::post('/ex/update',  [TeamController::class, 'updateEx']);

Route::get('/mTeam', function () {
    return view('mTeam');
});

Route::get('/forum',  [ForumController::class, 'forum']);
Route::get('/forum/create',  [ForumController::class, 'formForum']);
Route::post('/addForum',  [ForumController::class, 'addForum']);
Route::get('/mForum',  [ForumController::class, 'mForum']);
Route::get('/forum/diskusi',  [ForumController::class, 'diskusi']);
Route::get('/forum/diskusi/comment',  [ForumController::class, 'comment']);
Route::post('/addComment',  [ForumController::class, 'addComment']);

Route::get('/messages',  [MessagesController::class, 'messages']);
Route::get('/messagesd', function () {
    return view('messagesd');
});
Route::post('/sendMessages',  [MessagesController::class, 'sendMessages']);
Route::get('/messages/contacts/search', [MessagesController::class, 'search']);

Route::get('/profilem',  [ProfilemController::class, 'profilem']);
Route::get('/profilem/edit/{id}',  [ProfilemController::class, 'edit']);
Route::get('/profilem/delete/{id}',  [ProfilemController::class, 'delete']);
Route::post('/profilem/updateweb',  [ProfilemController::class, 'updateweb']);
Route::post('/profilem/addeventm',  [ProfilemController::class, 'addeventm']);

Route::get('/profiled',  [ProfiledController::class, 'profiled']);
Route::get('/profiled/edit/{id}',  [ProfiledController::class, 'edit']);
Route::get('/profiled/delete/{id}',  [ProfiledController::class, 'delete']);
Route::post('/profiled/updateweb',  [ProfiledController::class, 'updateweb']);
Route::post('/profiled/addeventd',  [ProfiledController::class, 'addeventd']);

Route::get('/addForum', function () {
    return view('addForum');
});

Route::get('/addTeam', function () {
    return view('addTeam');
});

Route::get('/addJadwal',  [JadwalController::class, 'addJadwal']);
Route::post('/jadwalProses',  [JadwalController::class, 'jadwalProses']);

Route::get('/listTask', function () {
    return view('listTask');
});
Route::get('/task/edit/{id}',  [TaskController::class, 'edit']);
Route::post('/task/update',  [TaskController::class, 'update']);
Route::get('/task',  [TaskController::class, 'task']);
Route::post('/addtask',  [TaskController::class, 'addtask']);
Route::get('/task/delete/{id}',  [TaskController::class, 'deletetask']);

Route::get('/reviewdoc', function () {
    return view('reviewdoc');
});
Route::get('/review/view/{id}' , [ReviewController::class, 'view']);
Route::get('/review',  [ReviewController::class, 'review']);
Route::post('/addreview',  [ReviewController::class, 'addreview']);
