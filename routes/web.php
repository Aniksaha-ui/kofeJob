<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontPageController@index');   

Route::get('/user/logout','HomeController@logout')->name('user.logout');


//for Designer
Route::group(['middleware' => 'App\Http\Middleware\Designer'],function(){
   
    Route::get('/designer-project-proposals', 'Designer\PostController@index')->name('designer-project-proposals');

    Route::get('/designer-ongoing-projects','Designer\PostController@ongoingProject')->name('designer-ongoing-projects');
    
    Route::get('/designer-cancelled-projects', 'Designer\PostController@cancelledProject');
    
    Route::get('/designer-completed-projects','Designer\PostController@completedProject');

    Route::get('/proposal-view-project','Designer\PostController@projectDetails');

   
        //for show customers post and details in designer Dashboard and for bitting
        Route::get('/designer-milestones','Designer\DesignerSellerPostController@index')->name('designer-milestones');
        Route::get('/tasks','Designer\DesignerSellerPostController@viewProject')->name('tasks');
        
        //store proposal data
        Route::post('/proposal-insert','Designer\DesignerSellerPostController@store')->name('proposal.insert');
        //store proposal data
        //for show customers post and details in designer Dashboard

});



//For Seller

 Route::group(['middleware' => 'App\Http\Middleware\Seller'],function(){
    //post a customer requirement 
        Route::get('/post-project','Designer\PostController@create');
    Route::post('/post-project','Designer\PostController@store')->name('designerpost.insert');
    //seller posts management
    Route::get('/manage-projects', 'Seller\SellerPostingController2@index')->name('manage-projects');
    Route::get('/view-project-detail','Seller\SellerPostingController2@viewDetails')->name('view-project-detail');
    //seller posts management

    //Designers profile
    Route::get('/degisner','Seller\SellerPostingController2@viewDesigner')->name('degisner');
    //have to update
    Route::get('/designer-details','Seller\SellerPostingController2@viewDesignerDetails')->name('designer-details');
    //have to update

    //hired a developer
     Route::post('/hire-now','Seller\DesignerHireProcessController@store')->name('designerhire.insert');
    
    //hired a developer 



});







// Route::get('/blank-page', function () {
//     return view('blank-page');  
// })->name('blank-page');
// Route::get('/blog-details', function () {
//     return view('blog-details');
// })->name('blog-details');
// Route::get('/blog-grid', function () {
//     return view('blog-grid');
// })->name('blog-grid');
// Route::get('/blog-list', function () {
//     return view('blog-list');
// })->name('blog-list');
// Route::get('/cancelled-projects', function () {
//     return view('cancelled-projects');
// })->name('cancelled-projects');
// Route::get('/change-password', function () {
//     return view('change-password');
// })->name('change-password');
// Route::get('/chats', function () {
//     return view('chats');
// })->name('chats');
// Route::get('/completed-projects', function () {
//     return view('completed-projects');
// })->name('completed-projects');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
// Route::get('/delete-account', function () {
//     return view('delete-account');
// })->name('delete-account');
// Route::get('/deposit-funds', function () {
//     return view('deposit-funds');
// })->name('deposit-funds');
// Route::get('/degisner-details', function () {
//     return view('degisner-details');
// })->name('degisner-details');
// Route::get('/degisner', function () {
//     return view('degisner');
// })->name('degisner');
// Route::get('/edit-project', function () {
//     return view('edit-project');
// })->name('edit-project');
// Route::get('/faq', function () {
//     return view('faq');
// })->name('faq');
// Route::get('/favourites', function () {
//     return view('favourites');
// })->name('favourites');
// Route::get('/files', function () {
//     return view('files');
// })->name('files');
// Route::get('/forgot-password', function () {
//     return view('forgot-password');
// })->name('forgot-password');
// Route::get('/designer-cancelled-projects', function () {
//     return view('designer-cancelled-projects');
// })->name('designer-cancelled-projects');
// Route::get('/designer-change-password', function () {
//     return view('designer-change-password');
// })->name('designer-change-password');
// Route::get('/designer-chats', function () {
//     return view('designer-chats');
// })->name('designer-chats');
// Route::get('/designer-completed-projects', function () {
//     return view('designer-completed-projects');
// })->name('designer-completed-projects');
// Route::get('/designer-dashboard', function () {
//     return view('designer-dashboard');
// })->name('designer-dashboard');
// Route::get('/designer-delete-account', function () {
//     return view('designer-delete-account');
// })->name('designer-delete-account');
// Route::get('/designer-favourites', function () {
//     return view('designer-favourites');
// })->name('designer-favourites');
// Route::get('/designer-files', function () {
//     return view('designer-files');
// })->name('designer-files');
// Route::get('/designer-invitations', function () {
//     return view('designer-invitations');
// })->name('designer-invitations');
// Route::get('/designer-invoices', function () {
//     return view('designer-invoices');
// })->name('designer-invoices');
// Route::get('/designer-membership', function () {
//     return view('designer-membership');
// })->name('designer-membership');
// Route::get('/designer-milestones', function () {
//     return view('designer-milestones');
// })->name('designer-milestones');
// Route::get('/designer-ongoing-projects', function () {
//     return view('designer-ongoing-projects');
// })->name('designer-ongoing-projects');
// Route::get('/designer-payment', function () {
//     return view('designer-payment');
// })->name('designer-payment');
// Route::get('/designer-portfolio', function () {
//     return view('designer-portfolio');
// })->name('designer-portfolio');
// Route::get('/designer-profile-settings', function () {
//     return view('designer-profile-settings');
// })->name('designer-profile-settings');
// Route::get('/designer-profile', function () {
//     return view('designer-profile');
// })->name('designer-profile');
// // Route::get('/designer-project-proposals', function () {
// //     return view('designer-project-proposals');
// // })->name('designer-project-proposals');
// Route::get('/designer-review', function () {
//     return view('designer-review');
// })->name('designer-review');
// Route::get('/designer-task', function () {
//     return view('designer-task');
// })->name('designer-task');
// Route::get('/designer-transaction-history', function () {
//     return view('designer-transaction-history');
// })->name('designer-transaction-history');
// Route::get('/designer-verify-identity', function () {
//     return view('designer-verify-identity');
// })->name('designer-verify-identity');
// Route::get('/designer-view-project-detail', function () {
//     return view('designer-view-project-detail');
// })->name('designer-view-project-detail');
// Route::get('/designer-withdraw-money', function () {
//     return view('designer-withdraw-money');
// })->name('designer-withdraw-money');
// Route::get('/invited-freelancer', function () {
//     return view('invited-freelancer');
// })->name('invited-freelancer');

