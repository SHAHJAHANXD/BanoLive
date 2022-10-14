<?php

use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\API\SubscriberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\VehicleController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\QuoteController;
use App\Http\Controllers\API\InvoiceController;
use App\Http\Controllers\API\NotificationController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\LeaveController;
use App\Http\Controllers\API\CheckInOutController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('forgot', [UserController::class, 'forgot']);
Route::post('validate', [UserController::class, 'validateCode']);
Route::post('change-password', [UserController::class, 'changePassword']);
Route::post('/updatepassword', [UserController::class, 'updatepassword']);
Route::post('login', [UserController::class, 'login']);
Route::post('sign-up/user/social-sign-up', [UserController::class, 'SignUpSocialUser']);
Route::post('user/forgetpassword', [UserController::class, 'forgetpassword']);
Route::get('/user/verifyotp', [UserController::class, 'verifyotp'])->middleware('auth:api');


Route::post('sign-up/upload/user/picture', [UserController::class, 'signUpUploadUserPicture']);
Route::post('sign-up/upload/user/resume', [UserController::class, 'signUpUploadUserResume']);

Route::post('sign-up/upload/user/id/front', [UserController::class, 'signUpUploadUserIDFront']);
Route::post('sign-up/upload/user/id/back', [UserController::class, 'signUpUploadUserIDBack']);





Route::post('sign-up/admin', [UserController::class, 'SignUpAdmin']);
Route::post('sign-up/agency', [UserController::class, 'SignUpAgency']);
Route::post('sign-up/host', [UserController::class, 'SignUpHost']);

Route::post('sign-up/agent', [UserController::class, 'SignUpAgent']);
Route::post('sign-up', [UserController::class, 'SignUpUser']);

Route::post('/user/resend-code', [UserController::class, 'resendCode']);




Route::post('user/validate/email', [UserController::class, 'userValidateEmail']);
Route::post('user/validate/number', [UserController::class, 'userValidateNumber']);
Route::post('user/validate/admin/code', [UserController::class, 'userValidateAdminCode']);
Route::post('user/validate/agency/code', [UserController::class, 'userValidateAgencyCode']);



Route::post('user/approve', [UserController::class, 'userApprove']);
Route::post('user/block', [UserController::class, 'userBlock']);
Route::post('user/unblocked', [UserController::class, 'userUnblocked']);
Route::post('user/delete', [UserController::class, 'userDelete']);

Route::post('user/update', [UserController::class, 'userUpdate']);

Route::post('user/profile/picture/upload', [UserController::class, 'uploadProfilePicture']);
Route::post('user/profile/picture/delete', [UserController::class, 'deleteProfilePicture']);

Route::post('user/profile/banner/upload', [UserController::class, 'uploadProfileBanner']);
Route::post('user/profile/banner/delete', [UserController::class, 'deleteProfileBanner']);



Route::post('agency/approve', [UserController::class, 'agencyApprove']);
Route::post('agency/block', [UserController::class, 'agencyBlock']);
Route::post('agency/unblocked', [UserController::class, 'agencyUnblocked']);
Route::post('agency/delete', [UserController::class, 'agencyDelete']);




Route::post('onboard/admin/create', [UserController::class, 'onboardAdminCreate']);
Route::post('onboard/top-up-agent/create', [UserController::class, 'onboardTopUpAgentCreate']);
Route::post('onboard/delete', [UserController::class, 'onboardDelete']);




Route::post('contact/create', [UserController::class, 'contactCreate']);
Route::post('contact/delete', [UserController::class, 'contactDelete']);
Route::post('contact/view', [UserController::class, 'contactView']);



//Routes for Banners:
Route::get('banners/list', [BannerController::class, 'getListOfbanners']);
//End Routes for Banners


Route::post('faq/create', [UserController::class, 'faqCreate']);
Route::post('faq/delete', [UserController::class, 'faqDelete']);
Route::post('faq/edit', [UserController::class, 'faqEdit']);
Route::post('faq/update', [UserController::class, 'faqUpdate']);
Route::post('faq/view', [UserController::class, 'faqView']);


