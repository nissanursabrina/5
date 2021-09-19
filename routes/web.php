<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController; 
use App\Http\Controllers\WelcomeController; 
use App\Http\Controllers\PSController;
use App\Http\Controllers\SaranaController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/home', function(){
    return view('home');
});*/

Route::get('/', [HomeController::class,'home']);

/*Route::prefix('prodi')->group(function(){
    Route::get('/Manajemen_Informatika',function(){
        return "Manajemen Informatika";
    });
    Route::get('/Teknik_Informatika',function(){
        return "Teknik Informatika";
    });
});*/

Route::prefix('prodi')->group(function(){
    Route::get('/mi', [PSController::class, 'mi']);
    Route::get('/ti', [PSController::class, 'ti']);
});

Route::get('/news/{num_news}', [NewsController::class,'news']);

/*Route::prefix('sarana')->group(function(){
    Route::get('/kantor',function(){
        return "Perkantoran";
    });
    Route::get('/laboratorium',function(){
        return "Laboratorium";
    });
    Route::get('/kelas',function(){
        return "Kelas";
    });
    Route::get('/lainnya',function(){
        return "Lainnya";
    });
});*/

Route::prefix('sarana')->group(function(){
    Route::get('/kantor', [SaranaController::class, 'kantor']);
    Route::get('/laboratorium', [SaranaController::class, 'Laboratorium']);
    Route::get('/kelas', [SaranaController::class, 'kelas']);
    Route::get('/lainnya', [SaranaController::class, 'lainnya']);
});

Route::get('/about', [AboutController::class,'about']);

Route::get('/comment/{nama}/{pesan}', [CommentController::class,'comment']);

//Nissa Nursabrina_2031710029_22_MI2E//
//Minggu 2 Praktikum 3

Route::get('/hello', function(){
    return view('blog.hello', ['name' => 'Nissa']);
}); //global view helper

Use Illuminate\Support\Facades\View;
return View::make('blog.hello', ['name' => 'Nissa']);

Route::get('/hello', [WelcomeController::class, 'hello']); //lek wes dibuat controllernya

//buat jalankan child
Route::get('/profil', function(){
    return view(view. 'child');
});   

//Nissa Nursabrina_2031710029_22_MI2E//
//Minggu 3 Praktikum 1