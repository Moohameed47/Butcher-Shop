<?php

use App\Http\Controllers\Cart;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Checkout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuth;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    $products = DB::table('products')->take(8)->get();

    return view('home', [
        "products" => $products
    ]);
});
Route::get('/', function () {
    return view('auth.login');
});


Route::get('/product', function () {
    $products = DB::table('products')->get();

    return view('product', [
        'products' => $products
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/cart', function () {
    return view('cart', [
        'items' =>  DB::table('cart')->where([
            'user_id' => Auth::user()->id,
        ])->get()
    ]);
});
Route::post('/cart', [Cart::class, 'insert']);
Route::post('/cart/minus', [Cart::class, 'minus']);
Route::post('/cart/delete', [Cart::class, 'delete']);
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [CustomAuth::class, 'register'])->name('register');
Route::get('/logout', [CustomAuth::class, 'logout']);
Route::post('/login', [CustomAuth::class, 'login'])->name('login');

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::post('/checkout', [Checkout::class, 'checkout']);

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.dashboard');
    });
    Route::get('products', function () {
        return view('dashboard.products', [
            'products' => DB::table('products')->get()
        ]);
    });
    Route::get('products/add', function () {
        return view('dashboard.product-add');
    });
    Route::post('products/add', [postcontroller::class, 'insert']);

    Route::get('products/{product}/edit', function ($product) {
        $p = DB::table('products')->find($product);
        if ($p) back();
        return view('dashboard.product-edit', [
            'product' => $p
        ]);
    });
    Route::post('products/{product}/edit', [postcontroller::class, 'update']);

    Route::get('products/{product}/delete', [postcontroller::class, 'delete']);


    Route::get('categories', function () {
        return view('dashboard.categories', [
            'categories' => DB::table('categories')->get()
        ]);
    });
    Route::get('categories/add', function () {
        return view('dashboard.category-add');
    });
    Route::get('categories/{category}/edit', function ($category) {
        $c = DB::table('categories')->find($category);
        if ($c) back();
        return view('dashboard.category-edit', [
            "category" => $c
        ]);
    });
    Route::post('categories/{category}/edit', [CategoryController::class, 'update']);
    Route::post('categories/add', [CategoryController::class, 'insert']);
    Route::get('categories/{category}/delete', [CategoryController::class, 'delete']);
});



Route::get('product', [postcontroller::class, 'products']);
// Route::get('Admin', [postcontroller::class, 'insert']);