// Route::get('/manage-projects', function () {
//     return view('manage-projects');
// })->name('manage-projects');
// Route::get('/membership-plans', function () {
//     return view('membership-plans');
// })->name('membership-plans');
// Route::get('/milestones', function () {
//     return view('milestones');
// })->name('milestones');
// Route::get('/ongoing-projects', function () {
//     return view('ongoing-projects');
// })->name('ongoing-projects');
// Route::get('/pending-projects', function () {
//     return view('pending-projects');
// })->name('pending-projects');
// Route::get('/post-job', function () {
//     return view('post-job');
// })->name('post-job');
// Route::get('/post-project', function () {
//     return view('post-project');
// })->name('post-project');
// Route::get('/privacy-policy', function () {
//     return view('privacy-policy');
// })->name('privacy-policy');
// Route::get('/profile-settings', function () {
//     return view('profile-settings');
// })->name('profile-settings');
// Route::get('/project-details', function () {
//     return view('project-details');
// })->name('project-details');
// Route::get('/project-payment', function () {
//     return view('project-payment');
// })->name('project-payment');
// Route::get('/project-proposals', function () {
//     return view('project-proposals');
// })->name('project-proposals');
// Route::get('/project', function () {
//     return view('project');
// })->name('project');

// Route::get('/review', function () {
//     return view('review');
// })->name('review');
// Route::get('/tasks', function () {
//     return view('tasks');
// })->name('tasks');
// Route::get('/term-condition', function () {
//     return view('term-condition');
// })->name('term-condition');
// Route::get('/transaction-history', function () {
//     return view('transaction-history');
// })->name('transaction-history');
// Route::get('/user-account-details', function () {
//     return view('user-account-details');
// })->name('user-account-details');
// Route::get('/verify-identity', function () {
//     return view('verify-identity');
// })->name('verify-identity');
// Route::get('/view-invoice', function () {
//     return view('view-invoice');
// })->name('view-invoice');
// Route::get('/view-profile', function () {
//     return view('view-profile');
// })->name('view-profile');
// Route::get('/view-project-detail', function () {
//     return view('view-project-detail');
// })->name('view-project-detail');
// Route::get('/view-proposals', function () {
//     return view('view-proposals');
// })->name('view-proposals');
// Route::get('/withdraw-money', function () {
//     return view('withdraw-money');
// })->name('withdraw-money');

