
<?php

//use Symfony\Component\Routing\Annotation\Route;

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



Route::resource('proposals', 'ProposalController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@admin')->name('admin') ;

Route::get('/normal', 'HomeController@redirect');

Route::get('/admin', 'AdminController@admin')    
   ->middleware('is_admin')    
   ->name('admin');

//Route::get('protected', ['middleware' => ['auth', 'is_admin'], function() {
    
   // return "this page requires that you be logged in and an Admin";
//}]);

Route::get('/review/{proposal_id}','AdminController@review')
    ->name('review');

Route::get('/stage-1/{proposal_id}','AdminController@stage1')
    ->name('stage1');

Route::get('/stage-2/{proposal_id}','AdminController@stage2')
    ->name('stage2');
    
Route::get('/approved/{proposal_id}','AdminController@approved')
    ->name('approved');

Route::get('/rejected/{proposal_id}','AdminController@rejected')
    ->name('rejected');

