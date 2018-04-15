<?php
Route:: resource('register','RegisterController');

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register.register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/users', function () {
    return view('user_list');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});

Route::get('/adminlogin', function () {
    return view('Admin.admin_login');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/quali', function () {
    return view('qualification');
});



Route::get('/userinsert', function () {
    return view('user_insert');
});
Route::get('/makepost', function () {
    return view('post.make_post');
});

Route::get('/posts', function () {
    return view('post.post_list');
});
Route::get('/postinsert', function () {
    return view('post.post_insert');
});

Route::get('/postdetails', function () {
    return view('post.post_details');
});

Route::get('/allpost', function () {
    return view('post.allpost');
});

Route::get('/postcoments', function () {
    return view('comment.coment');
});
Route::get('/allcoment', function () {
    return view('comment.allcoment');
});

Route::get('/editcoment', function () {
    return view('comment.edit_coment');
});

Route::get('/apply', function () {
    return view('apply.apply');
});

Route::get('/applylist', function () {
    return view('apply.applylist');
});


Route::get('/editapply', function () {
    return view('apply.edit_apply');
});
Route::get('/applyinsert', function () {
    return view('apply.apply_insert');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::post('/job_apply','ApplyController@store');
Route::get('/applylist','ApplyController@all_applies');
Route::get('/editapply&{id}','ApplyController@edit');
Route::post('/updateapply&{id}','ApplyController@update');
Route::get('/delete_apply&{id}','ApplyController@delete_apply');
Route::post('/applyinsert','ApplyController@admin_insert');







Route::post('/coment','CommentController@storedata');
Route::get('/postcoments&{id}','CommentController@show_comments');
Route::get('/allcoment','CommentController@show_allcomments');
Route::get('/editcoment&{id}','CommentController@edit');
Route::post('/updatecoment&{id}','CommentController@update');

Route::get('/delete_coment&{id}','CommentController@delete_comment');





Route::post('/post_action','PostController@store');
Route::get('/posts','PostController@show_posts');
Route::get('/allpost','PostController@all_posts');
Route::get('/edit_post&{id}','PostController@edit');
Route::post('/update_post&{id}','PostController@update');
Route::get('/delete_post&{id}','PostController@delete_post');
Route::post('/admin_post_insert','PostCOntroller@admin_inset_post');
Route::get('/postdetails&{id}','PostController@show_post_details');


Route::get('/admin_check','RegisterController@admin_profile');
Route::post('/register_action','RegisterController@store');
Route::post('/admin_insert','RegisterController@admin_inset_user');


Route::post('/login_check','RegisterController@login');
Route::get('/users','RegisterController@show_users');

Route::get('/quali&{id}','RegisterController@edit_quali');
Route::post('/quali_action&{id}','RegisterController@update_quali');
Route::get('/edit_user&{id}','RegisterController@edit');
Route::post('/update&{id}','RegisterController@update');
Route::get('/details&{id}','RegisterController@show_details');

Route::get('/edit_profile&{id}','RegisterController@edit_profile');
Route::post('/update_profile&{id}','RegisterController@update_profile');
Route::get('/delete_user&{id}','RegisterController@delete_user');


Route::get('/logout',function(){
	Auth:: logout();
	return Redirect:: to('');
})->middleware("auth");
	
	
