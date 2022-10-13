<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ForgotPasswordController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\DashboardController;

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


//----------------------------------------------------------------------------------------------------------------------








// - - - - - - - API - - - - - - - - - - - - - -
//Route::get('/api/general/sign-up', [SignUpController::class, 'ApiSignUp'])->name('api.general.sign-up');
// - - - - - - -/API - - - - - - - - - - - - - -



//----------------------------------------------------------------------------------------------------------------------
Route::get('/', [HomeController::class, 'home'])->name('frontend.home');
Route::get('/game', [HomeController::class, 'game'])->name('frontend.game');

Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/download', [HomeController::class, 'download'])->name('frontend.download');
Route::get('/explore', [HomeController::class, 'explore'])->name('frontend.explore');
Route::get('/live', [HomeController::class, 'live'])->name('frontend.live');

Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('frontend.privacyPolicy');
Route::get('/cookies-policy', [HomeController::class, 'cookiesPolicy'])->name('frontend.cookiesPolicy');
Route::get('/delivery-information', [HomeController::class, 'deliveryInformation'])->name('frontend.deliveryInformation');

Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');






Route::get('/news', [HomeController::class, 'news'])->name('frontend.news');
Route::get('/news/{slug}', [HomeController::class, 'newsDetails'])->name('frontend.newsDetails');


//Route::get('/language', [HomeController::class, 'language'])->name('frontend.language');
//Route::get('/subscribe', [HomeController::class, 'subscribe'])->name('frontend.subscribe');




Route::get('/mobile/index', [mobileController::class, 'index'])->name('mobile.index');
Route::get('/mobile/become-a-partner', [mobileController::class, 'becomeAPartner'])->name('mobile.becomeAPartner');




Route::group(['middleware' => ['web', 'web.loginRedirection']], function () {


    //  For Web Application

    Route::get('sign-in', [SignInController::class, 'signIn'])->name('frontend.signIn');

    Route::get('sign-up', [SignUpController::class, 'signUp'])->name('frontend.signUp');
    Route::get('sign-up/admin', [SignUpController::class, 'signUpAdmin'])->name('frontend.signUpAdmin');
    Route::get('sign-up/agency', [SignUpController::class, 'signUpAgency'])->name('frontend.signUpAgency');
    Route::get('sign-up/host', [SignUpController::class, 'signUpHost'])->name('frontend.signUpHost');
    Route::get('sign-up/top-up-agent', [SignUpController::class, 'signUpAgent'])->name('frontend.signUpAgent');
    Route::get('sign-up/user', [SignUpController::class, 'signUpUser'])->name('frontend.signUpUser');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('frontend.forgotPassword');
    Route::get('/validate-code', [ForgotPasswordController::class, 'validateCode'])->name('frontend.validateCode');
    Route::get('/reset-password', [ForgotPasswordController::class, 'changePassword'])->name('frontend.changePassword');
});






