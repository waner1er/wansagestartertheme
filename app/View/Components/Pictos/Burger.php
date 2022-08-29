<?php

namespace App\View\Components\Pictos;

use Illuminate\View\Component;

class Burger extends Component
{
    public $width;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($width = '1.5em')
    {
        $this->width = $width;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pictos.burger');
    }
}
