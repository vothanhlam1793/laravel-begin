<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use UniSharp\LaravelFilemanager\Controllers\LfmController;
use App\Http\Controllers\FileUploadController;

use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Models\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', function() {
    $tasks = \App\Models\Task::all();
    return view('task', compact('tasks'));
});

Route::get('/cTask', function() {
    return view('createTask');
});

Route::resource('tasks', TaskController::class);

Route::get('/tlug/{slug}', function($slug){
    $task = Task::where('slug', $slug)->orWhereHas('slugHistories', function ($query) use ($slug) {
        $query->where('old_slug', $slug);
    })->first();
    if (!$task) {
        abort(404); // Task không tồn tại, hiển thị trang 404   
    }   
    return view('tasks.show', compact('task'));
});

Route::get('/tasks/{id}/edit', 'TaskController@edit')->name('tasks.editForm');



Route::get('/upload', [FileUploadController::class, 'index'])->name('upload.index');
Route::post('/upload', [FileUploadController::class, 'upload'])->name('upload.upload');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');


// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });