<?php

use App\Models\Method;
use App\Models\Convention;
use App\Models\HigherOrgan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublishController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\OAVPublishController;
use App\Http\Controllers\HigherOrganController;
use App\Http\Controllers\BusinessTripController;
use App\Http\Controllers\TrainingCourseController;
use App\Http\Controllers\YoungEconomistController;
use App\Http\Controllers\ScientificCouncilController;
use App\Http\Controllers\ScientificSeminarController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/index', [Controller::class, 'getBusinessTripCounts'])->name('index.getBusinessTripCounts');
    Route::get('/regionAdmin',[Controller::class,'getRegionsCounts'])->name('regionAdmin.getRegionsCounts');
    Route::get('/business_trips', [BusinessTripController::class,'index'])->name('business_trips.index');
    Route::get('/higher_admin', [HigherOrganController::class,'indexAdmin'])->name('higher_admin.indexAdmin');
    Route::get('/business_admin', [BusinessTripController::class,'indexAdmin'])->name('business_admin.indexAdmin');
    Route::get('/ev_admin', [EventController::class,'indexAdmin'])->name('ev_admin.indexAdmin');
    Route::get('/convent_admin', [ConventionController::class,'indexAdmin'])->name('convent_admin.indexAdmin');
    Route::get('/sorov_admin', [SurveyController::class,'indexAdmin'])->name('sorov_admin.indexAdmin');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('training_courses', TrainingCourseController::class);
    Route::resource('higher_organs', HigherOrganController::class);
    Route::resource('publishes', PublishController::class);
    Route::resource('conventions',ConventionController::class);
    Route::resource('scientific',ScientificCouncilController::class);
    Route::resource('seminar',ScientificSeminarController::class);
    Route::resource('event',EventController::class);
    Route::resource('region',RegionController::class);
    Route::resource('survay',SurveyController::class);
});

Route::middleware(['auth', 'role:editor'])->group(function () {
    Route::resource('business_trips', BusinessTripController::class);
});

Route::middleware(['auth', 'role:moderator'])->group(function () {
    Route::resource('meeting', MeetingController::class);
});

Route::middleware(['auth', 'role:author'])->group(function () {
    Route::resource('methods', MethodController::class);
});

Route::middleware(['auth', 'role:subscriber'])->group(function () {
    Route::resource('young_economists', YoungEconomistController::class);
});

Route::middleware(['auth', 'role:noner'])->group(function () {
    Route::resource('oavpublish',OAVPublishController::class);
});





require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
