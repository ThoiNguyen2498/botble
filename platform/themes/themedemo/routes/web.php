<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\Themedemo\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::get('/services','ThemedemoController@getServices');
        Route::get('/contact','ThemedemoController@getContact');
        Route::get('/blog','ThemedemoController@getBlog');
    });

});

Theme::routes();

Route::group(['namespace' => 'Theme\Themedemo\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'ThemedemoController@getIndex')
            ->name('public.index');

        Route::get('sitemap.xml', 'ThemedemoController@getSiteMap')
            ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'ThemedemoController@getView')
            ->name('public.single');

    });
});
