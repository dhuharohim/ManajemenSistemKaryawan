<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\FormEmployment;
use App\Http\Controllers\FormPersonal;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PersonalDataController;
use App\Models\Employment;

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

Route::get('/', function () {
    return redirect(route('home'));
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [HomeController::class, 'user'])->name('user');



Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blank', function () {
    return view('blank');
})->name('blank');

Route::get('/transaction/history', [TransactionController::class, 'index'])->name('transaction.history');
Route::get('/transaction/new', [TransactionController::class, 'create'])->name('transaction.new');

Route::get('/partner', [PartnerController::class, 'index'])->name('partner');

Route::get('/employment', [EmploymentController::class, 'index'])->name('employment');
Route::get('/employment-form/upload', [EmploymentController::class, 'create'])->name('employment-form.upload');
Route::post('/employment-form/update/{eid}', [EmploymentController::class, 'update'])->name('employment-form.update');
Route::get('/employment-form/edit/{eid}', [EmploymentController::class, 'edit'])->name('employment-form.edit');
Route::get('/employment-form/info/{eid}', [EmploymentController::class, 'info'])->name('employment-form.info');

Route::get('/employment-form/delete/{eid}', [EmploymentController::class, 'destroy'])->name('employment-form.delete');

Route::post('/employment-form/store', [EmploymentController::class, 'store'])->name('employment-form.store');


Route::get('/attendance',[AttendanceController::class, 'index'])->name('attendance');
Route::get('/attendance-form/excuse', [AttendanceController::class, 'create'])->name('attendance-form.excuse');
Route::post('/attendance-form/excuse/store', [AttendanceController::class, 'excuses'])->name('attendance-form.store');

Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store');

Route::get('/form-payroll/{eid}',[EmploymentController::class, 'formpayroll'])->name('form.payroll');
Route::post('form-payroll/store',[EmploymentController::class, 'sendpayroll'])->name('send.payroll');

Route::get('/attendance-user',[AttendanceController::class, 'indexuser'])->name('attendance.user');
Route::post('/attendance-user/store', [AttendanceController::class, 'storeuser'])->name('attendance-user.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/attendance-user/punchout', [AttendanceController::class, 'punchout'])->name('punchout');

Route::get('/employment-user',[EmploymentController::class, 'indexuser'])->name('employment-user');

Route::get('/employment-user/info/{eid}', [EmploymentController::class, 'infouser'])->name('employment-info.user');
Route::post('/employment-user/update/{eid}', [EmploymentController::class, 'updateuser'])->name('employment-user.update');
Route::get('/employment-user/edit/{eid}', [EmploymentController::class, 'edituser'])->name('employment-user.edit');
Route::get('/employment-user/upload', [EmploymentController::class, 'createuser'])->name('employment-user.upload');

Route::post('/employment-user/store', [EmploymentController::class, 'storeuser'])->name('employment-user.store');