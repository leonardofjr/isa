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

/* Main Pages */
Route::get('/', function () {
    return view('frontend.pages.home.index');
});

Route::get('/why-us', 'Frontend\AboutController@index')->name('Why Us?');

Route::prefix('clean-services')->group(function() {
    Route::get('/', 'Frontend\ServicesController@index')->name('Services');
    Route::get('/childcare-cleaning-services', 'Frontend\ChildcareCleaningPageController@index')->name('Childcare Cleaning Services');
    Route::get('/cinema-theatre-cleaning-services', 'Frontend\CinemaAndTheatreCleaningPageController@index')->name('Cinema Theatre Cleaning Services');

});

Route::get('/careers', 'Frontend\CareersController@index')->name('Careers');
Route::post('/send-career-form', 'Frontend\CareersController@mail');

Route::get('/news', 'Frontend\NewsController@index')->name('News');

Route::get('/get-a-free-quote', 'Frontend\GetAFreeQuoteController@index')->name('Get A Free Quote');
Route::post('/send-quote', 'Frontend\GetAFreeQuoteController@mail');



Route::get('/testimonial-form', 'Frontend\TestimonialController@index')->name('Testimonial');
Route::post('/send-testimonial', 'Frontend\TestimonialController@mail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Auth::routes(['verify' => true]);

Route::post('store-post', 'Backend\BlogController@store' );

Route::get('/news/1', 'Frontend\NewsController@page')->name('News');
