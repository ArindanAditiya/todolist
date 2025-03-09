<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\Todo\TodoController;

Route::get('/welcomeBlade', function () {
    return view('welcome');
});

Route::get('/halo', [HaloController::class, "index"]);

Route::get("/todo", [TodoController::class, "index"])->name("todo");
Route::post("/todo", [TodoController::class, "store"])->name("todo.post");
Route::put("/todo/{id}", [TodoController::class, "update"]);
