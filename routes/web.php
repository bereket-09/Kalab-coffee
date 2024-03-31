<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // Make sure the namespace matches your controller's namespace

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'services'])->name('services');
Route::get('/testimonial', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/menu', [PageController::class, 'menus'])->name('menus');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{id}', [PageController::class, 'showBlog'])->name('blog-show');
Route::post('/contact-submit', [PageController::class, 'submit'])->name('contact.submit');

Route::get('/events/{id}', [PageController::class, 'register_event'])->name('event-show');
Route::get('/events', [PageController::class, 'events'])->name('events');

Route::post('/newsletter/subscribe', [PageController::class, 'subscribe'])->name('newsletter.subscribe');

Route::post('/event-register', [PageController::class, 'submitRegistration'])->name('customer.register');
// Route::get('/events/{id}', [PageController::class, 'showEvet'])->name('event-show');

Route::post('/register-event', [PageController::class, 'registerForEvent'])->name('event.register');

