<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name("aboutus");

Route::get('/contactus', function () {
    return view('contactus');
})->name("contactus");
Route::get('/services', function () {
    return view('services');
})->name("services");
Route::get('/pinaka', function () {
    return view('pinaka');
})->name("pinaka");


Route::name('navbar')->group(function () {
    Route::get('/welcome', function () {
       return view("welcome");
    })->name('welcome');
    Route::get('/aboutus', function () {
       return view("aboutus");
    })->name('aboutus');
    Route::get('/contactus', function () {
       return view("contactus");
    })->name('contactus');
    Route::get('/services', function () {
        return view("services");
     })->name('services');
     Route::get('/pinaka', function () {
        return view('pinaka');
    })->name("pinaka");
     

});
Route::name('services')->group(function () {
    Route::get('/service1', function () {
       return view("service1");
    })->name('service1');
    Route::get('/service2', function () {
       return view("service2");
    })->name('service2');
    Route::get('/service3', function () {
       return view("service3");
    })->name('service3');
});


//for login
Route::get('/login', [AuthManager::class, 'login'])->name ('login'); 
Route::post('/login', [AuthManager::class, 'loginPost']);
//for registration
Route::get('/registration', [AuthManager::class, 'registration'])->name ('registration'); 
Route::post('/login', [AuthManager::class, 'registrationPost'])->name ('registration.post'); 
Route::get('/logout',[AuthManager::class,'logout'])->name('logout');

