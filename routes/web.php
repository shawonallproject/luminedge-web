<?php

//Route::get('/', function () {
//    return view('welcome');
//})->name('front');
Route::get('/', 'HomeController@home')->name('home');
Route::get('about', 'HomeController@about')->name('about');
Route::get('career', 'HomeController@career')->name('career');
Route::get('service', 'HomeController@services')->name('services');
Route::get('career/{id}', 'HomeController@careerDetails')->name('career-details');
Route::get('news', 'HomeController@news')->name('news');
Route::get('news/{id}', 'HomeController@newsDetails')->name('news-details');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::post('client-information', 'HomeController@clientInformation')->name('client-information');
Route::post('contact-message', 'HomeController@contactMessage')->name('contact-message');
Route::post('subscribe', 'HomeController@subscribe')->name('subscribe');

Route::group([
    'namespace' => 'Auth',
], function () {

    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login_page');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register_page');
    Route::post('register', 'RegisterController@register')->name('register');
    Route::get('register/activate/{token}', 'RegisterController@confirm')->name('email_confirm');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');


});

Route::get('home', 'UserController@index')->name('home');
Route::get('admin/list', 'AdminController@list')->name('admin.user.list');
Route::get('admin/create', 'AdminController@create')->name('admin.user.create');
Route::post('admin/save', 'AdminController@save')->name('admin.user.save');
Route::get('admin/edit/{id}', 'AdminController@edit')->name('admin.user.edit');
Route::post('admin/update/{id}', 'AdminController@update')->name('admin.user.update');
Route::get('admin/delete/{id}', 'AdminController@delete')->name('admin.user.delete');

Route::get('admin/profile', 'AdminController@profileEdit')->name('admin.profile.edit');
Route::post('admin/profile/update', 'AdminController@profileUpdate')->name('admin.profile.update');

Route::get('admin/career/list', 'CareerController@list')->name('admin.career.list');
Route::get('admin/career/create', 'CareerController@create')->name('admin.career.create');
Route::post('admin/career/save', 'CareerController@save')->name('admin.career.save');
Route::get('admin/career/edit/{id}', 'CareerController@edit')->name('admin.career.edit');
Route::post('admin/career/update/{id}', 'CareerController@update')->name('admin.career.update');
Route::get('admin/career/delete/{id}', 'CareerController@delete')->name('admin.career.delete');
Route::get('admin/career/details/{id}', 'CareerController@details')->name('admin.career.details');

Route::get('admin/news/list', 'NewsController@list')->name('admin.news.list');
Route::get('admin/news/create', 'NewsController@create')->name('admin.news.create');
Route::post('admin/news/save', 'NewsController@save')->name('admin.news.save');
Route::get('admin/news/edit/{id}', 'NewsController@edit')->name('admin.news.edit');
Route::post('admin/news/update/{id}', 'NewsController@update')->name('admin.news.update');
Route::get('admin/news/delete/{id}', 'NewsController@delete')->name('admin.news.delete');
Route::get('admin/news/details/{id}', 'NewsController@details')->name('admin.news.details');


Route::get('admin/content/about', 'ContentController@about')->name('admin.content.about');
Route::get('admin/content/about/edit/{type}', 'ContentController@editAbout')->name('admin.content.edit.about');
Route::post('admin/content/about/update/{type}', 'ContentController@updateAbout')->name('admin.content.update.about');

