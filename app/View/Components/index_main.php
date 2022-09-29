<?php

namespace App\View\Components;

use Illuminate\View\Component;

class index_main extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $dailyVerse;
    
    public function __construct($dailyVerse)
    {
        $this->dailyVerse = $dailyVerse;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index.index_main');
    }
}
