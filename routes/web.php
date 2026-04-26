<?php

use App\Livewire\Cantract\Add as CantractAdd;
use App\Livewire\Cantract\Edit as CantractEdit;
use App\Livewire\Cantract\Index as CantractIndex;
use App\Livewire\Dapartment\Add as DapartmentAdd;
use App\Livewire\Dapartment\Edit as DapartmentEdit;
use App\Livewire\Dapartment\Index as DapartmentIndex;
use App\Livewire\Designation\Add as DesignationAdd;
use App\Livewire\Designation\Edit as DesignationEdit;
use App\Livewire\Designation\Index as DesignationIndex;
use App\Livewire\Emploee\Add as EmploeeAdd;
use App\Livewire\Emploee\Edit as EmploeeEdit;
use App\Livewire\Emploee\Index as EmploeeIndex;
use App\Livewire\Payment\Add as PaymentAdd;
use App\Livewire\Payment\Edit as PaymentEdit;
use App\Livewire\Payment\Index as PaymentIndex;
use App\Livewire\Payroll\Add as PayrollAdd;
use App\Livewire\Payroll\Edit as PayrollEdit;
use App\Livewire\Payroll\Index as PayrollIndex;
use App\Livewire\School\Add;
use App\Livewire\School\Edit;
use App\Livewire\School\Index;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth' , 'verified'])->group(function(){
    Route::view('dashboard' , 'dashboard')->name('dashboard');
    Route::prefix('schoole')->name('school.')->group(function(){
        Route::get('/' , Index::class)->name('index');
        Route::get('add' , Add::class)->name('add');
        Route::get('{id}/edit' , Edit::class)->name('edit');
    });
    Route::prefix('departmint')->name('departmint.')->group(function(){
        Route::get('/' , DapartmentIndex::class)->name('index');
        Route::get('add' , DapartmentAdd::class)->name('add');
        Route::get('{id}/edit' , DapartmentEdit::class)->name('edit');
    });
    Route::prefix('contract')->name('contract.')->group(function(){
        Route::get('/' , CantractIndex::class)->name('index');
        Route::get('add' , CantractAdd::class)->name('add');
        Route::get('{id}/edit' , CantractEdit::class)->name('edit');
    });
    Route::prefix('emploee')->name('emploee.')->group(function(){
        Route::get('/add' , EmploeeAdd::class)->name('add');
        Route::get('/' , EmploeeIndex::class)->name('index');
        Route::get('{id}/edit', EmploeeEdit::class)->name('edit');
    });
    Route::prefix('payment')->name('payments.')->group(function(){
        Route::get('/' , PaymentIndex::class)->name('index');
        Route::get('add' , PaymentAdd::class)->name('add');
        Route::get('{id}/edit' , PaymentEdit::class)->name('edit');
    });
    Route::prefix('payroll')->name('payroll.')->group(function(){
        Route::get('add' , PayrollAdd::class)->name('add');
        Route::get('/' , PayrollIndex::class)->name('index');
        Route::get('{id}/edit' , PayrollEdit::class)->name('edit');
    });
    Route::prefix('designation')->name('designation.')->group(function(){
        Route::get('/' , DesignationIndex::class)->name('index');
        Route::get('add' , DesignationAdd::class)->name('add');
        Route::get('{id}/edit' , DesignationEdit::class)->name('edit');
    });
});


// Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function(){
//     Route::view("cantract" , 'livewire.cantract.index');
//     Route::view('department' , 'livewire.dapartment.index');
//     Route::view('designation' , 'livewire.designation.index');
//     Route::view('employee' , 'livewire.emploee.index');
//     Route::view('payment' , 'livewire.payment.index');
//     Route::view('payroll' , 'livewire.payroll.index');
//     Route::view('school' , 'livewire.school.index');
// });

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
