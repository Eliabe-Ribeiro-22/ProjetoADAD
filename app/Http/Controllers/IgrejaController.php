<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IgrejaController extends Controller
{
    public function index()
    {
        return view('igreja.index');
    }

    public function createFormIgreja()
    {
        try {
            return view('igreja.form');
        } catch (Exception $e) {
            echo "Ocorreu um erro ao exibir o formulário de contato";
            echo "</br>";
        }
    }

    public function createProjetos()
    {
        try {
            return view('igreja.projetos');
        } catch (Exception $e) {
            echo "Ocorreu um erro ao exibir os nossos eventos!";
            echo "</br>";
        }
    }

    public function createInstitucional()
    {
        try {
            return view('igreja.institucional');
        } catch (Exception $e) {
            echo "Ocorreu um erro ao exibir os nossos eventos!";
            echo "</br>";
        }
    }
    public function createNossasReunioes()
    {
        try {
            return view('igreja.nossas-reunioes');
        } catch (Exception $e) {
            echo "Ocorreu um erro ao exibir os nossos eventos!";
            echo "</br>";
        }
    }
}
