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

/***************************************************************************/


Route::group(['middleware' => ['auth', 'admin']], function(){
    /**Dashboard */
    Route::get('/dashboard','Admin\DashboardController@dashboard');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}', 'Admin\DashboardController@registerdelete');
    
    /**User Profile */
    Route::get('/role-register','Admin\RegisterController@register');
    Route::post('/save-register','Admin\RegisterController@store');
    /**Topic validation */
    Route::get('/view-topic','Admin\TopicController@topic');
    Route::get('/topic-edit/{id}','Admin\TopicController@topicedit');
    Route::put('/topic-update/{id}','Admin\TopicController@topicupdate');
});


 Route::group(['middleware' => ['auth', 'influent']], function(){

    Route::get('/influent-profile', function () {
      return view('influent.influent-profile');
    });   

    Route::get('/my-info', 'Influent\InfoController@index')->name('my-info');
    Route::post('/my-info-update','Influent\InfoController@infoupdate');
});


Route::group(['middleware' => ['auth']], function(){

Route::get('/accueil', 'PubController@index')->name('pubs.index');
Route::get('/profiles', 'Influent\ProfilesController@index');
Route::get('/influent-profile/{user}', 'Influent\ProfilesController@show')->name('profile.show');

/**User Profile */
Route::get('/my-profil', 'ProfilController@index')->name('my-profil');
Route::post('/my-profil-update','ProfilController@profilupdate');

 /**User Topics****/
Route::get('/topics', 'TopicController@index')->name('topics.index');
Route::get('/mytopic', 'MyTopicController@index')->name('topics.ind');
 
});


/**Pubs ****/
Route::resource('pubs', 'PubController')->except(['index']);

 /**Topics */
Route::resource('topics', 'TopicController')->except(['index']);
Route::get('showFromNotification/{topic}/{notification}', 'TopicController@showFromNotification')->name('topics.showFromNotification');

Route::post('/comments/{topic}', 'CommentController@store')->name('comments.store');
Route::post('/commentReply/{comment}', 'CommentController@storeCommentReply')->name('comments.storeReply');
Route::post('/markedAsSolution/{topic}/{comment}', 'CommentController@markedAsSolution')->name('comments.markedAsSolution');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Auth\AuthController@index');
