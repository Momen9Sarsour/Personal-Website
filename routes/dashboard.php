<?php

use App\Http\Controllers\Dashboaed\DashboardController;
use App\Http\Controllers\Dashboaed\EducationController;
use App\Http\Controllers\Dashboaed\ExperienceController;
use App\Http\Controllers\Dashboaed\LanguageController;
use App\Http\Controllers\Dashboaed\ProjectController;
use App\Http\Controllers\Dashboaed\SkillController;
use Illuminate\Support\Facades\Route;



Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');

    // Route::get('/experiences',[DashboardController::class, 'experiences'])->name('experiences');
    Route::resource('/experiences',ExperienceController::class);

    // Route::get('/educations',[DashboardController::class, 'educations'])->name('educations');
    Route::resource('/educations',EducationController::class);

    // Route::get('/skills',[DashboardController::class, 'skills'])->name('skills');
    Route::resource('skills', SkillController::class);

    // Route::get('/languages',[DashboardController::class, 'languages'])->name('languages');
    Route::resource('languages', LanguageController::class);

    // Route::get('/projects',[DashboardController::class, 'projects'])->name('projects');
    Route::resource('projects', ProjectController::class);

    Route::get('/messages',[DashboardController::class, 'messages'])->name('messages');
    Route::get('/messages/show/{message}',[DashboardController::class, 'messages_show'])->name('messages.show');
    
    Route::get('/settings',[DashboardController::class, 'settings'])->name('settings');
    Route::put('/settings',[DashboardController::class, 'settings_save']);

});

