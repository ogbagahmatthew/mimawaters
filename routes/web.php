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

//  Route::get('/admins', function () {
//     return view('admins.dashboard');
//  });

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'StaticPagesController@about');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/', 'StaticPagesController@homepage');
Route::get('/services', 'StaticPagesController@services');
Route::get('/jobs', 'StaticPagesController@jobs');
Route::get('/make', 'StaticPagesController@make');
Route::get('/profile', 'StaticPagesController@profile');
Route::get('/mima', 'StaticPagesController@mima');
Route::get('/stores', 'StaticPagesController@stores');
Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/register', 'RegisterController@register');
Route::resource('user', 'UserController');
Route::resource('admin', 'AdminController');
Route::resource('profile', 'ProfileController');
// Route::get('sales/create', 'AdminController@sales');
// Route::get('admin/create/directors', 'AdminController@directors');
Route::resource('priviledge', 'PriviledgeController');
// Route::get('/Auth/register', 'RegisterController@register');
//  Route::get('Dashboard/admin', 'DashboardController@getadmin');
// Route::get('Dashboard/sales', 'DashboardController@getsales');
// Route::get('Dashboard/directors', 'DashboardController@getdirectors');
// Route::get('Dashboard/jobs', 'DashboardController@getjpbs');
Route::resource('jobs', 'JobController');
//  Route::get('jobs.index', 'JobController');
// Route::get('jobs/applicant', 'JobController');
 Route::resource('sales', 'SalesController'); # A user
 Route::resource('salesreport', 'SalesreportController'); # Daily entry
//  Route::get('salesreport/create', 'SalesreportController');
 Route::resource('feedback', 'FeedbackController');
 Route::get('feedback/create', 'FeedbackController@create');
 Route::resource('orders', 'OrderController');
 Route::get('/Dashboard', 'CentraldashboardController@index');

 Route::get('admin', 'CentraldashboardController@index');
 Route::resource('director', 'DirectorController');
//  Route::resource('orders/create', 'OrderController@create');
Route::resource('/account', 'AccountController');
Route::resource('products', 'ProductController');
// Route::resource('updates', 'UpdateController');
// Route::resource('expenses', 'ExpensesController');
// Route::resource('applicant', 'ApplicantController');
// Route::get('userjobs', 'JobController@getuserjobs');
// Route::resource('confirms', 'ConfirmController');
// Route::get('confirmorders', 'OrderController@confirmorder');
Route::resource('blogs', 'BlogController');
Route::get('/blogs/article/{slug}', 'BlogController@read');
<<<<<<< HEAD
 
=======
Route::get('/blogs/article/{slug}/edit', 'BlogController@edit');
>>>>>>> 503ccd70cd902edcfe2730a2fc27469a52f66b94
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
