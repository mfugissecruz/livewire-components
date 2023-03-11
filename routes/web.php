<?php

use App\Http\Livewire\Counter;
use App\Http\Livewire\TodoList;
use App\Http\Livewire\Calculator;
use App\Http\Livewire\ProductSearch;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CascadingDropdown;
use App\Http\Livewire\ImageUpload;
use App\Http\Livewire\RegisterForm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('counter', Counter::class)->name('counter');
Route::get('calculator', Calculator::class)->name('calculator');
Route::get('todo-list', TodoList::class)->name('todo-list');
Route::get('cascading-dropdown', CascadingDropdown::class)->name('cascading-dropdown');
Route::get('products', ProductSearch::class)->name('products');
Route::get('image-upload', ImageUpload::class)->name('image-upload');
Route::get('register', RegisterForm::class)->name('register');
