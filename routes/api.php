<?php
// Routes prefix, version API
$this->group(['prefix' => 'v1'], function(){
    
    // Routes authentication e refresh token
    $this->post('auth', 'Auth\AuthApiController@authenticate');
    $this->post('auth-refresh', 'Auth\AuthApiController@refreshToken');
   
    // Routes restrict, authentication by JWT: https://github.com/tymondesigns/jwt-auth
	$this->group(['middleware' => []], function () {

		// Controller Resource API, Products
	    $this->apiResource('products', 'Api\v1\ProductController');

	    // Controller Resource API, Tasks
	    $this->apiResource('tasks', 'Api\v1\TaskController');

	});
   
});