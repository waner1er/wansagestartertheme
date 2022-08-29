<?php

namespace App\View\Composers;

use Illuminate\View\View;
use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
        'page',
        'page-header'
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title'     => $this->title(),
            'excerpt'   => get_the_excerpt(),
            'content'   => get_the_content(),
            'thumbnail' => $this->thumbnail(),
            'permalink' => get_permalink(),
            'logo' => get_custom_logo('full')
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return post_type_archive_title('', false);
        }
        if (is_search()) {
            return sprintf(
            /* translators: %s is replaced with the search query */
            /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    public function thumbnail()
    {
        $post = get_post();
        if (! isset($post->ID)) {
            return;
        } else {
            $thumbnail = wp_get_attachment_image(get_post_thumbnail_id($post->ID), 'thumbnail');
        }

        return $thumbnail;
    }
}
