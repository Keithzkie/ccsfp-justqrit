<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Routes for Admin Test pages
Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.dashboard');

// New routes for Admin Records dropdown
Route::prefix('admin/records')->name('admin.records.')->middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::view('semester-grading', 'admin.records.semester-grading')->name('semester-grading');
    Route::view('course-grade-level', 'admin.records.course-grade-level')->name('course-grade-level');
    Route::view('faculty', 'admin.records.faculty')->name('faculty');
    Route::view('student', 'admin.records.student')->name('student');
    Route::view('cooperating-student', 'admin.records.cooperating-student')->name('cooperating-student');
});

// Routes for Admin Enrollment
Route::prefix('admin/enrollment')->name('admin.enrollment.')->middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::view('enrollment-form', 'admin.enrollment.enrollment-form')->name('enrollment-form');
    Route::view('list-enrolled', 'admin.enrollment.list-enrolled')->name('list-enrolled');
});

// Admin test page
Route::view('admin/test3', 'admin.test3')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.test3');

// Faculty pages
Route::view('faculty/dashboard', 'faculty.dashboard')
    ->middleware(['auth', 'verified', 'faculty'])
    ->name('faculty.dashboard');

Route::view('faculty/test1', 'faculty.test1')
    ->middleware(['auth', 'verified', 'faculty'])
    ->name('faculty.test1');

Route::view('faculty/test2', 'faculty.test2')
    ->middleware(['auth', 'verified', 'faculty'])
    ->name('faculty.test2');

Route::view('faculty/test3', 'faculty.test3')
    ->middleware(['auth', 'verified', 'faculty'])
    ->name('faculty.test3');

// Student pages
Route::view('student/dashboard', 'student.dashboard')
    ->middleware(['auth', 'verified', 'student'])
    ->name('student.dashboard');

Route::view('student/test1', 'student.test1')
    ->middleware(['auth', 'verified', 'student'])
    ->name('student.test1');

Route::view('student/test2', 'student.test2')
    ->middleware(['auth', 'verified', 'student'])
    ->name('student.test2');

Route::view('student/test3', 'student.test3')
    ->middleware(['auth', 'verified', 'student'])
    ->name('student.test3');

// General authenticated dashboard
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('test1', 'test1')
    ->middleware(['auth', 'verified'])
    ->name('test1');

Route::view('test2', 'test2')
    ->middleware(['auth', 'verified'])
    ->name('test2');

Route::view('test3', 'test3')
    ->middleware(['auth', 'verified'])
    ->name('test3');

// COMMENTED OUT LIVEWIRE SETTINGS ROUTES FOR NOW
// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');
//     Route::get('settings/profile', Profile::class)->name('settings.profile');
//     Route::get('settings/password', Password::class)->name('settings.password');
//     Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
// });

//require __DIR__.'/auth.php';
