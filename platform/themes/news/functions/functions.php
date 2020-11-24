<?php

register_page_template([
    'default' => 'Default'
]);

add_shortcode('featured-posts', 'Featured posts', 'Featured posts', function () {
    return Theme::partial('short-codes.featured-posts');
});

add_shortcode('what-new-posts', 'What\'s new posts', 'What\'s new posts', function () {
    return Theme::partial('short-codes.what-new-posts');
});

add_shortcode('best-for-you-posts', 'Best for you posts', 'Best for you posts', function () {
    return Theme::partial('short-codes.best-for-you-posts');
});

add_shortcode('all-galleries', 'All Galleries', 'All Galleries', function () {
    return Theme::partial('short-codes.all-galleries');
});

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for news theme',
]);

theme_option()
    ->setField([
        'id'         => 'copyright',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Copyright'),
        'attributes' => [
            'name'    => 'copyright',
            'value'   => '© 2020 Botble Technologies. All right reserved.',
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Change copyright'),
                'data-counter' => 250,
            ]
        ],
        'helper' => __('Copyright on footer of site'),
    ]);

add_action('init', function () {
    config(['filesystems.disks.public.root' => public_path('storage')]);
}, 124);
