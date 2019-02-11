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

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application for Admin Panel
|
*/



Route::group(['middleware' => ['web', 'admin']], function() {

    /*
    |--------------------------------------------------------------------------
    | Show Admin Panel For Admin Users
    |--------------------------------------------------------------------------
    */
    Route::get('adminpanel', 'AdminController@index');
    /*
    |--------------------------------------------------------------------------
    | Resource For Users
    |--------------------------------------------------------------------------
    */
    Route::resource('adminpanel/users','UsersController');
    /*
    |--------------------------------------------------------------------------
    | Delete For Users
    |--------------------------------------------------------------------------
    */
    Route::get('adminpanel/users/{user}/delete', 'UsersController@destroy');

    /*
    |--------------------------------------------------------------------------
    | change-password For User
    |--------------------------------------------------------------------------
    */
    Route::get('adminpanel/users/{user}/change-password', 'UsersController@changePassword')->name('change-password');
    Route::patch('adminpanel/users/{user}/update-password', 'UsersController@updatePassword')->name('update-password');
    /*
    |--------------------------------------------------------------------------
    | change- My -password For Auth User
    |--------------------------------------------------------------------------
    */
    Route::get('adminpanel/users/{user}/change-my-password', 'UsersController@changeMyPassword')->name('change-my-password');
    //Route::get('adminpanel/users/{user}/update-my-password', 'UsersController@updateMyPassword')->name('update-my-password');
    /*
    |--------------------------------------------------------------------------
    | change level For Users
    |--------------------------------------------------------------------------
    */
    Route::get('adminpanel/users/{user}/editLevel', 'UsersController@editLevel')->name('users.editLevel');
    
    
    
    /*
    |------------------------------------------------------------------------------------------------------------------------------------
    | Section Site Setting Routes
    */

    /*
    |--------------------------------------------------------------------------
    | change level For Users
    |--------------------------------------------------------------------------
    */
    Route::get('adminpanel/sidesetting', 'SiteSettingController@index')->name('side-setting');
    Route::post('adminpanel/sidesetting/update', 'SiteSettingController@store')->name('side-setting-update');
    



    /*
    |------------------------------------------------------------------------------------------------------------------------------------
    | Section Site Setting Routes
    */

    /*
    |--------------------------------------------------------------------------
    | change level For Users
    |--------------------------------------------------------------------------
    */
    Route::resource('adminpanel/build', 'BuildController');
    Route::get('adminpanel/build/{build}/delete', 'BuildController@destroy'); #Delete For build
    Route::get('adminpanel/build/{build}/editStatus', 'BuildController@editStatus')->name('build-editStatus'); #For Panding Build
    
    Route::get('adminpanel/build/pandding', 'BuildController@pandding')->name('build-pandding'); #For unPandding Build
    Route::get('adminpanel/build/unPandding', 'BuildController@unPandding')->name('build-unPandding'); #For unPandding Build
    
    Route::get('adminpanel/{id}/build/', 'BuildController@showUserBuild')->name('show-user-build'); #For unPandding Build
    

});


Route::get('/404', function () {
    return view('admin.layouts.404')->name('404');
});



/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
 Here is where you can register web routes for your application for  User Side
|
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Build Users
|--------------------------------------------------------------------------
*/
Route::get('showAllBuild', 'BuildController@showAllBuild')->name('all-build');
Route::get('showForRent', 'BuildController@showForRent')->name('for-rent-build');
Route::get('showForBuy', 'BuildController@showForBuy')->name('for-buy-build');
Route::get('type/{type}', 'BuildController@showByType')->name('type');
# For Search For Aqur
Route::any('search', 'BuildController@searchForBuild')->name('search');
# For Detials For Aqur
Route::get('detialsBuild/{id}', 'BuildController@detialsBuild')->name('detials-build');

# For Show User Aqur
Route::get('user/builds/pandding', 'BuildController@userBuild')->name('user-build')->middleware('auth');
Route::get('user/builds/unpandding', 'BuildController@userWaitingBuild')->name('user-waiting-build')->middleware('auth');
# For User Create Aqur
Route::get('user/create/building',  'BuildController@userCreateBuild')->name('user-create-build');
Route::post('user/store/building', 'BuildController@userStoreBuild')->name('user-store-build');
Route::get('user/done/building',  'BuildController@userDoneCreateBuild')->name('user-done-build')->middleware('auth');


/*
|--------------------------------------------------------------------------
| Edit Users
|--------------------------------------------------------------------------
*/
  #| change- My -password For Auth User
    Route::get('create/new/user', 'UsersController@CreateNewUser')->name('create-new-user');
    Route::post('create/new/user', 'UsersController@storeUser')->name('store-new-user');
   
    Route::get('user/change-user-password', 'UsersController@changeUserPassword')->name('change-user-password')->middleware('auth');
    Route::post('user/store/password', 'UsersController@updatePasswordUser')->name('user-store-password');
   
    Route::get('user/profile', 'UsersController@Profile')->name('profile')->middleware('auth');
    Route::post('user/store/profile', 'UsersController@updateProfile')->name('store-profile');
   




/**
 * For Eidt Later
 * 
 * 1- Route Of Delete For All
 */