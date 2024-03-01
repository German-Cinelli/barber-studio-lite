<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LogoutController;

//use App\Livewire\Frontend\WelcomeComponent;

//use App\Livewire\Frontend\AppointmentCreateComponent as FrontendAppointmentCreateComponent;

//use App\Livewire\Frontend\ProfileComponent;



/**
 * dashboard routes
 */
use App\Livewire\Dashboard\HomeComponent;

use App\Livewire\Dashboard\AppointmentComponent;

use App\Livewire\Dashboard\BoardComponent;

use App\Livewire\Dashboard\CategoryComponent;

use App\Livewire\Dashboard\EmployeeComponent;
use App\Livewire\Dashboard\EmployeeEditComponent;

use App\Livewire\Dashboard\ServiceComponent;
use App\Livewire\Dashboard\ServiceEditComponent;

use App\Livewire\Dashboard\UserComponent;






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

//Route::view('/', 'welcome');
Route::get('/', function () {
    return view('welcome');
});

/*Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');*/

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['role:Admin']], function () {
        Route::get('/dashboard', HomeComponent::class)->name('dashboard');

        Route::get('/dashboard/appointments', AppointmentComponent::class)->name('dashboard.appointments');

        Route::get('/dashboard/board', BoardComponent::class)->name('dashboard.board');

        Route::get('/dashboard/categories', CategoryComponent::class)->name('dashboard.categories');

        Route::get('/dashboard/employees', EmployeeComponent::class)->name('dashboard.employees');
        Route::get('/dashboard/employees/{id}/edit', EmployeeEditComponent::class)->name('dashboard.employees.edit');

        Route::get('/dashboard/services', ServiceComponent::class)->name('dashboard.services');
        Route::get('/dashboard/services/{id}/edit', ServiceEditComponent::class)->name('dashboard.services.edit');

        Route::get('/dashboard/users', UserComponent::class)->name('dashboard.users');
    });
});




