<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductRestaurantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderRestaurantController;
use App\Http\Controllers\TableRestaurantController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ChartDataController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\SpunController;
use App\Http\Controllers\ClientController;

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
#Auth::routes();



Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/register', function () {
    return redirect('login');
})->name('login');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('funcoes', RoleController::class);
    Route::resource('usuarios', UserController::class);
    //=============================== Home =======================================//
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    //=============================== Product =======================================//
    Route::get('/admin/product/list', [ProductController::class, 'index'])->name('product.list');
    Route::get('/admin/product/view/{id}', [ProductController::class, 'view'])->name('product.view');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/admin/product/add', [ProductController::class, 'add'])->name('product.add');
    Route::post('/admin/product/add/store', [ProductController::class, 'store'])->name('product.store');
    Route::put('/admin/product/edit/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/admin/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    //=============================== Order =======================================//
    Route::get('/admin/order', [OrderController::class, 'index'])->name('order');
    Route::get('/admin/order/getadditional/{id}',[OrderController::class, 'getAdditional'])->name('order.getadditional');
    Route::get('/admin/order/getproduct/{id}',[OrderController::class, 'getProducts'])->name('order.getproduct');
    Route::get('/admin/order/getproductall',[OrderController::class, 'getProductsAll'])->name('order.getproductall');
    Route::get('/admin/order/getadditionalall',[OrderController::class, 'getAdditionalAll'])->name('order.getadditionalall');
    Route::post('/admin/order/payment',[OrderController::class, 'payment'])->name('order.payment');
    Route::post('/admin/order/register',[OrderController::class, 'register'])->name('order.register');
    Route::post('/admin/order/delivered',[OrderController::class, 'delivered'])->name('order.delivered');
    Route::get('/admin/order/print', [OrderController::class, 'print'])->name('order.print');
    Route::get('/admin/order/reprint/{id}', [OrderController::class, 'reprint'])->name('order.reprint');

    //=============================== Order Restaurant =======================================//    
    Route::get('/admin/tables_restaurant', [TableRestaurantController::class, 'index'])->name('tables_restaurant');

    Route::post('/admin/tables_restaurant/order', [TableRestaurantController::class, 'order'])->name('tables_restaurant.order');

    Route::post('/admin/tables_restaurant/payment',[TableRestaurantController::class, 'payment'])->name('tables_restaurant.payment');

    Route::post('/admin/tables_restaurant/print', [TableRestaurantController::class, 'print'])->name('tables_restaurant.print');

    Route::get('/admin/tables_restaurant/reprint/{id}', [TableRestaurantController::class, 'reprint'])->name('tables_restaurant.reprint');

    Route::get('/admin/tables_restaurant/commands', [TableRestaurantController::class, 'commands'])->name('tables_restaurant.commands');

    Route::post('/admin/tables_restaurant/finish', [TableRestaurantController::class, 'finish'])->name('tables_restaurant.finish');

    //=============================== Type =======================================//
    Route::get('/admin/type/list', [TypeController::class, 'index'])->name('type.list');
    Route::get('/admin/type/view/{id}', [TypeController::class, 'view'])->name('type.view');
    Route::get('/admin/type/edit/{id}', [TypeController::class, 'edit'])->name('type.edit');
    Route::get('/admin/type/add', [TypeController::class, 'add'])->name('type.add');
    Route::post('/admin/type/add/store', [TypeController::class, 'store'])->name('type.store');
    Route::put('/admin/type/edit/update', [TypeController::class, 'update'])->name('type.update');
    Route::delete('/admin/type/destroy/{id}', [TypeController::class, 'destroy'])->name('type.destroy');

    //=============================== Additional =======================================//
    Route::get('/admin/additional/list', [AdditionalController::class, 'index'])->name('additional.list');
    Route::get('/admin/additional/view/{id}', [AdditionalController::class, 'view'])->name('additional.view');
    Route::get('/admin/additional/edit/{id}', [AdditionalController::class, 'edit'])->name('additional.edit');
    Route::get('/admin/additional/add', [AdditionalController::class, 'add'])->name('additional.add');
    Route::post('/admin/additional/add/store', [AdditionalController::class, 'store'])->name('additional.store');
    Route::put('/admin/additional/edit/update', [AdditionalController::class, 'update'])->name('additional.update');
    Route::delete('/admin/additional/destroy/{id}', [AdditionalController::class, 'destroy'])->name('additional.destroy');

    //=============================== Sales =======================================//
    Route::get('/admin/sales', [SalesController::class, 'index'])->name('sales.list');
    Route::get('/admin/sales/select', [SalesController::class, 'select']);
    Route::post('/admin/sales/select', [SalesController::class, 'postData']);
    Route::get('/admin/sales/destroy/{id}', [SalesController::class, 'destroy'])->name('sales.destroy');
    Route::post('/admin/sales/list', [SalesController::class, 'list'])->name('sales.list.list');

    //=============================== Password =======================================//
    Route::get('/admin/password', [PasswordController::class, 'index'])->name('password');
    Route::get('/admin/password/getpassword/', [PasswordController::class, 'getpassword'])->name('password.get');

    //================CHARTS====================//
    Route::get('/get-sales-chart-data', [ChartDataController::class, 'getMonthlySalesData']);

    //================PRINT====================//
    Route::get('/day', [SalesController::class, 'printDay']);
    Route::get('/week', [SalesController::class, 'printWeek']);
    Route::get('/month', [SalesController::class, 'printMonth']);

    //================================Cashier=================================//
    Route::get('/admin/cashier', [CashierController::class, 'index'])->name('cashier.index');
    Route::post('/admin/cashier', [CashierController::class, 'openCashier'])->name('cashier.openCashier');
    Route::put('/admin/cashier', [CashierController::class, 'closeCashier'])->name('cashier.closeCashier');

    //=============================== Spun =======================================//
    Route::get('/admin/client/spun/{id}', [SpunController::class, 'index'])->name('spun.index');
    Route::get('/admin/client/spun/{id}/add', [SpunController::class, 'add'])->name('spun.add');
    Route::post('/admin/client/spun/{id}/store', [SpunController::class, 'store'])->name('spun.store');
    Route::get('/admin/client/spun/{id}/print/{spun}', [SpunController::class, 'print'])->name('spun.print');

    //=============================== Client =======================================//
    Route::get('/admin/client/', [ClientController::class, 'index'])->name('client.index');
    Route::get('/admin/client/add/', [ClientController::class, 'create'])->name('client.create');
    Route::get('/admin/client/view/{id}', [ClientController::class, 'view'])->name('client.view');
    Route::get('/admin/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('/admin/client/destroy/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
    Route::post('/admin/client/add/store', [ClientController::class, 'store'])->name('client.store');
    Route::post('/admin/client/edit/update/{id}', [ClientController::class, 'update'])->name('client.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
