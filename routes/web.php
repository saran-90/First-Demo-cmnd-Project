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

/*-----------------------------------Common Routes -------------------*/
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});



     
    Route::get('/services', function () {
        return view('services');
    });
   
    
     
     
     
Route::get('/gallery', function () {
    return view('gal');
});

Route::get('/news', function () {
    return view('news');
});
Route::get('/news', 'NewsletterController@shownews'); 

// Route::get('/', 'NewsletterController@shownewsletterindex'); 

Route::get('/contact', function () {
    return view('contact');
});
 
 



     
/*-----------------------------------Search Functionality -------------------*/
    Route::get('/gallery', 'GalleryController@showgalleryall');
    Route::get('/gallerysearch','GalleryController@GalleryCat');
/*-----------------------------------End Search Functionality  -------------------*/
/*-----------------------------------End Common Routes -------------------*/


/*-----------------------------------Admin Dashboard -------------------*/
// Route::get('/dashboard1', function () {
//     return view('admin.dashboard');
// });

Route::group(['middleware' => 'disablepreventback'],function(){
    // *********Category********** //
Route::group(['middleware' => 'auth:admin'],function(){
  
        Route::get('/categories', function () {
            return view('admin.category')>name('admin.category');
        })->middleware('auth:admin');
        Route::post('/category', 'CategoryController@addcategory');
        Route::get('/categories', 'CategoryController@showcategory')
        ->middleware('auth:admin');
        Route::get('delete/cat/{id}', 'CategoryController@deletecategory')->middleware('disablepreventback');

        Route::get('/category/test', 'CategoryController@updatecategory');
        //Route::post('/category/test', 'CategoryController@updatecategory');

        Route::patch('/categories', array('as' => '/categories', 
            'uses' => 'CategoryController@updatecategory'))->middleware('disablepreventback');

        //Livesearch//
        Route::get('/category/action', 'LiveSearch@action')->name('category.action')
        ->middleware('auth:admin');

    //**********End  Category********* //
    
    //**********Gallery ********* //

    Route::get('/galleries', function () {
            return view('admin.gallery')->middleware('auth:admin');
        });
        Route::post('/gallery', 'GalleryController@addgallery');
        Route::get('/galleries', 'GalleryController@showgallery');
        Route::get('delete/gal/{id}', 'GalleryController@deletegallery');
        
         Route::get('/gallery/test', 'GalleryController@updategallery');
       // Route::get('/gallery/test', 'GalleryController@updategallery');
        Route::patch('/galleries', array('as' => '/galleries', 
            'uses' => 'GalleryController@updategallery'));

        //Livesearch//
        // Route::get('/category', 'LiveSearch@index1');
        Route::get('/gallery/action', 'GalleryController@gallerysearch')
        ->name('gallery.action')->middleware('auth:admin');
        //**********End Gallery ********* //

          //**********Newsletter ********* //

       Route::get('/newsletter', function () {
            return view('admin.newsletter')->middleware('auth:admin');
        });
        Route::post('/newsletter', 'NewsletterController@addnewsletter');
        Route::get('/newsletter', 'NewsletterController@shownewsletter');
        Route::get('delete/news/{id}', 'NewsletterController@deletenewsletter');
        
         Route::get('/newsletter/test', 'NewsletterController@updatenewsletter');
       // Route::get('/gallery/test', 'GalleryController@updategallery');
        Route::patch('/newsletter', array('as' => '/newsletter', 
            'uses' => 'NewsletterController@updatenewsletter'));

        //Livesearch//
        // Route::get('/category', 'LiveSearch@index1');
        Route::get('/newsletter/action', 'NewsletterController@newslettersearch')
        ->name('newsletter.action')->middleware('auth:admin');
        //**********End newsletter ********* //
     
          
    // *********Egreetings********** //

  
        Route::get('/egreetings', function () {
            return view('admin.egreetings');
        });
        Route::post('/egreetings/excel', 'EgreetingsController@importExcel');

        Route::get('downloadExcel/{type}', 'EgreetingsController@downloadExcel');

        Route::get('/egreetings', 'EgreetingsController@showegreetings');
      
        Route::post('/egreetings/msg', 'EgreetingsController@msg');
        
        Route::get('/egreetings/action', 'EgreetingsController@action')
          ->name('egreetings.action')
        ->middleware('auth:admin');

        //Route::get('/egreetings/test', 'EgreetingsController@updategreet');
        Route::patch('/egreetings', array('as' => '/egreetings', 
            'uses' => 'EgreetingsController@updategreet'));

        Route::get('delete/gr/{id}', 'EgreetingsController@deleteegreet')->middleware('disablepreventback');

        

 
        Route::get('/profile', function () {
            return view('admin.profile');
        });
         //Route::resource('admin.profile', 'ProfileController');

        Route::get('/admin/edit/{id}','ProfileController@edit');
        Route::post('/admin/edit/{id}','ProfileController@update');

     
      
    });

});

/*-----------------------------------End  Admin Dashboard-------------------*/
/*-----------------------------------Auth admin -------------------*/
  
Route::group(['middleware' => 'disablepreventback'],function(){

    /*-----------------------------------NewsLetter1 -------------------*/
   Route::get('/news_letter1', function () {
    return view('news_letter1');
   })->middleware('auth');
  
   Route::get('/news_letter1', 'NewsletterController@shownewsletter1')->middleware('auth');
 /*-----------------------------------NewsLetter1 -------------------*/
/*----------------------------------------Admin--------------------------*/    
    Route::prefix('admin')->group(function() {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
   });

    Auth::routes();
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::POST('/dashboard','AdminController@index');
    });

    Auth::routes();
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/*-------------------------------------End  Admin----------------------*/

/*-----------------------------------Auth User Admin -------------------*/

	Auth::routes();
	Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');
   
    //Route::post('/home/{id}', 'HomeController@editItem');

/*-----------------------------------End Auth User Admin -------------------*/

//Route::get('/testimonials', 'HomeController@showtestimonial')->middleware('auth');

});
/*-----------------------------------End Auth admin-------------------*/


/*----------------------------------- Locale Language -------------------*/
Route::get('/locale/{locale}', function (Request $request, $locale) {
    if (array_key_exists($locale, config('app.locales'))) {
        session(['locale' => $locale]);
    }
    return Redirect::back();
})->name('locale');
/*-----------------------------------End  Locale Language -------------------*/
 Route::get('egreetings/getclient/{id}', 'EgreetingsController@getegreetnumber');


