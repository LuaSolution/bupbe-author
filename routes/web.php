<?php

Route::middleware(['runall'])->group(function () {
    Route::get('/', 'MainController@getHome')->name('getHome');

    Auth::routes();

    // Admin ***************************************
    Route::prefix('/ad')->group(function () {

        Route::get('/login', 'AdminController@getLogin')->name('adgetLogin');
        Route::post('/login', 'AdminController@postLogin')->name('adpostLogin');

        Route::middleware(['check_admin'])->group(function () {

            // Home
            Route::get('/', 'AdminController@getHome')->name('adgetHome');
            Route::post('/config', 'AdminController@updateConfig')->name('adupdateConfig');

            // Product
            Route::get('/product-add', 'AdminController@getAddProduct')->name('adgetAddProduct');
            Route::post('/product-add', 'AdminController@postAddProduct')->name('adpostAddProduct');
            Route::get('/product-edit/{id}', 'AdminController@getEditProduct')->name('adgetEditProduct');
            Route::post('/product-edit/{id}', 'AdminController@postEditProduct')->name('adpostEditProduct');
            Route::get('/product/{query?}', 'AdminController@getListProduct')->name('adgetListProduct');
            Route::get('/product-del/{id}', 'AdminController@getDelProduct')->name('adgetDelProduct');

            // Cate
            Route::get('/cate-add', 'AdminController@getAddCate')->name('adgetAddCate');
            Route::post('/cate-add', 'AdminController@postAddCate')->name('adpostAddCate');
            Route::get('/cate-edit/{id}', 'AdminController@getEditCate')->name('adgetEditCate');
            Route::post('/cate-edit/{id}', 'AdminController@postEditCate')->name('adpostEditCate');
            Route::get('/cate', 'AdminController@getListCate')->name('adgetListCate');
            Route::get('/cate-del/{id}', 'AdminController@getDelCate')->name('adgetDelCate');

            // News
            Route::get('/news-add', 'AdminController@getAddNews')->name('adgetAddNews');
            Route::post('/news-add', 'AdminController@postAddNews')->name('adpostAddNews');
            Route::get('/news-edit/{id}', 'AdminController@getEditNews')->name('adgetEditNews');
            Route::post('/news-edit/{id}', 'AdminController@postEditNews')->name('adpostEditNews');
            Route::get('/news', 'AdminController@getListNews')->name('adgetListNews');
            Route::get('/news-del/{id}', 'AdminController@getDelNews')->name('adgetDelNews');

            // Store
            Route::get('/store-add', 'AdminController@getAddStore')->name('adgetAddStore');
            Route::post('/store-add', 'AdminController@postAddStore')->name('adpostAddStore');
            Route::get('/store-edit/{id}', 'AdminController@getEditStore')->name('adgetEditStore');
            Route::post('/store-edit/{id}', 'AdminController@postEditStore')->name('adpostEditStore');
            Route::get('/store', 'AdminController@getListStore')->name('adgetListStore');
            Route::get('/store-del/{id}', 'AdminController@getDelStore')->name('adgetDelStore');

            // User
            Route::post('/user-add', 'AdminController@postAddUser')->name('adpostAddUser');
            Route::get('/user', 'AdminController@getListUser')->name('adgetListUser');
            Route::get('/user-del/{id}', 'AdminController@getDelUser')->name('adgetDelUser');
            Route::post('/update-password', 'AdminController@postUpdatePassword')->name('adpostUpdatePassword');

            Route::post('/upload-img', 'AdminController@uploadImage')->name('uploadImage');

            // Cart
            Route::get('/cart-edit/{id}', 'AdminController@getEditCart')->name('adgetEditCart');
            Route::post('/cart-edit/{id}', 'AdminController@postEditCart')->name('adpostEditCart');
            Route::get('/cart', 'AdminController@getListCart')->name('adgetListCart');
            Route::get('/cart-del/{id}', 'AdminController@getDelCart')->name('adgetDelCart');
        });

    });
    // END Admin ***********

    // FRONDEND ***********
    Route::get('/gioi-thieu', function () {
        return view('client.about');
    })->name('getIntro');
    Route::get('/lien-he', function () {
        return view('client.contact');
    })->name('getContact');
    Route::post('/post-contact', 'MainController@postContact')->name('postContact');
    Route::get('/tin-tuc', 'MainController@getAllNews')->name('getAllNews');
    Route::get('/tin-tuc/{news}', 'MainController@getNews')->name('getNews');
});