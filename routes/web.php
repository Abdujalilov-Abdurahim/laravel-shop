<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;


Route::get("/", [ShopController::class, "index"])->name("main");
Route::get("contact", [ShopController::class, "contact"])->name("contact");
Route::get("about", [ShopController::class, "about"])->name("about");

Route::get("login", [AuthController::class,"login"])->name("login");
Route::post("authenticate", [AuthController::class,"authenticate"])->name("authenticate");
Route::post("logout", [AuthController::class,"logout"])->name("logout");
Route::get("register", [AuthController::class,"register"])->name("register");
Route::post("register", [AuthController::class,"register_store"])->name("register_store");


Route::resource("products", ProductController::class);
