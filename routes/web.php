<?php

use App\Livewire\Users\UserAdd;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', UserList::class)->name('users.list');
Route::get('/users/add', UserAdd::class)->name('users.add');
Route::get('/users/edit/{user}', UserEdit::class)->name('users.edit');
