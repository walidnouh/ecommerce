<?php

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FiltreController;
use App\Http\Controllers\ProductController;

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

Auth::routes();
Route::resource('/products','ProductController');
Route::resource('/panier/addcard','CartController');
Route::resource('/brands','BrandController');
Route::resource('/category','CategoryController');

Route::get('/filtre/{id}','FiltreController@index')->name('filtre.index');
Route::resource('/checkout','OrderController')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>['auth']],function(){
   Route::resource('/admin','AdminController');
});

Route::group(['middleware'=>['role:administrator']],function(){
   Route::resource('users','UsersController');
   Route::resource('permission','PermissionController');
   Route::resource('role','RoleController');
});














// create role:
Route::get('/newrole',function(){
$admin = Role::create([
   'name' => 'admin',
   'display_name' => 'User Administrator', // optional
   'description' => 'Administrator', // optional
]);
$user = Role::create([
   'name' => 'user',
   'display_name' => 'User ', // optional
   'description' => 'User ', // optional
]);
  return back();
})->name('newrole');
//end role


// create permission:
Route::get('/newpermission',function(){
   $createPost = Permission::create([
      'name' => 'create-post',
      'display_name' => 'Create Posts', // optional
      'description' => 'create new blog posts', // optional
      ]);
      
   $editUser = Permission::create([
      'name' => 'edit-user',
      'display_name' => 'Edit Users', // optional
      'description' => 'edit existing users', // optional
      ]);
     return back();
   })->name('permission');
// end permission




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
