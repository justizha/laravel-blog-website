<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminUsersController;

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home',[
        "title"=>"Home",
        "active"=>'home'
    ]);
});

Route::get('/about', function () {
    return view('about',
        [
            "title"=> "About",
            "name"=> "Alfath Izha",
            "github"=> "justizha",
            "image"=> "shandika.jpeg",
            "active"=>"about"
            
        ]
    );
});

Route::get('/post', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title'=> 'Post Categories',
        'active'=> 'categories',
        'categories'=> Category::all()
     
    ]);
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth'); 


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/users', AdminUsersController::class)->middleware('admin');
Route::resource('/dashboard/AdminPosts', AdminPostsController::class)->middleware('admin');

Route::delete('/dashboard/categories/{categories}','AdminCategoryController@destroy')->name('Category.destroy');
Route::delete('/dashboard/users/{users}','AdminCategoryUser@destroy')->name('User.destroy');
// Route::delete('/dashboard/AdminPosts/{posts}','AdminPostsController@destroy')->name('Post.destroy');









