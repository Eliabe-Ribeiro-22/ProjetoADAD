<?php

namespace App\View\Components;

use Illuminate\View\Component;

class formularioCadAlterar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $alunos;
    public $aluno;
    public $alterar;
    
    public function __construct($alunos, $aluno, $alterar)
    {
        $this->alunos = $alunos;
        $this->aluno = $aluno;
        $this->alterar = $alterar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.adad.area_restrita.formulario_cad_alterar');
    }
}
