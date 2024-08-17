<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


// Admin-only Routes
Route::middleware(['auth','role:admin'])->group(function () {
    Route::resource('projects', ProjectController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('users', UserController::class)->except(['edit', 'update', 'show']);
});

// User Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $myTasks = \App\Models\Task::where('assigned_to', Auth::id())->get();
        $myProjects = \App\Models\Project::whereHas('tasks', function($query) {
            $query->where('assigned_to', Auth::id());
        });
        return view('users.dashboard', compact('myTasks', 'myProjects'));
    })->name('dashboard');
    Route::get('profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
    Route::put('profile/update', [UserController::class,'updateProfile'])->name('profile.update');

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::resource('tasks', TaskController::class)->only(['index', 'show']);
    Route::resource('projects', ProjectController::class)->only(['index', 'show']);

    // Allow users to edit their own profile


});





