<?php

use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'guest'],
    function () {
        Route::get('/categories', \App\Categories\Actions\GetCategoriesAction::class);
        Route::get('category/{category}', \App\Categories\Actions\GetCategoryAction::class);//null value
        Route::post('categories', \App\Categories\Actions\CreateCategoryAction::class);
        Route::post('category/{category}', \App\Categories\Actions\UpdateCategoryAction::class);
        //================ posts ====================
        Route::get('/posts', \App\Posts\Actions\GetPostsAction::class);
          }
);
