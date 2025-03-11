<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\UserBlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('About-us');
});

Route::get('/blog', function () {
    return view('Blog');
});

Route::get('/career', function () {
    return view('Career');
});

Route::get('/contact', function () {
    return view('ContactUs');
});

Route::get('/printmedia', function () {
    return view('PrintMedia');
});

Route::get('/digitalmedia', function () {
    return view('DigitalMedia');
});

Route::get('/services', function () {
    return view('ServiceDetailPage');
})->name('services');


// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');




Route::get('/admin', [DashboardController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware('auth'); // Ensure this middleware is applied


    
    
    Route::get('user', [DashboardController::class, 'user'])->name('admin.user');
    

    
        Route::get('admin/blogs', [DashboardController::class, 'blog'])->name('admin.blogs.blog');
        Route::get('admin/blogs/create', [DashboardController::class, 'create'])->name('admin.blogs.create');
        Route::post('admin/blogs/create', [DashboardController::class, 'store'])->name('admin.blogs.store');
        Route::get('admin/blogs/edit/{blog}', [DashboardController::class, 'edit'])->name('admin.blogs.edit');
        Route::put('admin/blogs/{blog}/update', [DashboardController::class, 'update'])->name('admin.blogs.update');
        Route::delete('admin/blogs/{blog}', [DashboardController::class, 'destroy'])->name('admin.blogs.destroy');
 
    

    // Route to display all blogs
Route::get('/blog', [UserBlogController::class, 'index'])->name('user.blogs.index');
Route::get('/getBlogDetails/{id}', [UserBlogController::class, 'getBlogDetails']);

// Route to show a single blog post
Route::get('/blog/{id}', [UserBlogController::class, 'show'])->name('user.blogDetail');



// Routes for Home and About Us
Route::get('/admin/home', [CardController::class, 'indexHome'])->name('admin.home');
Route::get('/admin/about', [CardController::class, 'indexAbout'])->name('admin.about');

// Existing routes for Print and Digital Media
Route::get('/admin/printmedia', [CardController::class, 'indexPrintMedia'])->name('admin.printmedia');
Route::get('/admin/digitalmedia', [CardController::class, 'indexDigitalMedia'])->name('admin.digitalmedia');

// Routes for Create, Edit, Update, and Delete Cards
Route::get('/admin/create-card', [CardController::class, 'create'])->name('admin.cards.create');
Route::post('/admin/cards/store', [CardController::class, 'store'])->name('admin.cards.store');
Route::get('/admin/cards/{id}/edit', [CardController::class, 'edit'])->name('admin.cards.edit');
Route::put('/admin/cards/{id}', [CardController::class, 'update'])->name('admin.cards.update');
Route::delete('/admin/cards/{id}', [CardController::class, 'destroy'])->name('admin.cards.destroy');




Route::get('/printmedia', [UserBlogController::class, 'indexPrintMedia'])->name('user.printmedia');
Route::get('/digitalmedia', [UserBlogController::class, 'indexDigitalMedia'])->name('user.digitalmedia');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/contact/edit', [ContactController::class, 'edit'])->name('admin.contact.edit');
    Route::post('/admin/contact/update', [ContactController::class, 'update'])->name('admin.contact.update');
    Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact.index');
    Route::get('/admin/contact/create', [ContactController::class, 'create'])->name('admin.contact.create');
    Route::post('/admin/contact/store', [ContactController::class, 'store'])->name('admin.contact.store');

});



Route::get('/contact', [MessageController::class, 'create']); // For showing the form
Route::post('/contact', [MessageController::class, 'store']); // For form submission
Route::post('/home', [MessageController::class, 'store'])->name('home.contact');
Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages')->middleware('auth');
Route::post('/admin/messages/{message}/reply', [MessageController::class, 'reply'])->middleware('auth');
Route::get('/admin', [MessageController::class, 'showDashboard'])->name('admin.dashboard');
Route::delete('/admin/messages/{message}', [MessageController::class, 'destroy'])->name('admin.messages.destroy');



Route::get('/', [TeamController::class, 'home'])->name('/');
Route::get('/about', [TeamController::class, 'about'])->name('about');
Route::get('/printmedia', [TeamController::class, 'printmedia'])->name('printmedia');
Route::get('/digitalmedia', [TeamController::class, 'digitalmedia'])->name('digitalmedia');
Route::get('admin/team', [TeamController::class, 'index'])->name('teams.index'); 
Route::get('admin/team/create', [TeamController::class, 'create'])->name('teams.create'); 
Route::post('admin/team', [TeamController::class, 'store'])->name('teams.store'); 
Route::get('admin/team/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit'); 
Route::put('admin/team/{team}', [TeamController::class, 'update'])->name('teams.update'); 
Route::delete('admin/teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::get('jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
    Route::get('jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
});

Route::get('/career', [JobController::class, 'show'])->name('jobs.show');
Route::post('/career', [JobApplicationController::class, 'store'])->name('apply.job');
Route::get('/admin/applications', [JobApplicationController::class, 'index'])->name('jobs.applications')->middleware('auth');
Route::delete('applications/{id}', [JobApplicationController::class, 'destroy'])->name('applications.destroy');
