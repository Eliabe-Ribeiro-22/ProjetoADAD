<?php

namespace App\Http\Controllers;

// used for to save students
use Illuminate\Http\Request;
use App\Models\User;

// used for error handling of catch
use Exception;

class ChurchController extends Controller
{
    public function index()
    {
        // API BIBLIA - Vou desativar, pois vou trabalhar com CSS
        // Ela tem limite de requisicoes por hora
        #$api = "https://www.abibliadigital.com.br/api/verses/nvi/sl/91/1";
        #$dailyVerse = json_decode(file_get_contents($api), true);
        $dailyVerse = ['a', 'b'];
        return view('igreja.index', ['dailyVerse' => $dailyVerse]);
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
