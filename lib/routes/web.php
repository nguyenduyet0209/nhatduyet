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

Route::get('/','FrontendController@getHome');
Route::get('detail/{id}/{slug}.html','FrontendController@getDetail');
Route::get('category/{id}/{slug}.html','FrontendController@getCategory');
Route::get('gioi-thieu','FrontendController@getAboutus');
Route::get('lien-he','FrontendController@getContact');
Route::post('lien-he','FrontendController@postContact');
Route::get('complete_contact','FrontendController@getCompleteContact');
//search
Route::get('search','FrontendController@getSearch');

//Cart
Route::group(['prefix'=>'cart'],function (){
	Route::get('add/{id}','CartController@getAddCart');
	Route::get('show','CartController@getShowCart');
	Route::get('delete/{id}','CartController@getDeleteCart');
	Route::get('update','CartController@getUpdateCart');
	Route::post('show','CartController@postComplete');
});
Route::get('complete','CartController@getComplete');


Route::group(['namespace'=>'Admin'],function (){
	//login
	Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function (){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
	});
	//Admin
	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function (){
		//home
		Route::get('home','Homecontroller@getHome');


		// Product Category
		Route::group(['prefix'=>'category'],function (){
			//view page categori
			Route::get('/','CategoryController@getCate');
			// add category
			Route::post('/','CategoryController@postCate');

			// edit category
			Route::get('edit/{id}','CategoryController@getEditCate');
			Route::post('edit/{id}','CategoryController@postEditCate');

			// delete category
			Route::get('delete/{id}','CategoryController@getDeleteCate');
		});

		// Product
		Route::group(['prefix'=>'product'],function (){
			//view page Product
			Route::get('/','ProductController@getProduct');
			// add Product
			Route::get('add','ProductController@getAddProduct');
			Route::post('add','ProductController@postAddProduct');

			// edit Product
			Route::get('edit/{id}','ProductController@getEditProduct');
			Route::post('edit/{id}','ProductController@postEditProduct');

			// delete Product
			Route::get('delete/{id}','ProductController@getDeleteProduct');
		});


		// News Category
		Route::group(['prefix'=>'newscategory'],function (){
			Route::get('/','NewsCategoryController@getNewsCate');
			Route::post('/','NewsCategoryController@postNewsCate');

			Route::get('edit/{id}','NewsCategoryController@getNewsEditCate');
			Route::post('edit/{id}','NewsCategoryController@postNewsEditCate');

			Route::get('delete/{id}','NewsCategoryController@getNewsDeleteCate');
		});

		// News Post
		Route::group(['prefix'=>'news'],function (){
			//view page News
			Route::get('/','NewsController@getNews');
			// add News
			Route::get('add','NewsController@getAddNews');
			Route::post('add','NewsController@postAddNews');

			// edit News
			Route::get('edit/{id}','NewsController@getEditNews');
			Route::post('edit/{id}','NewsController@postEditNews');

			// delete News
			Route::get('delete/{id}','NewsController@getDeleteNews');
		});
	});


	//logout
	Route::get('logout','Homecontroller@getLogOut');
});