<?php

use App\Models\Post;
use App\Models\About;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostCotroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
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
    // return view('welcome');
    return view('home',[
        "title" => "Home",
        'active'=> 'home',        
    ]);
    // return 'Halaman Home';
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        'active'=> 'about',
        "nama" => " Diwantara Herbal",
        "alamat" => "Jl.Kalibokor 3 No.26 Surabaya",
        "motto" => "INOVATIF, HALAL, ALAMI",
        "visi" => "Menjadi distributor herbal halal yang mampu membantu produsen dan melayani konsumen seluruh nusantara",
        "misi" => "Memperkenalkan kekayaan alam untuk dijadikan obat herbal yang dikenal oleh masyarakat."
    ]);
});

Route::get('/posts', [PostCotroller::class,'index']);
Route::get('posts/{post:slug}',[PostCotroller::class,'show']);

Route::get('/categories',function(){
    return view('categories',[
        'title'=> 'Kategori Produk',
        'active'=> 'categories',
        'categories'=> Category::all()
        
    ]);

});
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title'=> $category->name,
        'active'=> 'categories',
        'posts'=> $category->posts,
        'category'=> $category->name
    ]);
});
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class);