// /*****************ADMIN ROUTES*******************/
// Route::Group(['prefix' => 'admin'], function () { 
// Route::get('/bid-fees', function () {
//     return view('admin.bid-fees');
// })->name('bid-fees');
// Route::get('/categories', function () {
//     return view('admin.categories');
// })->name('categories');
// Route::get('/change-password', function () {
//     return view('admin.change-password');
// })->name('change-password');
// Route::get('/components', function () {
//     return view('admin.components');
// })->name('components');
// Route::get('/contest-entry-fees', function () {
//     return view('admin.contest-entry-fees');
// })->name('contest-entry-fees');
// Route::get('/contests-fees', function () {
//     return view('admin.contests-fees');
// })->name('contests-fees');
// Route::get('/data-tables', function () {
//     return view('admin.data-tables');
// })->name('data-tables');
// Route::get('/delete-account', function () {
//     return view('admin.delete-account');
// })->name('delete-account');
// Route::get('/email-settings', function () {
//     return view('admin.email-settings');
// })->name('email-settings');
// Route::get('/fees', function () {
//     return view('admin.fees');
// })->name('fees');
// Route::get('/forgot-password', function () {
//     return view('admin.forgot-password');
// })->name('forgot-password');
// Route::get('/form-basic-inputs', function () {
//     return view('admin.form-basic-inputs');
// })->name('form-basic-inputs');
// Route::get('/form-horizontal', function () {
//     return view('admin.form-horizontal');
// })->name('form-horizontal');
// Route::get('/form-input-groups', function () {
//     return view('admin.form-input-groups');
// })->name('form-input-groups');
// Route::get('/form-mask', function () {
//     return view('admin.form-mask');
// })->name('form-mask');
// Route::get('/form-validation', function () {
//     return view('admin.form-validation');
// })->name('form-validation');
// Route::get('/form-vertical', function () {
//     return view('admin.form-vertical');
// })->name('form-vertical');
// Route::get('/index_admin', function () {
//     return view('admin.index_admin');
// })->name('index_admin');
// Route::get('/localization-details', function () {
//     return view('admin.localization-details');
// })->name('localization-details');

// Route::get('/others-settings', function () {
//     return view('admin.others-settings');
// })->name('others-settings');
// Route::get('/payment-settings', function () {
//     return view('admin.payment-settings');
// })->name('payment-settings');
// Route::get('/payment-settings', function () {
//     return view('admin.payment-settings');
// })->name('payment-settings');
// Route::get('/profile', function () {
//     return view('admin.profile');
// })->name('profile');
// Route::get('/projects', function () {
//     return view('admin.projects');
// })->name('projects');
// Route::get('/projects-fees', function () {
//     return view('admin.projects-fees');
// })->name('projects-fees');
// Route::get('/providers', function () {
//     return view('admin.providers');
// })->name('providers');

// Route::get('/reports', function () {
//     return view('admin.reports');
// })->name('reports');
// Route::get('/roles', function () {
//     return view('admin.roles');
// })->name('roles');
// Route::get('/roles-permission', function () {
//     return view('admin.roles-permission');
// })->name('roles-permission');
// Route::get('/seo-settings', function () {
//     return view('admin.seo-settings');
// })->name('seo-settings');
// Route::get('/settings', function () {
//     return view('admin.settings');
// })->name('settings');
// Route::get('/skills', function () {
//     return view('admin.skills');
// })->name('skills');
// Route::get('/social-links', function () {
//     return view('admin.social-links');
// })->name('social-links');
// Route::get('/social-settings', function () {
//     return view('admin.social-settings');
// })->name('social-settings');
// Route::get('/sub-category', function () {
//     return view('admin.sub-category');
// })->name('sub-category');
// Route::get('/tables-basic', function () {
//     return view('admin.tables-basic');
// })->name('tables-basic');
// Route::get('/taxs', function () {
//     return view('admin.taxs');
// })->name('taxs');
// Route::get('/tax-types', function () {
//     return view('admin.tax-types');
// })->name('tax-types');
// Route::get('/users', function () {
//     return view('admin.users');
// })->name('users');
// Route::get('/verify-identity', function () {
//     return view('admin.verify-identity');
// })->name('verify-identity');
// Route::get('/view-estimate', function () {
//     return view('admin.view-estimate');
// })->name('view-estimate');
// Route::get('/view-invoice', function () {
//     return view('admin.view-invoice');
// })->name('view-invoice');
// });
