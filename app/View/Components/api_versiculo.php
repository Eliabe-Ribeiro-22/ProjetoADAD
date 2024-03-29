<?php

namespace App\View\Components;

use Illuminate\View\Component;

class api_versiculo extends Component
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
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.api-versiculo');
    }
}
