<?php

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

// ForntEnd START


 Route::get('/', 'FrontEnd\HomeController@index')->name('home');
 Route::get('/products/recommended', 'FrontEnd\HomeController@viewRecommendedProducts')->name('products.json');
 Route::get('/cat/{name}', 'FrontEnd\HomeController@category_products')->name('category');
 Route::get('/category/{slug}', 'FrontEnd\HomeController@sub_categories_product')->name('sub_category');
 Route::get('/menu/{id}', 'FrontEnd\HomeController@menus_product')->name('menu');
 Route::post('/category/search/', 'FrontEnd\HomeController@search')->name('search');
// Route::get('/', 'FrontEnd\WelcomeController@menu');
Route::get('/product/{slug}','FrontEnd\HomeController@show_product')->name('product');
 Route::get('/shop-now', 'FrontEnd\WelcomeController@shop')->name('shop');
 Route::get('/about', 'FrontEnd\WelcomeController@about')->name('about');
 Route::get('/contact-us', 'FrontEnd\WelcomeController@contact')->name('contact');
 Route::post('/post-contact', 'FrontEnd\HomeController@post_contact')->name('postcontact');

Route::get('/place-order', 'FrontEnd\HomeController@placeOrder')->name('place.order');
Route::get('/provide-information', 'FrontEnd\HomeController@provideInformation')->name('provide.info');

 Route::get('/blog', 'FrontEnd\WelcomeController@blog')->name('blog');
 Route::get('/wishlist', 'FrontEnd\WelcomeController@wishlist')->name('wishlist');
 Route::get('/compare', 'FrontEnd\WelcomeController@compare')->name('compare');
 Route::get('/terms-conditions', 'FrontEnd\WelcomeController@terms')->name('terms');
 Route::get('/faq', 'FrontEnd\WelcomeController@faq')->name('faq');
// cart
 Route::post('/cart', 'FrontEnd\CartController@cartpost')->name('cartpost');
 Route::post('/cartpostAjax', 'FrontEnd\CartController@cartpostAjax')->name('cartpost.ajax');
 Route::get('/cart', 'FrontEnd\CartController@cart')->name('cart');
 Route::get('/getcartitems', 'FrontEnd\CartController@getCartItem')->name('cart.ajax');
 Route::post('/cartUpdate', 'FrontEnd\CartController@updateCart')->name('cart_update');
 Route::get('/getCartSubtotal', 'FrontEnd\CartController@getCartSubtotal')->name('cart_subtotal');
 Route::post('/cartx', 'FrontEnd\CartController@destroy')->name('cart_delete');
 Route::post('/clear-cartx', 'FrontEnd\CartController@clear_cart')->name('cart_destory');
 Route::post('/checkout', 'FrontEnd\CheckOutController@checkout')->name('checkout');

 Route::get('/checkout-product', 'FrontEnd\CheckOutController@checkoutMe')->name('checkoutMe');
 Route::post('/product-order-confirm', 'FrontEnd\CheckOutController@productOrderConfirm')->name('product.order.confirm');
 Route::post('/order-confirm', 'FrontEnd\CheckOutController@orderConfirm')->name('order.confirm');

 Route::post('/order', 'FrontEnd\CheckOutController@store')->name('order');
 Route::get('/shop', 'FrontEnd\CheckOutController@shop')->name('shop');
 Route::get('/my-account', 'FrontEnd\CheckOutController@useraccount')->name('account');

 Route::get('/get-product-image/{id}', function($product_id){
   return Helper::showProductImage($product_id);
 })->name('getProductImage');


// customer authecntication
 Route::get('customer/login', 'FrontEnd\Customer\CustomerLoginController@showLoginForm')->name('authentication');
 Route::get('/signout', 'Auth\LoginController@logout');

Auth::routes();
Route::group(['prefix'=>'customer','as'=>'customer.'],function(){
Route::get('/dashboard', 'FrontEnd\Customer\CustomerController@index');
Route::get('/orders', 'FrontEnd\Customer\CustomerController@orders')->name('orders');
Route::resource('/profile','FrontEnd\Customer\ProfileController');


});
