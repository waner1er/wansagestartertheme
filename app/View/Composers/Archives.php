<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Archives extends Composer {
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'components.archive-item',
        'home',
        'components.home-archive-loop'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with() {
        return [
            'categories' => get_categories(),
            'thumbnail'  => $this->thumbnail(),
            'permalink'  => get_permalink(),
            'title'      => get_the_title(),
            'excerpt'    => get_the_excerpt(),

        ];
    }

    public function thumbnail() {
        $post = get_post();
        if ( ! isset( $post->ID ) ) {
            return;
        } else {
            $thumbnail = wp_get_attachment_image( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
        }

        return $thumbnail;
    }
}
