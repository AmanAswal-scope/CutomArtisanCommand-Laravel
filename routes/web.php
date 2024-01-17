<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmittedDataController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ContactpageController;
use App\Http\Middleware\admin_check;

//Route::middleware(['web'])->group( function () {

Route::get('/',function()
{
    return view('main-section.login');
})->name('login.page');

Route::post('/login', [AuthController::class, 'loginPost'])->name('login-post'); 




 //Route::middleware(['auth:admin_check'])->group(function () {
    // routes/web.php

// Route::group(['middleware' => 'check.role:user'], function () {
    Route::get('/home', [AuthController::class, 'dashboard'])->name('home.page');
// });



Route::get('/services', function () {
    return view('main-section.services');
})->name('services.page');


Route::get('/about-us', function () {
    return view('main-section.about-us');
})->name('about.page');


Route::get('/contact-us', function () {
    return view('main-section.contact-us');
})->name('contact.page');

Route::post('/contact-us', [ContactController::class, 'submitForm'])->name('submit.contact.form');


Route::get('/admin',function()
{
return view('main-section.admin');
})->name('adminpanel');





//Home page Edit functionality Route
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/home/edit', [HomeController::class,'showEditForm'])->name('home.edit');
Route::get('/home/view', [HomeController::class,'viewEditForm'])->name('home.view');
Route::post('/home/update', [HomeController::class,'updateHomepage'])->name('home.update');
Route::get('/home/create', [HomeController::class,'createForm'])->name('home.create');
Route::post('/homepages', [HomeController::class,'storeHomepage'])->name('home.store');
Route::get('/home/delete', [HomeController::class,'deleteForm'])->name('home.delete');
Route::post('/homepages/delete', [HomeController::class,'deletehomepage'])->name('home.remove');




//service page Edit functionality Route
 Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/service/edit', [ServiceController::class,'showEditForm'])->name('service.edit');
Route::get('/service/view', [ServiceController::class,'showviewForm'])->name('service.view');
Route::post('/service/update', [ServiceController::class,'updateHomepage'])->name('service.update');
Route::get('/services/create', [ServiceController::class,'createForm'])->name('services.create');
Route::post('/services/store', [ServiceController::class,'storeservicepage'])->name('services.store');
Route::get('/services/delete', [ServiceController::class,'deleteForm'])->name('services.delete');
Route::post('/services/remove', [ServiceController::class,'removeservicepage'])->name('services.remove');


//AboutUs page Edit functionality Route
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus.index');
Route::get('/aboutus/edit', [AboutUsController::class,'showEditForm'])->name('aboutus.edit');
Route::get('/aboutus/view', [AboutUsController::class,'showviewForm'])->name('aboutus.view');
Route::post('/aboutus/update', [AboutUsController::class,'updateHomepage'])->name('aboutus.update');
Route::get('/aboutus/create', [AboutUsController::class,'createForm'])->name('aboutus.create');
Route::post('/aboutus/store', [AboutUsController::class,'storeaboutuspage'])->name('aboutus.store');
Route::get('/aboutus/delete', [AboutUsController::class,'deleteForm'])->name('aboutus.delete');
Route::post('/aboutus/remove', [AboutUsController::class,'removeaboutuspage'])->name('aboutus.remove');



//Contact page Edit functionality Route
Route::get('/contact', [ContactpageController::class, 'index'])->name('contact.index');
Route::get('/contact/edit', [ContactpageController::class,'showEditForm'])->name('contact.edit');
Route::get('/contact/view', [ContactpageController::class,'showviewForm'])->name('contact.view');
Route::post('/contact/update', [ContactpageController::class,'updateHomepage'])->name('contact.update');
Route::get('/contact/create', [ContactpageController::class,'createForm'])->name('contact.create');
Route::post('/contact/store', [ContactpageController::class,'storecontactpage'])->name('contact.store');
Route::get('/contact/delete', [ContactpageController::class,'deleteForm'])->name('contact.delete');
Route::post('/contact/remove', [ContactpageController::class,'removecontactpage'])->name('contact.remove');




//Header page Edit functionality Route
Route::get('/header', [HeaderController::class, 'index'])->name('header.index');
Route::get('/header/edit', [HeaderController::class,'showEditForm'])->name('header.edit');
Route::get('/header/view', [HeaderController::class,'showviewForm'])->name('header.view');
Route::post('/header/update', [HeaderController::class,'updateHomepage'])->name('header.update');
Route::get('/header/create', [HeaderController::class,'createForm'])->name('header.create');
Route::post('/header/store', [HeaderController::class,'storeheaderpage'])->name('header.store');
Route::get('/header/delete', [HeaderController::class,'deleteForm'])->name('header.delete');
Route::post('/header/remove', [HeaderController::class,'removeheaderpage'])->name('header.remove');



//Footer page Edit functionality Route
Route::get('/footer', [FooterController::class, 'index'])->name('footer.index');
Route::get('/footer/edit', [FooterController::class,'showEditForm'])->name('footer.edit');
Route::get('/footer/view', [FooterController::class,'showviewForm'])->name('footer.view');
Route::post('/footer/update', [FooterController::class,'updateHomepage'])->name('footer.update');
Route::get('/footer/create', [FooterController::class,'createForm'])->name('footer.create');
Route::post('/footer/store', [FooterController::class,'storefooterpage'])->name('footer.store');
Route::get('/footer/delete', [FooterController::class,'deleteForm'])->name('footer.delete');
Route::post('/footer/remove', [FooterController::class,'removefooterpage'])->name('footer.remove');

 ?>