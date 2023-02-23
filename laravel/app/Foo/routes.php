<?php

use App\Foo\FooController;
use Illuminate\Support\Facades\Route;

Route::get('/foo', FooController::class)->name('foo');
