<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pages/index');
// });




Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\PagesController::class, 'categories']);
Route::get('/food-category', [App\Http\Controllers\PagesController::class, 'foodCategory']);
Route::get('/food-seach', [App\Http\Controllers\PagesController::class, 'foodSearch']);
Route::get('/food', [App\Http\Controllers\PagesController::class, 'food']);
Route::get('/order', [App\Http\Controllers\PagesController::class, 'order']);


# login route
Route::post('/auth/check', [App\Http\Controllers\AdminController::class, 'check']);
Route::get('/admin.logout', [App\Http\Controllers\AdminController::class, 'logout']);
Route::get('/auth/admin-login', [App\Http\Controllers\AdminController::class, 'adminLogin']);



#authorization # ADMIN ROUTING

Route::group(['middleware' => ['AuthCheck']], function () {

    Route::post('admin.store', [App\Http\Controllers\AdminController::class, 'store']);
    Route::get('/admin',             [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/add-admin',         [App\Http\Controllers\AdminController::class, 'addAdmin']);
    Route::put('/edit-admin/{id}',   [App\Http\Controllers\AdminController::class, 'editAdmin']);


    Route::get('/manage-order',      [App\Http\Controllers\AdminController::class, 'manageOrder']);
    Route::get('/manage-admin',      [App\Http\Controllers\AdminController::class, 'manageAdmin']);
    Route::get('/update-admin/{id}', [App\Http\Controllers\AdminController::class, 'updateAdmin']);

    Route::delete('admin.delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteAdmin']);
    Route::delete('order.delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteOrder']);
    Route::delete('category.delete/{id}', [App\Http\Controllers\CategoryController::class, 'deleteCategory']);
    Route::delete('food.delete/{id}', [App\Http\Controllers\FoodController::class, 'deleteFood']);

    Route::get('/update-password',   [App\Http\Controllers\AdminController::class, 'updatePassword']);
    Route::get('/manage-category',   [App\Http\Controllers\CategoryController::class, 'manageCategory']);
    Route::get('/add-category',      [App\Http\Controllers\CategoryController::class, 'addCategory']);
    Route::put('/store-category',    [App\Http\Controllers\CategoryController::class, 'storeCategory']);

    Route::get('/add-food',    [App\Http\Controllers\FoodController::class, 'addFood']);
    Route::put('/store-food',   [App\Http\Controllers\FoodController::class, 'storeFood']);
    Route::get('/manage-food',   [App\Http\Controllers\FoodController::class, 'manageFood']);
});
Route::get('/food-search',    [App\Http\Controllers\FoodController::class, 'searchFood']);
Route::get('/food-category/{id}',    [App\Http\Controllers\FoodController::class, 'foodCategory']);
Route::get('/order/{id}',    [App\Http\Controllers\FoodController::class, 'foodOrder']);
Route::get('/food-order',      [App\Http\Controllers\OrderController::class, 'addOrder']);


#CART

Route::get('cart', [FoodController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [FoodController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [FoodController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [FoodController::class, 'remove'])->name('remove.from.cart');
