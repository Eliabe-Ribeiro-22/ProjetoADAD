<?php

namespace App\View\Components;

use Illuminate\View\Component;

class botoes_acao_form extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $alunos;
    public $alterar;
    
    public function __construct($alunos, $alterar)
    {
        $this->alunos = $alunos;
        $this->alterar = $alterar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.adad.area_restrita.botoes_acao_form');
    }
}
