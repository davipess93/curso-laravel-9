<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    Admin\CommentController
};

Route::post("/users/{id}/comments", [CommentController::class, "store"])->name("comments.store");
Route::get("/users/{id}/comments/create", [CommentController::class, "create"])->name("comments.create");
Route::get("/users/{id}/comments", [CommentController::class, "index"])->name("comments.index");

Route::delete("/users/{id}", [UserController::class, "delete"])->name("users.destroy");
Route::put("/users/{id}", [UserController::class, "update"])->name("users.update");
Route::get("/users/{id}/edit", [UserController::class, "edit"])->name("users.edit");
Route::get("/users", [UserController::class, "index"])->name("users.index");
Route::get("/users/create", [UserController::class, "create"])->name("users.create");
Route::post("/users", [UserController::class, "store"])->name("users.store");
Route::get("/users/{id}", [UserController::class, "show"])->name("users.show");

Route::get('/', function () {
    return view('welcome');
});
