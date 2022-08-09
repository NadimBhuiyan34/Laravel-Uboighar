<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;


use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonetController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PublicController;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Getdonatecontoller;
use App\Http\Controllers\SellbookController;

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DonatebookController;

use App\Http\Controllers\PublicPageController;

use App\Http\Controllers\RequestbookController;

use App\Http\Controllers\DonetCommentController;
use App\Http\Controllers\PublicProductController;
use App\Http\Controllers\PublicProductDetailsController;
 
use App\Http\Controllers\ProductController; 
 
use App\Http\Controllers\EarnpointController;
use App\Http\Controllers\UserorderController;
 
 
 
 
 
 

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

// Route::get('/', function () {
//     return view('welcome');
// });





//this is user authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//This is frontend route
Route::controller(PublicController::class)->group(function(){
    Route::get('/','home')->name('homepage');
    Route::post('/logout',[PublicController::class,'logout'])->name('logout')->middleware('auth');
});

Route::middleware('auth')->controller(PublicProductController::class)->group(function(){

    Route::get('/bestbook','bestbook')->name('bestbook');
    Route::get('/newcollection','newcollection')->name('newcollection');
    Route::get('/oldbook','oldbook')->name('oldbook');
    Route::get('/getdonate','getdonate')->name('getdonate');
    Route::get('/earnpoint','earnpoint')->name('earnpoint');
    Route::post('/earnpoints','store')->name('earnpoints.store');
    Route::patch('/earnpoints/{earnpoint}','update')->name('earnpoints.update');
    Route::delete('/earnpoint/{earnpoint}','destroy')->name('earnpoints.destroy');

});


 
 
 
Route::middleware('auth')->controller(PublicPageController::class)->group(function(){
   
 
 
 
    Route::get('/aboutus','aboutus')->name('aboutus');
    Route::get('/contactus','contactus')->name('contactus');
    Route::get('/faq','faq')->name('faq');
    Route::get('/upcomingEvent','upcomingEvent')->name('upcomingEvent');
    Route::get('/eventDetails/{id}','eventDetails')->name('eventDetails');

 
  
   
 
 

 

});
 

Route::middleware('auth')->controller(PublicProductDetailsController::class)->group(function(){

    Route::get('/bookdetails/{bookdetail}','bookdetails')->name('bookdetails');
 
    Route::get('/donetbookdetails/{donetbookdetail}','donetbookdetails')->name('donetbookdetails');
    // Route::get('/carts/{cart}','cartproduct')->name('carts');
 

 
 
    // Route::get('/donetbookdetails/{donetbookdetail}', 'donetbookdetails')->name('donetbookdetails');
 
    // Route::post('/donetbookdetails/{donetbookdetail}','donetbookdetails')->name('donetbookdetails');
 
    // Route::get('/donetbookdetails/{donetbookdetail}','donetbookdetails')->name('donetbookdetails');
 


 

    Route::get('/cart/{cart}','cart')->name('cart');
 
    Route::get('/payment/{pay}','payment')->name('payment');
    // Route::post('products/{product}/cart','store')
    //  ->name('carts.store');
 


});

Route::middleware('auth')->group(function(){
    Route::get('sellbooks/create',[SellbookController::class,'create'])->name('sellbooks.create');
    Route::post('sellbooks/store',[SellbookController::class,'store'])->name('sellbooks.store');

    Route::get('requestbooks/create',[RequestbookController::class,'create'])->name('requestbooks.create');
    Route::post('requestbooks/store',[RequestbookController::class,'store'])->name('requestbooks.store');

    Route::get('donatebooks/create',[DonatebookController::class,'create'])->name('donatebooks.create');
    Route::post('donatebooks/store',[DonatebookController::class,'store'])->name('donatebooks.store');
    Route::resource('donatebooks.comments',DonetCommentController::class)->shallow();
    Route::resource('sellbooks.comments', CommentController::class)->shallow();

});


