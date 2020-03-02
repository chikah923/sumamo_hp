<?php

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

// Route::get('/', function () {return view('welcome');});
//Route::get('/', 'WelcomeController@index')->name('blog');
//Route::get('/blog/post/{post}', [PostController::class, 'show'])->name('blog.post');
//Route::get('/blog/category/{category}', 'WelcomeController@category')->name('blog.category');
//Route::get('/blog/tag/{tag}', 'WelcomeController@tag')->name('blog.tag');



Auth::routes(['register' => true, 'verify' => true]);
Route::post('/register-complete', 'Auth\RegisterController@completeRegistration')->name('register.complete');
Route::get('/reauth', 'Admin\otpController@reauthenticate')->name('2fa.reauth');
Route::post('/2fa', function () { return redirect(URL()->previous()); })->name('2fa')->middleware('2fa');


Route::get('login/{platform}', 'Auth\LoginController@redirectToProvider')->where('platform', 'google|linkedin|facebook|twitter')->name('social.login');
Route::get('login/{platform}/fallback', 'Auth\LoginController@handleProviderCallback')->where('platform', 'google|linkedin|facebook|twitter')->name('social.fallback');
Route::redirect('/home', '/dashboard');




// ホーム
Route::get('/', function () { return view('index');});


// 会社概要 Controllerは経由しない
Route::get('/company', function () { return view('company.about_us');});
Route::get('/company/about_us', function () { return view('company.about_us_variant');});
Route::get('/company/why_us', function () { return view('company.why_us_variant');});
Route::get('/company/contact_us', function () { return view('company.get_in_touch');});
Route::get('/company/visit_us', function () { return view('company.make_an_appointment');});


// ZONES  カテゴリはController経由
Route::get('/zones', function () { return view('zones.services');});
Route::get('/zones/{zone_category}', 'ZonesController@getPage');
// Route::get('/zones/residential', function () { return view('zones.content_boxes');});
// Route::get('/zones/corporate', function () { return view('zones.content_boxes');});
// Route::get('/zones/hospitality', function () { return view('zones.content_boxes');});
// Route::get('/zones/commercial', function () { return view('zones.content_boxes');});
// Route::get('/zones/education', function () { return view('zones.content_boxes');});


// SOLUTIONS  Todo:カテゴリはController経由
Route::get('/solutions', function () { return view('solutions.services');});
Route::get('/solutions/{solution_category}', 'SolutionsController@getPage');
// Route::get('/solutions/automation', function () { return view('solutions.content_boxes');});
// Route::get('/solutions/security', function () { return view('solutions.content_boxes');});
// Route::get('/solutions/sensors', function () { return view('solutions.content_boxes');});
// Route::get('/solutions/electronics', function () { return view('solutions.content_boxes');});
// Route::get('/solutions/networking', function () { return view('solutions.content_boxes');});


// プラン  Todo:カテゴリはController経由
Route::get('/plans', function () { return view('plans.pricing_and_plans');});
Route::get('/plans/{plan_category}', 'PlansController@getPage');
// Route::get('/plans/basic', function () { return view('plans.pricing');});
// Route::get('/plans/lite', function () { return view('plans.pricing');});
// Route::get('/plans/standard', function () { return view('plans.pricing');});
// Route::get('/plans/advanced', function () { return view('plans.pricing');});
// Route::get('/plans/elite', function () { return view('plans.pricing');});


// サービス一覧  Todo:カテゴリはController経由
Route::get('/services', function () { return view('services.services');});
Route::get('/services/{service_caterogy}', 'ServicesController@getPage');
// Route::get('/services/consultancy', function () { return view('services.content_boxes');});
// Route::get('/services/designing', function () { return view('services.content_boxes');});
// Route::get('/services/training_and_skills', function () { return view('services.content_boxes');});
// Route::get('/services/maintainance', function () { return view('services.content_boxes');});


// SHOP
Route::get('/shop', function () { return view('shop.categories');});


// BLOG
// 一覧はblog-default-both-sidebar、詳細がblog-default-single
Route::get('/blog', 'WelcomeController@index');
Route::get('/blog/post/{post}', 'WelcomeController@showPost')->name('blog.post');
Route::get('/blog/category/{category}', 'WelcomeController@category')->name('blog.category');
Route::get('/blog/tag/{tag}', 'WelcomeController@tag')->name('blog.tag');


// フッター　Privacy Policy  テンプレートはothersディレクトリに入れてる
Route::get('/privacy_policy', function () { return view('others/privacy_policy');});
Route::get('/faq', function () { return view('others/faq');});
Route::get('/legal', function () { return view('others/legal');});
Route::get('/careers', function () { return view('others/careers');});
Route::get('/gallery', function () { return view('others/gallery');});

// 機能
Route::post('/company/contact_us/confirm', 'ContactUsController@confirm');
Route::post('/company/contact_us/send', 'ContactUsController@send');
Route::get('/sample/mailable/preview', function () {return new App\Mail\AutoNotification();});






// auth only routes
Route::group(['middleware' => ['auth', '2fa', 'profilecomplete', 'verified']], function () {

    /* Dashboard */
    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('dashboard/profile', 'DashboardController@profile')->name('dashboard.profile');
    Route::put('dashboard/profile', 'DashboardController@updateProfile')->name('dashboard.user.update');
    Route::put('dashboard/profile/update', 'ProfileController@update')->name('dashboard.profile.update');
    Route::post('dashboard/profile/media', 'ProfileController@storeMedia')->name('profile.storeMedia');

    /* notifications */
    Route::get('dashboard/notifications', 'NotificationsController@index')->name('notifications');
    Route::get('dashboard/notifications/unread', 'NotificationsController@unreadlist')->name('notifications.unread');
    Route::get('dashboard/notifications/markalltoasted', 'NotificationsController@markalltoasted')->name('notifications.markalltoasted');
    Route::get('dashboard/notifications/markallread', 'NotificationsController@markallread')->name('notifications.markallread');

    /* todos */
    Route::get('dashboard/user/todos', 'TodoController@index')->name('todos.index');


    /* Profile */
    Route::get('profile', function () { return redirect('profile/my-profile'); });
    Route::get('profile/my-profile', 'ProfileController@myProfile')->name('profile.my-profile');


    /* blog */
    Route::resource('dashboard/blog/categories', 'CategoriesController');
    Route::resource('dashboard/blog/tags', 'TagsController');
    Route::resource('dashboard/blog/posts', 'PostsController');
    Route::get('dashboard/blog/trashed-posts', 'PostsController@trashed')->name('posts.trashed');
    Route::put('dashboard/blog/posts/{post}/restore', 'PostsController@restore')->name('posts.restore');

});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

 // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

});
