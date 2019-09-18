<?php
/* use App\User;
use Illuminate\Support\Facades\Hash; */
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

/* Route::get('/cd', function () {
    $user = User::findOrFail(1);
    $user->update(['password' => Hash::make('pass')]);
    echo "done";
}); */

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','frontend\HomePageController@index');

// frontend Interface
Route::get('/about-us','frontend\AboutUsController@index')->name('about-us');
Route::get('/activities','frontend\ActivitiesController@index')->name('activities');
Route::get('/projects','frontend\ProjectsController@index')->name('projects');
Route::get('/gallery','frontend\GalleryController@index')->name('gallery');
Route::get('/contact-us','frontend\ContactUsController@index')->name('contact-us');
Route::get('/shop','frontend\ProductsController@index');
Route::get('/product/{product_slug}/','frontend\ProductsController@singleProduct');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function(){
    return redirect('/dashboard');
});

Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d-\/_.]+)?');