Route::middleware('auth','isAdmin')->group(function(){

    //Tag route
    Route::get('/tags/trash', [TagController::class,'trash'])->name('tags.trash');
    Route::patch('/tags/trash/{id}', [TagController::class,'restore'])->name('tags.restore');
    Route::delete('/tags/trash/{id}', [TagController::class,'delete'])->name('tags.delete');
    Route::resource('tags', TagController::class);
    Route::resource('users', UserController::class);
    Route::resource('carousels', CarouselController::class);
 
 
 
    
    Route::resource('products', ProductController::class);

    Route::resource('earnorders', EarnpointController::class);
    
 

 
 
    
 
 
 
    Route::resource('getdonates', Getdonatecontoller::class);
    //category route
    Route::get('/categories/trash', [CategoryController::class,'trash'])->name('categories.trash');
    Route::patch('/categories/trash/{id}', [CategoryController::class,'restore'])->name('categories.restore');
    Route::delete('/categories/trash/{id}', [CategoryController::class,'delete'])->name('categories.delete');
    Route::resource('categories', CategoryController::class);
    //requestbook route
    Route::get('/reqapproved/{id}',[RequestbookController::class,'approved'])->name('reqapproved');
    Route::get('/reqcancle/{id}',[RequestbookController::class,'cancle'])->name('reqcancle');
    Route::get('/requestbooks/trash', [RequestbookController::class,'trash'])->name('requestbooks.trash');
    Route::patch('/requestbooks/trash/{id}', [RequestbookController::class,'restore'])->name('requestbooks.restore');
    Route::delete('/requestbooks/trash/{id}', [RequestbookController::class,'delete'])->name('requestbooks.delete');
    Route::resource('requestbooks', RequestbookController::class)->except('create','store');
    //sellbook route
    Route::get('/sellapproved/{id}',[SellbookController::class,'approved'])->name('sellapproved');
    Route::get('/sellcancle/{id}',[SellbookController::class,'cancle'])->name('sellcancle');
    Route::get('/sellbooks/trash', [SellbookController::class,'trash'])->name('sellbooks.trash');
    Route::patch('/sellbooks/trash/{id}', [SellbookController::class,'restore'])->name('sellbooks.restore');
    Route::delete('/sellbooks/trash/{id}', [SellbookController::class,'delete'])->name('sellbooks.delete');
    Route::resource('sellbooks', SellbookController::class)->except('create','store');

    //Donate-book route
    Route::get('donets/{donet}',[DonetController::class,'Drequest'])->name('donets.create');
    Route::get('/approved/{id}',[DonetController::class,'approved'])->name('approved');
    Route::get('/cancle/{id}',[DonetController::class,'cancle'])->name('cancle');
    Route::get('/donatebooks/trash', [DonatebookController::class,'trash'])->name('donatebooks.trash');
    Route::patch('/donatebooks/trash/{id}', [DonatebookController::class,'restore'])->name('donatebooks.restore');
    Route::delete('/donatebooks/trash/{id}', [DonatebookController::class,'delete'])->name('donatebooks.delete');
    Route::resource('donatebooks', DonatebookController::class)->except('create','store');
    //Event route
    Route::get('/events/trash', [EventController::class,'trash'])->name('events.trash');
    Route::patch('/events/trash/{id}', [EventController::class,'restore'])->name('events.restore');
    Route::delete('/events/trash/{id}', [EventController::class,'delete'])->name('events.delete');

    Route::resource('events', EventController::class);







    Route::get('/user',[UserController::class,'user'])->name('user.register');
    Route::resource('faqs',FaqController::class);
    Route::resource('banners', BannerController::class);
    Route::get('/user',[UserController::class,'user'])->name('user.register');

    Route::resource('faqs',FaqController::class);

});

 
    Route::resource('profiles',ProfileController::class)->middleware('auth');
    
 
    Route::resource('profile',ProfileController::class)->middleware('auth');

 
    Route::post('/faq',[FaqController::class,'store'])->name('faq.store');

    Route::resource('faqs',FaqController::class);



    Route::get('/user',[UserController::class,'user'])->name('user.register');

    Route::middleware('auth','isAdmin')->controller(AdminController::class)->prefix('admin')->group(function(){
        Route::get('/dashboard','dashboard')->name('admin.dashboard');
        Route::get('/productlist','productlist')->name('admin.productlist');
    });



 
 Route::post('products/{product}/cart', [CartController::class, 'store'])
 ->name('carts.store')
 ->middleware('auth');

 

 Route::resource('contacts', ContactUsController::class);
 Route::resource('abouts', AboutController::class);
 Route::get('/aboutus',[AboutController::class,'aboutus'])->name('aboutus');
 Route::get('/useroders/{userorder}',[UserorderController::class,'show'])->name('userorders.show');
 




 



