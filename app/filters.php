<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});


add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    }

    return $title;
});


add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }

    return $classes;
}, 1, 3);

add_filter('nav_menu_submenu_css_class', function ($classes, $args) {
    if (isset($args->add_sub_menu_ul_class)) {
        $classes[] = $args->add_sub_menu_ul_class;
    }

    return $classes;
}, 1, 2);


add_filter('get_custom_logo', function ($html) {
    $custom_logo_id = get_theme_mod('custom_logo');

    $html = sprintf(
        '<a href="%1$s" class="custom-logo-link r1-custom-logo" rel="home" itemprop="url">%2$s</a>',
        esc_url(home_url('/')),
        wp_get_attachment_image($custom_logo_id, 'r1-logo', false, array(
            'class' => 'r1-custom-logo__img',
        ))
    );

    return $html;
});




