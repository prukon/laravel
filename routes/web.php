<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//        Route::get('/test', function () {
//            return view('welcome');
//        });

//Route::get('/test','MyPlaceController@index');

//use App\Http\Controllers\MyPlaceController;
//Route::get('/test', [MyPlaceController::class,'index']);

// Action-синтаксис (не забудьте импортировать класс контроллера)

use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;


Route::get('/posts', [PostController::class, 'index' ])->name('post.index');
Route::get('/post/create', [PostController::class, 'create' ]);
Route::get('/post/update', [PostController::class, 'update' ]);
Route::get('/post/delete', [PostController::class, 'delete' ]);
Route::get('/post/first_or_create', [PostController::class, 'firstOrCreate' ]);
Route::get('/post/update_or_create', [PostController::class, 'updateOrCreate' ]);

Route::get('/about', [AboutController::class, 'index' ])->name('about.index');
Route::get('/contacts', [ContactsController::class, 'index' ])->name('contact.index');
Route::get('/main', [MainController::class, 'index' ])->name('main.index');
