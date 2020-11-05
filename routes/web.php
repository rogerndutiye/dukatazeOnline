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

 Route::get('lang/{locale}', function ($locale) {
     session()->put('locale',$locale);
     return redirect()->back();
 });
 
 Route::get('info', function () {
     $promotion=phpinfo();
     return  Response::json($promotion);
 });
 
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('about-us', function () {
    return view('about');
});
Route::get('/', 'IndexController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/category','CategoryController@store');
Route::get('categorysave','CategoryController@getSave');
Route::resource('categoryManage','CategoryController'); 
Route::get('/delete/{id}','CategoryController@delete');
Route::get('/editCategory/{id}','CategoryController@edit');
Route::post('updateCategory','CategoryController@update');


//category type
Route::get('categoryTypeManage','CategoryTypeController@index');
Route::post('/categorytype','CategoryTypeController@store');
Route::get('categorytypesave','CategoryTypeController@getSave');
Route::get('/deletecategorytype/{id}','CategoryTypeController@delete');

// our work
Route::resource('our-works','WorkController');
Route::get('work/change/{id}/{status}','WorkController@setStatus');
Route::get('deleteproduct/{id}','WorkController@destroyStory');


//product
Route::get('productManage','ProductController@index');
Route::post('/product','ProductController@store');
Route::get('productsave','ProductController@getSave');
Route::get('/deleteproduct/{id}','ProductController@delete');
Route::get('/publish/{id}/{status}','ProductController@publish');
// Route::get('/productsave','ProductController@getCattype');

//questions
Route::get('questions','QuestionsController@indexpub');
Route::get('get/reply/{id}','QuestionsController@getReply');
Route::get('questionManage','QuestionsController@index');
Route::post('/question','QuestionsController@store');
Route::get('questionsave','QuestionsController@getSave');
Route::get('/deletequestion/{id}','QuestionsController@delete');
Route::get('/questionreply/{id}','QuestionsController@edit');
Route::post('questionreplysave','QuestionsController@reply');
Route::get('questionscount','HomeController@countQuestion');


//frontend design
Route::get('vision','IndexController@getVision');
Route::get('mission','IndexController@getMission');
Route::get('productview','IndexController@productView');
Route::get('storieview','IndexController@getStories');
Route::get('/send/send_feedback', 'IndexController@sendFeedback');
Route::post('/send/order', 'IndexController@sendorder');
 

Route::get('storiesManage','StoriesController@index');
Route::post('/stories','StoriesController@store');
Route::get('/edit/{id}','StoriesController@editone');
Route::get('storiesave','StoriesController@getSave');
Route::post('stories/update/{id}','StoriesController@update');
Route::get('/deletestorie/{id}','StoriesController@destroyStory');
Route::get('story/change/{id}/{status}','StoriesController@setStatus');


//MENTOR
Route::get('mentorManage','MentorControl@index');
Route::post('/mentor','MentorControl@store');
Route::get('mentorsave','MentorControl@getSave');

//CARRER
Route::get('carrerManage','CarrerTrajectorController@index');
Route::post('/carrer','CarrerTrajectorController@store');
Route::get('carrersave','CarrerTrajectorController@getSave');
Route::get('mentorname','CarrerTrajectorController@getMentor');

//frontend save carrer
Route::get('careertrajectory','IndexController@getSaveCarrer');
Route::post('/storecarrer','IndexController@storeCarrer');
