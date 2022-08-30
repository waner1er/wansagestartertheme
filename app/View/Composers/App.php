<?php

namespace App\View\Composers;

use JetBrains\PhpStorm\ArrayShape;
use Roots\Acorn\View\Composer;

class App extends Composer
{

    public $r1_breadcrumbs_data;
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName'   => $this->siteName(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

}