Route::post('category/parent/create', [UserController::class, 'categoryParentCreate']);
Route::post('category/parent/delete', [UserController::class, 'categoryParentDelete']);
Route::post('category/parent/edit', [UserController::class, 'categoryParentEdit']);
Route::post('category/parent/update', [UserController::class, 'categoryParentUpdate']);
Route::post('category/parent/view', [UserController::class, 'categoryParentView']);


Route::post('category/child/create', [UserController::class, 'categoryChildCreate']);
Route::post('category/child/delete', [UserController::class, 'categoryChildDelete']);
Route::post('category/child/edit', [UserController::class, 'categoryChildEdit']);
Route::post('category/child/update', [UserController::class, 'categoryChildUpdate']);
Route::post('category/child/view', [UserController::class, 'categoryChildView']);


Route::post('category/sub-child/create', [UserController::class, 'categorySubChildCreate']);
Route::post('category/sub-child/delete', [UserController::class, 'categorySubChildDelete']);
Route::post('category/sub-child/edit', [UserController::class, 'categorySubChildEdit']);
Route::post('category/sub-child/update', [UserController::class, 'categorySubChildUpdate']);
Route::post('category/sub-child/view', [UserController::class, 'categorySubChildView']);





Route::post('contact', [UserController::class, 'contact']);
Route::post('faq/create', [UserController::class, 'faqCreate']);




Route::post('subscriber/create', [SubscriberController::class, 'create']);
Route::post('subscriber/delete', [SubscriberController::class, 'delete']);
Route::post('subscriber/edit', [SubscriberController::class, 'edit']);
Route::post('subscriber/update', [SubscriberController::class, 'update']);
Route::post('subscriber/view', [SubscriberController::class, 'view']);



Route::post('notification/create', [NotificationController::class, 'create']);
Route::post('notification/delete', [NotificationController::class, 'delete']);
Route::post('notification/edit', [NotificationController::class, 'edit']);
Route::post('notification/update', [NotificationController::class, 'update']);
Route::post('notification/view', [NotificationController::class, 'view']);



Route::post('transaction/create', [NotificationController::class, 'transactionCreate']);





Route::post('news/create', [NewsController::class, 'create']);
Route::post('news/delete', [NewsController::class, 'delete']);
Route::post('news/edit', [NewsController::class, 'edit']);
Route::post('news/update', [NewsController::class, 'update']);
Route::post('news/view', [NewsController::class, 'view']);
Route::post('news/upload/thumbnail', [NewsController::class, 'uploadThumbnail']);



Route::post('setting/website', [SettingController::class, 'update']);

Route::post('setting/change-password', [SettingController::class, 'changePassword']);







Route::post('newsfeed/create', [UserController::class, 'NewsFeedCreate']);
Route::post('newsfeed/delete', [UserController::class, 'NewsFeedDelete']);
Route::post('newsfeed/report', [UserController::class, 'NewsFeedReport']);
Route::post('newsfeed/gallery/upload', [UserController::class, 'newsfeedGalleryUpload']);
Route::post('newsfeed/gallery/delete', [UserController::class, 'newsfeedGalleryDelete']);








Route::get('story/view', [UserController::class, 'storyView']);
Route::post('story/create', [UserController::class, 'storyCreate']);
Route::post('story/delete', [UserController::class, 'storyDelete']);
Route::post('story/report', [UserController::class, 'storyReport']);
Route::post('story/gallery/upload', [UserController::class, 'storyGalleryUpload']);
Route::post('story/gallery/delete', [UserController::class, 'storyGalleryDelete']);













Route::post('live/create', [UserController::class, 'liveCreate']);










Route::post('social/to-be-following', [SettingController::class, 'toBeFollowing']);
Route::post('social/follow', [SettingController::class, 'follow']);
Route::post('social/unfollow', [SettingController::class, 'unfollow']);

Route::post('social/remove-follower', [SettingController::class, 'followerRemove']);
Route::post('social/follow-back', [SettingController::class, 'followBack']);















Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});
