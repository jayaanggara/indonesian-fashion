<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Auth\LoginMemberController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginMemberController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginMemberController::class, 'login']);
// Auth::routes();
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login.admin');
Route::post('/admin/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard/admin', [DashboardController::class, 'IndexAdmin'])->name('dashboard.admin');
Route::get('/dashboard/member', [DashboardController::class, 'IndexMember'])->name('dashboard.member');


Route::get('membership', [WebController::class, 'membership'])->name('web.membership');
Route::get('about', [WebController::class, 'about'])->name('web.about');
Route::get('contact-us', [WebController::class, 'ContactUs'])->name('web.contact-us');

Route::get('detail-event', [EventController::class, 'DetailEvent'])->name('event.detail-event');
Route::resource('events', EventController::class);

Route::get('detail-news', [NewsController::class, 'DetailNews'])->name('news.detail-news');
Route::resource('news', NewsController::class);

Route::get('detail-member', [MemberController::class, 'DetailMember'])->name('member.detail-member');

Route::resource('member', MemberController::class);