Route::group(['middleware' => ['web', 'web.preventBackHistory']], function () {

    Route::group(['middleware' => ['web', 'web.isLogin']], function () {






        Route::get('/alert', [DashboardController::class, 'alert'])->name('backend.alert');



        //---------------------------------Social-----------------------------------------




        Route::get('/profile', [SocialController::class, 'profile'])->name('social.profile');
        Route::get('/profile/{slug}', [SocialController::class, 'otherProfile'])->name('social.otherProfile');


        Route::get('/newsfeed', [SocialController::class, 'newsfeed'])->name('social.newsfeed');
        Route::get('/messages', [SocialController::class, 'messages'])->name('social.messages');
        Route::get('/notifications', [SocialController::class, 'notifications'])->name('social.notifications');

        Route::get('/settings', [SocialController::class, 'notifications'])->name('social.settings');
        Route::get('/change-password', [SocialController::class, 'changePassword'])->name('social.changePassword');
        Route::get('/search', [SocialController::class, 'search'])->name('social.search');

        Route::get('/packages', [SocialController::class, 'packages'])->name('social.packages');
        Route::get('/subscribe', [SocialController::class, 'subscribe'])->name('social.subscribe');


        Route::get('/verification', [SignInController::class, 'verification'])->name('frontend.verification');



        //---------------------------------Social-----------------------------------------








        //---------------------------------Panel-----------------------------------------

        Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('backend.dashboard');


        Route::get('/admin/user/administrators/list', [DashboardController::class, 'administrators'])->name('backend.administrators');
        Route::get('/admin/user/admins/list', [DashboardController::class, 'admins'])->name('backend.admins');
        Route::get('/admin/user/hosts/list', [DashboardController::class, 'hosts'])->name('backend.hosts');
        Route::get('/admin/user/agents/list', [DashboardController::class, 'agents'])->name('backend.agents');
        Route::get('/admin/user/users/list', [DashboardController::class, 'users'])->name('backend.users');
        Route::get('/admin/user/block/list', [DashboardController::class, 'blockUsers'])->name('backend.blockUsers');

        Route::get('/admin/agencies/list', [DashboardController::class, 'agencies'])->name('backend.agencies');

        Route::get('/admin/notifications/list', [DashboardController::class, 'notifications'])->name('backend.notifications');

        Route::get('/admin/transactions/list', [DashboardController::class, 'transactions'])->name('backend.transactions');

        Route::get('/admin/advertisements/list', [DashboardController::class, 'advertisements'])->name('backend.advertisements');

        //Route For Banners:
        Route::get('/admin/banners', [BannerController::class, 'index'])->name('banner.List');
        Route::post('/admin/banners-store', [BannerController::class, 'store'])->name('banner.store');
        Route::delete('/admin/banners-delete/{id}', [BannerController::class, 'destroy'])->name('banner.delete');
        Route::post('/admin/update-status', [BannerController::class, 'updateStatus'])->name('banner.updateStatus');
        //Route For Banners end


        Route::get('/admin/newsfeeds/list', [DashboardController::class, 'newsfeeds'])->name('backend.newsfeeds');

        Route::get('/admin/stories/list', [DashboardController::class, 'stories'])->name('backend.stories');

        Route::get('/admin/stores/list', [DashboardController::class, 'stores'])->name('backend.stores');


        Route::get('/admin/streaming/audio/list', [DashboardController::class, 'audioStreaming'])->name('backend.audioStreaming');
        Route::get('/admin/streaming/video/list', [DashboardController::class, 'videoStreaming'])->name('backend.videoStreaming');



        Route::get('/admin/news/list', [DashboardController::class, 'news'])->name('backend.news');
        Route::get('/admin/blog/list', [DashboardController::class, 'blog'])->name('backend.blog');




        Route::get('/admin/subscribers/list', [DashboardController::class, 'subscribers'])->name('backend.subscribers');

        Route::get('/admin/contacts/list', [DashboardController::class, 'contacts'])->name('backend.contacts');

        Route::get('/admin/faqs/list', [DashboardController::class, 'faqs'])->name('backend.faqs');





        Route::get('/admin/onboard/admin', [DashboardController::class, 'onboardAdmin'])->name('backend.onboardAdmin');
        Route::get('/admin/onboard/top-up-agent', [DashboardController::class, 'onboardTopUpAgent'])->name('backend.onboardTopUpAgent');

        Route::get('/admin/category/parent', [DashboardController::class, 'parentCategories'])->name('backend.parentCategories');
        Route::get('/admin/category/child', [DashboardController::class, 'childCategories'])->name('backend.childCategories');
        Route::get('/admin/category/sub-child', [DashboardController::class, 'subChildCategories'])->name('backend.subChildCategories');

        Route::get('/admin/settings', [DashboardController::class, 'settings'])->name('backend.settings');

        Route::get('/admin/setting/profile', [DashboardController::class, 'profileSettings'])->name('backend.profileSettings');
        Route::get('/admin/setting/change-password', [DashboardController::class, 'changePassword'])->name('backend.changePassword');
        Route::get('/admin/setting/website', [DashboardController::class, 'websiteSettings'])->name('backend.websiteSettings');

        Route::get('/sign-out', [SignOutController::class, 'signOut'])->name('backend.signOut');




        //-------------------------------------------------------------------------------















        //        Route::get('/admin/posts', [DashboardController::class, 'posts'])->name('backend.posts');


        //        Route::get('/admin/news', [DashboardController::class, 'news'])->name('backend.news');
        //        Route::get('/admin/tutorials-and-articles', [DashboardController::class, 'tutorialsAndArticles'])->name('backend.tutorialsAndArticles');
        //        Route::get('/admin/database', [DashboardController::class, 'database'])->name('backend.database');
        //        Route::get('/admin/knowledge', [DashboardController::class, 'knowledge'])->name('backend.knowledge');
        //
        //
        //        Route::get('/admin/notifications', [DashboardController::class, 'notifications'])->name('admin.notifications');

        //        Route::get('/admin/packages', [DashboardController::class, 'packages'])->name('backend.packages');

        //        Route::get('/admin/countries', [DashboardController::class, 'countries'])->name('backend.countries');
        //        Route::get('/admin/provinces', [DashboardController::class, 'provinces'])->name('backend.provinces');
        //        Route::get('/admin/cities', [DashboardController::class, 'cities'])->name('backend.cities');
        //        Route::get('/admin/areas', [DashboardController::class, 'areas'])->name('backend.areas');
        //        Route::get('/admin/locations', [DashboardController::class, 'locations'])->name('backend.locations');




    });
});






route::get('/setting/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'Cleared';
});

route::get('/setting/storage', function () {
    $exitCode = Artisan::call('storage:link');
    return 'Storage Done';
});


route::get('/setting/key-generate', function () {
    $exitCode = Artisan::call('key:generate');
    return 'Key Generated';
});
