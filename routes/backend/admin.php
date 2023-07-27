<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

Route::get('post', [DashboardController::class, 'listPost'])->name('post.list');
Route::get('post/create', [DashboardController::class, 'createPost'])->name('post.create');
Route::get('post/edit/{id}', [DashboardController::class, 'editPost'])->name('post.edit');

Route::post('post/store', [DashboardController::class, 'storePost'])->name('post.store');
Route::post('post/update', [DashboardController::class, 'updatePost'])->name('post.update');

Route::get('page/content', [DashboardController::class, 'pageContent'])->name('page.content');
Route::post('page/update', [DashboardController::class, 'storePageContent'])->name('page.store');
