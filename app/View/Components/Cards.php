<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cards extends Component
{

    public $count,  $title;
    public function __construct($title, $count,  )
    {
        $this->title = $title;
        $this->count = $count;
        // $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards');
    }
}
