<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\News\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Add your custom route here
        // Ex: Route::get('hello', 'NewsController@getHello');

    });

});

// Theme::routes();

Route::group(['namespace' => 'Theme\News\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Route::get('/', 'NewsController@getIndex')
        //     ->name('public.index2');

        // Route::get('sitemap.xml', 'NewsController@getSiteMap')
        //     ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'NewsController@getView')
            ->name('public.single');

    });
});
