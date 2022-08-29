<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer {

    public $socials;
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.footer',
        'components.social-links'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with() {
        return [
            'socials' => $this->r1_get_socials()

        ];
    }

    public function r1_get_socials() {
        $socials = [
            [
                'slug'  => 'facebook',
                'url'   => carbon_get_theme_option( 'r1_social_url_facebook' ),
                'order' => carbon_get_theme_option( 'r1_social_url_facebook_number' )
            ],
            [
                'slug'  => 'twitter',
                'url'   => carbon_get_theme_option( 'r1_social_url_twitter' ),
                'order' => carbon_get_theme_option( 'r1_social_url_twitter_number' )
            ],
            [
                'slug'  => 'instagram',
                'url'   => carbon_get_theme_option( 'r1_social_url_instagram' ),
                'order' => carbon_get_theme_option( 'r1_social_url_instagram_number' )
            ],
            [
                'slug'  => 'pinterest',
                'url'   => carbon_get_theme_option( 'r1_social_url_pinterest' ),
                'order' => carbon_get_theme_option( 'r1_social_url_pinterest_number' )
            ],
            [
                'slug'  => 'whatsapp',
                'url'   => carbon_get_theme_option( 'r1_social_url_whatsapp' ),
                'order' => carbon_get_theme_option( 'r1_social_url_whatsapp_number' )
            ],
            [
                'slug'  => 'youtube',
                'url'   => carbon_get_theme_option( 'r1_social_url_youtube' ),
                'order' => carbon_get_theme_option( 'r1_social_url_youtube_number' )
            ],
            [
                'slug'  => 'linkedin',
                'url'   => carbon_get_theme_option( 'r1_social_url_linkedin' ),
                'order' => carbon_get_theme_option( 'r1_social_url_linkedin_number' )
            ],
            [
                'slug'  => 'tiktok',
                'url'   => carbon_get_theme_option( 'r1_social_url_tiktok' ),
                'order' => carbon_get_theme_option( 'r1_social_url_tiktok_number' )
            ],
        ];
        return $socials;
    }
}
