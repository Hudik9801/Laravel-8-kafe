<?php

use \App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController as AdminoderController;



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

Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});




Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::get('/addtocard/{id}', [HomeController::class, 'addtocard'])->name('addtocard');
Route::post('/getproduct', [HomeController::class, 'getproduct'])->name('getproduct');
Route::get('/productlist/{search}', [HomeController::class, 'productlist'])->name('productlist');

Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');


//admin


Route::middleware('auth')->prefix('admin')->group(function() {

    //admin role
    Route::middleware('admin')->group(function() {

        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::get('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


        //Product
        Route::prefix('product')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
            Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
            Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');


        });
        //Message
        Route::prefix('messages')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');


        });

        #Product Image Gallery
        //Product
        Route::prefix('image')->group(function () {

            Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');


        });

        //REview
        Route::prefix('review')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');


        });
        #Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::get('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');


        //Fagg
        Route::prefix('faq')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');


        });
        //Admin Orders
        Route::prefix('order')->group(function () {
            Route::get('/', [AdminoderController:: class, 'index'])->name('admin_orders');
            Route::get('list/{status}', [AdminoderController::class, 'list'])->name('admin_order_list');
            Route::post('create', [AdminoderController::class, 'create'])->name('admin_order_add');
            Route::post('store', [AdminoderController::class, 'store'])->name('admin_order_store');
            Route::get('edit/{id}', [AdminoderController::class, 'edit'])->name('admin_order_edit');
            Route::post('update/{id}', [AdminoderController::class, 'update'])->name('admin_order_update');
            Route::post('itemupdate/{id}', [AdminoderController::class, 'itemupdate'])->name('admin_order_item_update');
            Route::get('delete/{id}', [AdminoderController::class, 'destroy'])->name('admin_order_delete');
            Route::get('show/{id}', [AdminoderController::class, 'show'])->name('admin_order_show');


        });
        //Admin Users
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController:: class, 'index'])->name('admin_users');
            Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController:: class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController:: class, 'user_role_delete'])->name('admin_user_role_delete');



        });



    });//admin


});#auth

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function() {
   Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[\App\Http\Controllers\UserController::class,'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'destroymyreview'])->name('user_review_delete');


});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function() {
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'index'])->name('userprofile');

    //Product
    Route::prefix('product')->group(function (){
        Route::get('/',[\App\Http\Controllers\ProductController::class, 'index'])->name('user_products');
        Route::get('create',[\App\Http\Controllers\ProductController::class,'create'])->name('user_product_add');
        Route::post('store',[\App\Http\Controllers\ProductController::class,'store'])->name('user_product_store');
        Route::get('edit/{id}',[\App\Http\Controllers\ProductController::class,'edit'])->name('user_product_edit');
        Route::post('update/{id}',[\App\Http\Controllers\ProductController::class,'update'])->name('user_product_update');
        Route::get('delete/{id}',[\App\Http\Controllers\ProductController::class,'destroy'])->name('user_product_delete');
        Route::get('show',[\App\Http\Controllers\ProductController::class,'show'])->name('user_product_show');


    });

    //user image product
    Route::prefix('image')->group(function (){

        Route::get('create/{product_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('user_image_add');
        Route::post('store/{product_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('user_image_store');
        Route::get('delete/{id}/{product_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('user_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('user_image_show');


    });
    //Shopcart
    Route::prefix('shopcart')->group(function (){
        Route::get('/',[\App\Http\Controllers\ShopcartController::class,'index'])->name('user_shopcart');
        Route::post('store/{id}',[\App\Http\Controllers\ShopcartController::class,'store'])->name('user_shopcart_add');
        Route::post('update/{id}',[\App\Http\Controllers\ShopcartController::class,'update'])->name('user_shopcart_update');
        Route::get('delete/{id}',[\App\Http\Controllers\ShopcartController::class,'destroy'])->name('user_shopcart_delete');



    });

    //Order
    Route::prefix('order')->group(function (){
        Route::get('/',[\App\Http\Controllers\OrderController::class, 'index'])->name('user_orders');
        Route::post('create',[\App\Http\Controllers\OrderController::class,'create'])->name('user_order_add');
        Route::post('store',[\App\Http\Controllers\OrderController::class,'store'])->name('user_order_store');
        Route::get('edit/{id}',[\App\Http\Controllers\OrderController::class,'edit'])->name('user_order_edit');
        Route::post('update/{id}',[\App\Http\Controllers\OrderController::class,'update'])->name('user_order_update');
        Route::get('delete/{id}',[\App\Http\Controllers\OrderController::class,'destroy'])->name('user_order_delete');
        Route::get('show/{id}',[\App\Http\Controllers\OrderController::class,'show'])->name('user_order_show');


    });

});



Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');







Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
