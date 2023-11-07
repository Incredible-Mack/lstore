<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadCrumb extends Component
{
  
    public $heading;
    public $links;
    public function __construct($heading, $links)
    {
        $this->heading = $heading;
        $this->links = $links;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bread-crumb');
    }
}
