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
    Route::get('dashboard' , 'dashboard')->name('dashboard');
    Route::prefix('schoole')->name('schoole.')->group(function(){
        Route::get('index' , Index::class)->name('index');
        Route::get('add' , Add::class)->name('add');
        Route::get('edit' , Edit::class);
    });
    Route::prefix('departmint')->name('departmint')->group(function(){
        Route::get('index' , DapartmentIndex::class)->name('index');
        Route::get('add' , DapartmentAdd::class)->name('add');
        Route::get('edit' , DapartmentEdit::class)->name('edit');
    });
    Route::prefix('contract')->name('contract')->group(function(){
        Route::get('index' , CantractIndex::class)->name('index');
        Route::get('add' , CantractAdd::class)->name('add');
        Route::get('edit' , CantractEdit::class)->name('edit');
    });
    Route::prefix('emploeey')->name('emploeey')->group(function(){
        Route::get('add' , EmploeeAdd::class)->name('add');
        Route::get('index' , EmploeeIndex::class)->name('index');
        Route::get('edit', EmploeeEdit::class)->name('edit');
    });
    Route::prefix('payment')->name('payments')->group(function(){
        Route::get('index' , PaymentIndex::class)->name('index');
        Route::get('add' , PaymentAdd::class)->name('add');
        Route::get('edit' , PaymentEdit::class)->name('edit');
    });
   
});


Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function(){
    Route::view("cantract" , 'livewire.cantract.index');
    Route::view('department' , 'livewire.dapartment.index');
    Route::view('designation' , 'livewire.designation.index');
    Route::view('employee' , 'livewire.emploee.index');
    Route::view('payment' , 'livewire.payment.index');
    Route::view('payroll' , 'livewire.payroll.index');
    Route::view('school' , 'livewire.school.index');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
