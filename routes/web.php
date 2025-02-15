<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;


Route::get("/", [ShopController::class, "index"])->name("main");
Route::get("contact", [ShopController::class, "contact"])->name("contact");
Route::get("about", [ShopController::class, "about"])->name("about");
Route::get("ManUnd", [ShopController::class, "ManUnd"])->name("ManUnd");
Route::get("ManCity", [ShopController::class, "ManCity"])->name("ManCity");
Route::get("Liverpool", [ShopController::class, "Liverpool"])->name("Liverpool");

Route::get("login", [AuthController::class,"login"])->name("login");
Route::post("authenticate", [AuthController::class,"authenticate"])->name("authenticate");
Route::post("logout", [AuthController::class,"logout"])->name("logout");
Route::get("register", [AuthController::class,"register"])->name("register");
Route::post("register", [AuthController::class,"register_store"])->name("register_store");

Route::post("cart/add/{product}", [CartController::class,"addToCart"])->name("cart.add");
Route::get("profile", [UserController::class,"profile"])->name("user.profile");

Route::get("admin", [AdminController::class,"adminLoginForm"])->name("adminLoginForm");
Route::post("admin_login", [AdminController::class,"admin_login"])->name("admin_login");


Route::resource("products", ProductController::class);
