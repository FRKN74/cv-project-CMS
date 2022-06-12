<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Back\backController;
use App\Http\Controllers\Back\profilController;
use App\Http\Controllers\Back\hakkimdaController;
use App\Http\Controllers\Back\hizmetController;
use App\Http\Controllers\Back\referancesController;
use App\Http\Controllers\Back\egitimController;
use App\Http\Controllers\Back\tecrubeController;
use App\Http\Controllers\Back\iletisimController;
use App\Http\Controllers\Back\kategoriController;
use App\Http\Controllers\Back\projeController;
;








use App\Http\Controllers\Front\indexController;


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
Route::get('/',[indexController::class,'index'])->name('index');
Route::get('/{slug}',[indexController::class,'index2'])->name('index2');

Route::get('/portfolio/{slug}',[indexController::class,'protfoy'])->name('protfoy');
Route::get('/portfolio-2',[indexController::class,'protfoy2'])->name('protfoy2');
Route::get('/portfolio-3',[indexController::class,'protfoy3'])->name('protfoy3');
Route::get('/blog-post',[indexController::class,'blogpost'])->name('blogpost');





Route::middleware('isLogin')->group(function (){

    Route::get('/giris',[adminController::class,'login'])->name('login');
    Route::post('/giris',[adminController::class,'loginPost'])->name('login.post');
});



/* Admnin  */

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function (){
    
    Route::get('/',[backController::class,'dashboard'])->name('dashboard');
    
    Route::prefix('profil')->name('profil.')->group(function () {
        
        Route::get('/{slug}',[profilController::class,'profil'])->name('profil');
        Route::post('/{slug}',[profilController::class,'profilDetay'])->name('detay');

    });

    Route::prefix('hakkimda')->name('hakkimda.')->group(function () {
        
        Route::get('/{slug}',[hakkimdaController::class,'hakkimda'])->name('hakkimda');
        Route::post('/{slug}',[hakkimdaController::class,'hakkimdaDetay'])->name('detay');

    });

    Route::prefix('hizmetler')->name('hizmet.')->group(function () {
        
        Route::get('/olustur',[hizmetController::class,'create'])->name('create');
        Route::post('/olustur',[hizmetController::class,'createPost'])->name('create.post');
        Route::get('/list',[hizmetController::class,'list'])->name('list');
        Route::get('/güncelle/{id}',[hizmetController::class,'update'])->name('update');
        Route::post('/güncelle/{id}',[hizmetController::class,'updatePost'])->name('update.post');
        Route::get('/sil/{id}',[hizmetController::class,'delete'])->name('delete');

    });

    Route::prefix('referans')->name('referans.')->group(function () {
        
        Route::get('/olustur',[referancesController::class,'create'])->name('create');
        Route::post('/olustur',[referancesController::class,'createPost'])->name('create.post');
        Route::get('/list',[referancesController::class,'list'])->name('list');
        Route::get('/güncelle/{id}',[referancesController::class,'update'])->name('update');
        Route::post('/güncelle/{id}',[referancesController::class,'updatePost'])->name('update.post');
        Route::get('/sil/{id}',[referancesController::class,'delete'])->name('delete');

    });

    Route::prefix('egitim')->name('egitim.')->group(function () {
        
        Route::get('/olustur',[egitimController::class,'create'])->name('create');
        Route::post('/olustur',[egitimController::class,'createPost'])->name('create.post');
        Route::get('/list',[egitimController::class,'list'])->name('list');
        Route::get('/güncelle/{id}',[egitimController::class,'update'])->name('update');
        Route::post('/güncelle/{id}',[egitimController::class,'updatePost'])->name('update.post');
        Route::get('/sil/{id}',[egitimController::class,'delete'])->name('delete');

    });

    Route::prefix('tecrübe')->name('tecrube.')->group(function () {
        
        Route::get('/olustur',[tecrubeController::class,'create'])->name('create');
        Route::post('/olustur',[tecrubeController::class,'createPost'])->name('create.post');
        Route::get('/list',[tecrubeController::class,'list'])->name('list');
        Route::get('/güncelle/{id}',[tecrubeController::class,'update'])->name('update');
        Route::post('/güncelle/{id}',[tecrubeController::class,'updatePost'])->name('update.post');
        Route::get('/sil/{id}',[tecrubeController::class,'delete'])->name('delete');

    });
    Route::prefix('kategori')->name('kategori.')->group(function () {
        
        Route::get('/olustur',[kategoriController::class,'create'])->name('create');
        Route::post('/olustur',[kategoriController::class,'createPost'])->name('create.post');
        Route::get('/list',[kategoriController::class,'list'])->name('list');
        Route::get('/güncelle/{id}',[kategoriController::class,'update'])->name('update');
        Route::post('/güncelle/{id}',[kategoriController::class,'updatePost'])->name('update.post');
        Route::get('/sil/{id}',[kategoriController::class,'delete'])->name('delete');

    });

    Route::prefix('proje')->name('proje.')->group(function () {
        
        Route::get('/olustur',[projeController::class,'create'])->name('create');
        Route::post('/olustur',[projeController::class,'createPost'])->name('create.post');
        Route::get('/list',[projeController::class,'list'])->name('list');
        Route::get('/güncelle/{id}',[projeController::class,'update'])->name('update');
        Route::post('/güncelle/{id}',[projeController::class,'updatePost'])->name('update.post');
        Route::get('/sil/{id}',[projeController::class,'delete'])->name('delete');

    });





   

    Route::prefix('iletisim')->name('iletisim.')->group(function () {
        
        Route::get('/{slug}',[iletisimController::class,'ilet'])->name('ilet');
        Route::post('/{slug}',[iletisimController::class,'iletDetay'])->name('detay');

    });


    Route::get('/logout',[adminController::class,'logOut'])->name('logout');


});