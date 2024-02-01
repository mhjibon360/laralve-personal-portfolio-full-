<?php

use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ClientItemController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\FooterTopController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\HomeAboutController;
use App\Http\Controllers\Backend\PortfolioCategoryController;
use App\Http\Controllers\Backend\portfolioItemController;
use App\Http\Controllers\Backend\SectionCaptionController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SkillItemController;
use App\Http\Controllers\Backend\TypeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserAccountController;

use App\Models\User;
use Illuminate\Support\Facades\Route;

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

// ========== all frontend routes=========================//
Route::controller(FrontendController::class)->group(function () {
  Route::get('/', 'index')->name('home');
  Route::get('portfolio', 'portfolio')->name('portfolio');
  Route::get('portfolio/details/{id}/{slug}', 'portfolioDetails')->name('portfolio.details');
  Route::get('blog', 'blog')->name('blog');
  Route::get('blog/details/{id}/{slug}', 'blogDetails')->name('blog.details');
  Route::get('all/portfolio', 'allportfolio')->name('all.portfolio');
  Route::get('all/blog', 'allBlog')->name('all.blog');
  Route::get('author/blog/{name}', 'authorBlog')->name('author.blog');

  //cv download
  Route::get('cv/download', 'cvDwonload')->name('cv.download')->middleware(['auth', 'verified']);
  // user send message
  Route::post('send/message/', 'sendMessage')->name('send.messaeg');
});
// user protected routes
Route::controller(UserAccountController::class)->middleware(['auth', 'verified'])->group(function () {
  Route::get('dashboard', 'index')->name('dashboard');
  Route::put('change/profile/', 'changeProfile')->name('change.profile');
  Route::put('change/password', 'changePassword')->name('change.password');
  Route::delete('delete', 'delete')->name('delete.account');
});

// ========== all frontend routes end=========================//

require __DIR__ . '/auth.php';

// ====================================all backend routes=================================
// admin login page
Route::get('admin-login', [BackendController::class, 'adminLogin'])->name('admin.login');
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {
  /**all backend controllers routes */
  Route::controller(BackendController::class)->group(function () {
    Route::get('dashboard', 'index')->name('admin.dashboard');
    Route::get('admin/logout', 'adminLogout')->name('amdin.logout');

    //user message all routes
    Route::get('view/user/message/{id}', 'viewUserMessage')->name('user.message.view');
    Route::get('delete/user/message/{id}', 'deletUserMessage')->name('user.message.delete');
  });

  /**admin account profile controller routes */
  Route::controller(AdminProfileController::class)->group(function () {
    Route::get('edit/profile/', 'editProfile')->name('edit.profile');
    Route::put('update/profile/', 'updateProfile')->name('update.profile');
    Route::put('update/password', 'UpdatePassword')->name('update.password');
  });

  /**all type routes */
  Route::resource('type', TypeController::class);
  /** all hero/banner/home routes */
  Route::controller(HeroController::class)->group(function () {
    Route::get('edit/home', 'edit')->name('edit.home');
    Route::put('update/home/{id}', 'update')->name('update.home');
  });

  /**all services routes */
  Route::resource('services', ServicesController::class);

  /** home about all routes  */
  Route::controller(HomeAboutController::class)->group(function () {
    Route::get('edit/home/about/', 'edit')->name('edit.home.about');
    Route::put('upate/home/about/{id}', 'update')->name('update.home.about');
  });

  /**portfolio category all routes */
  Route::resource('portfolio-category', PortfolioCategoryController::class);
  Route::resource('portfolio-item', portfolioItemController::class);

  /** skil item  */
  Route::resource('skill-item', SkillItemController::class);
  /** manage experience sections */
  Route::controller(ExperienceController::class)->group(function () {
    Route::get('edit/experience', 'edit')->name('edit.experience');
    Route::put('update/experience/{id}', 'update')->name('update.experience');
  });

  /** all single client routes */
  Route::resource('client-item', ClientItemController::class);

  //==========================blog all backend routes
  /** blog category all routes */
  Route::resource('blog-category', BlogCategoryController::class);
  /** blog item all routes */
  Route::resource('blog-item', BlogController::class);

  /** footer top all routes */
  Route::controller(FooterTopController::class)->group(function () {
    Route::get('footer/top/content/edit', 'footerTop')->name('edit.footer.top');
    Route::put('footer/top/content/update/{id}', 'footerTopUpdate')->name('update.footer.top');
  });

  // footer manage all routes
  Route::controller(FooterController::class)->group(function () {
    Route::get('footer/edit', 'edit')->name('footer.edit');
    Route::put('footer/update/{id}', 'update')->name('footer.update');
  });

  /** all general setting and seo setting routes */
  Route::controller(SettingController::class)->group(function () {
    Route::get('/change/setting', 'settingpage')->name('setting.page');
    // general setting
    Route::get('general/setting/', 'generalSettingEdit')->name('general.setting');
    Route::put('general/setting/update/{id}', 'generalSettingUpdate')->name('general.setting.update');
    // seo setting
    Route::get('seo/setting/', 'seoSettingEdit')->name('seo.setting');
    Route::put('seo/setting/update/{id}', 'seoSettingUpdate')->name('seo.setting.update');
  });

  // ========================section caption all rkoutes=================================
  Route::controller(SectionCaptionController::class)->group(function () {
    // portfolio caption
    Route::get('portfolio-caoption/edit', 'portfolioCaptionedit')->name('edit.portfolioCaoption');
    Route::put('portfolio-caoption/update/{id}', 'portfolioCaptionupdate')->name('update.portfolioCaoption');

    // portfolio caption
    Route::get('skill-caoption/edit', 'skillCaptionedit')->name('edit.skillCaoption');
    Route::put('skill-caoption/update/{id}', 'skillCaptionupdate')->name('update.skillCaoption');

    // client caption
    Route::get('client-caoption/edit', 'clientCaptionedit')->name('edit.clientCaoption');
    Route::put('client-caoption/update/{id}', 'clientCaptionupdate')->name('update.clientCaoption');

    // blog caption
    Route::get('blog-caoption/edit', 'blogCaptionedit')->name('edit.blogCaoption');
    Route::put('blog-caoption/update/{id}', 'blogCaptionupdate')->name('update.blogCaoption');
    // contact caption
    Route::get('contact-caoption/edit', 'contactCaptionedit')->name('edit.contactCaoption');
    Route::put('contact-caoption/update/{id}', 'contactCaptionupdate')->name('update.contactCaoption');
  });
  // ========================end section caption all rkoutes=================================

});
// ====================================all backend routes end=================================
