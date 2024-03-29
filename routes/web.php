<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
Auth::routes();
Route::get('/', function () {
return view('dashboard');
});


Route::group(['middleware'=>['auth'],],
    function (){
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

        Route::resource('grade','App\Http\Controllers\GradeController');
        Route::resource('class_room','App\Http\Controllers\ClassRoomController');

        Route::resource('section','App\Http\Controllers\SectionController');


        Route::view('test','livewire.show-posts');

        Route::resource('parent','App\Http\Controllers\MyParentController');

        Route::resource('teacher','App\Http\Controllers\TeacherController');

        Route::resource('student','App\Http\Controllers\StudentController');



    });


});
