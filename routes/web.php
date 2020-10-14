<?php

/*
|
*/

Route::get('/user_login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/home', 'LoginController@home');
Route::get('/sign_up', 'LoginController@signUp');
Route::post('/registration', 'LoginController@sign_up_reg');
Route::post('/registration_2', 'LoginController@sign_up_reg_2');

Route::get('/backend', 'LoginController@admin_login');
Route::post('/admin_sign_up', 'LoginController@admin_login_in');
Route::get('/reg_form', 'LoginController@employer_reg');
Route::post('/reg_form', 'LoginController@employer_reg_submit');

Route::get('/users', 'JobController@general_user');
Route::get('/cmp_details', 'JobController@company_details');

Route::get('/admin', 'JobController@index');
Route::get('/edit_jobCategory/{id}', 'JobController@edit');
Route::post('/update_category_job', 'JobController@update');
Route::get('/Deltete_job/{id}', 'JobController@edit');
Route::get('/add_job', 'JobController@add');
Route::post('/store_category_job', 'JobController@store');

Route::get('/add_job_posts/{id}', 'JobController@add_posts');
Route::get('/job_posts', 'JobController@jobs_posts');
Route::get('/job_approve', 'JobController@jobs_posts');
Route::post('/store_job_post', 'JobController@job_store');
Route::get('/edit_jobPost/{id}', 'JobController@editPost');
Route::post('/update_jobs', 'JobController@update_jobs');
Route::get('/job_applicants', 'JobController@job_applicants');

Route::get('/front_posts/{id}', 'JobController@front_posts');
Route::get('/apply_job/{id}', 'JobController@front_post_details');

Route::get('/apply_now/{user_id}/{job_id}', 'JobController@post_apply');
Route::post('/upload_cv', 'JobController@upload_cv');

Route::post('/contact_form', 'JobController@contact_form');
Route::get('/content-show', 'JobController@show_contract');

Route::get('/add_post/{id}', 'JobController@add_post_company');
Route::get('/approve_post/{id}', 'JobController@approve');

Route::get('/upapprove_post/{id}', 'JobController@upapprove');

Route::get('/view_profile_company/{id}', 'JobController@view_company');
Route::get('/self_view/{id}', 'JobController@self_view');
Route::get('/view_all_applicants/{id}', 'JobController@view_applicants');
Route::get('/view_profile_applicants/{id}', 'JobController@view_applicant_profile');
Route::get('/edit_profile/{id}', 'JobController@edit_profile');
Route::get('/send_message/{user_id}/{company_id}/{job_post_id}', 'JobController@send_message');
Route::post('/send_sms', 'JobController@store_message');
Route::get('/messages/{id}', 'JobController@all_message');

Route::get('/logout', 'LoginController@logout');
