<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\StudentInsertController;
use App\Http\Controllers\studentupdatecontroller;
use App\Http\Controllers\studentviewcontroller;
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
//register
Route::view('register','auth.register');
Route::post('store',[RegisterController::class,'store']);

Route::view('home','home');
//login
Route::view('login','auth.login');
Route::post('authenticate',[LoginController::class,'authenticate']);

//list
Route::view('list','auth.list')->name('list');
Route::get('list',[StudentInsertController::class,'student_list']);

//delete 
Route::get('delete/{id}',[StudentInsertController::class,'delete']);

//view
Route::get('student/view/{id}',[studentviewcontroller::class,'view'])->name('users.view');

//delflag
Route::get('user/{id}',[studentviewcontroller::class,'update']);

//update
Route::get('users/{id}/edit',[studentupdatecontroller::class,'edit'])->name('users.edit');
Route::put('users/{id}',[studentupdatecontroller::class,'update'])->name('users.update');

//sort
Route::get('user.index', [StudentInsertController::class, 'index'])->name('user.index');


//email
Route::get('/contact', [contactcontroller::class, 'showContactForm'])->name('contact.form');
Route::post('/send-contact-mail', [contactcontroller::class, 'sendContactMail'])->name('send.contact.mail');
