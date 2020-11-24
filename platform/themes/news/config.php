<?php

use Botble\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });

            // You may use this event to set up your assets.
            $theme->asset()->usePath()
                ->usePath()->add('media_query', 'css/media_query.css')
                ->usePath()->add('bootstrap', 'css/bootstrap.css')
                ->usePath()->add('animate', 'css/animate.css')
                ->usePath()->add('owl.carousel', 'css/owl.carousel.css')
                ->usePath()->add('owl.theme.default', 'css/owl.theme.default.css')
                ->usePath()->add('style', 'css/style_1.css');   
                
                // ->usePath()->add('bootstrap-css', 'plugins/bootstrap/css/bootstrap.min.css')
                // ->usePath()->add('font-awesome', 'plugins/font-awesome/css/font-awesome.min.css');
                // ->usePath()->add('ionicons', 'plugins/ionicons/css/ionicons.min.css')
                // ->usePath()->add('style', 'css/style.css', [], [], '5.5');
            $theme->asset()->container('footer')
                ->usePath()->add('owl.carousel', 'js/owl.carousel.min.js')
                ->usePath()->add('jquery.waypoints', 'js/jquery.waypoints.min.js')
                ->usePath()->add('jquery.stellar', 'js/jquery.stellar.min.js')
                ->usePath()->add('script', 'js/script.js')
                ->usePath()->add('main', 'js/main.js');
            $theme->asset()->container('header')->usePath()->add('modernizr-3.5.0','js/modernizr-3.5.0.min.js');

            if (function_exists('shortcode')) {
                $theme->composer(['index', 'page', 'post'], function (\Botble\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
