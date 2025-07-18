<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::get('/student/{id}', [HomeController::class, 'show'])->name('site.student.show');//


// admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::resource('admin/students', StudentController::class);
Route::resource('admin/skills', SkillController::class);//
Route::resource('admin/facts', FactController::class);//
Route::resource('admin/testimonials', TestimonialController::class);//


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
