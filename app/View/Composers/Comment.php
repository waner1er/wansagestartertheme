<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Comment extends Composer {
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.comments'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with() {
        return [
            'comments' => $this->comments(),
        ];
    }

    public function comments() {

        $post_id  = get_the_ID();
        $args     = array(
            'number'  => '0',
            'post_id' => $post_id,
        );
        $comments = get_comments( $args );

        return $comments;
    }
}
