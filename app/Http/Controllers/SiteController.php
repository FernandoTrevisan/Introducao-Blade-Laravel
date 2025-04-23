<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index() {
        // Aqui eu poderia criar uma lógica | Verificar se um usuário existe | Buscar dados de um usuário

        // Dados para view --Abre
        $id = 1;
        $name = 'Fernando';
        $last_name = 'Trevisan';
        $age = 19;
        $data_nsc = '01/01/2020';
        $all = [
            'id' => $id,
            'nome' => $name,
            'sobrenome' => $last_name,
            'idade' => $age,
            'data_nasc' => $data_nsc,
            'html' => '<b style="color: red"> Negrito </b>',
        ];
        // --Fecha

        return view('bemvindo', $all);

    }

    //
    public function exit() {
        return view('sair');
    }

    //
    public function users(Request $r) {
        $all = [
            'qtd' => $r->qnt
        ];
        return view('usuario', $all);
    }

    //
    public function condicionais(){
        // Mudar aqui para testar o elseif
        $name = 'Fernando';

        $all = [
            'nome' => $name,
        ];

        $ingredientes = [
            'ingredientes' => [
                'Farinha',
                'ovo',
                'Fermento',
                'Leite',
                'Chocolate',
            ]

        ];
        return view('condicionais',$ingredientes);
    }

    public function exe(){

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Erin',
                'birth' => '29/01/90',
                'idade' => 18],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Andrea',
                'birth' => '10/11/1933',
                'idade' => 25],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Dominique',
                'birth' => '01/01/2020',
                'idade' => 15]
        ];

        $dados['pessoas'] = $pessoas;

        return view('exercicio', $dados);

    }

    public function exec() {

        $numero = 1;


        $url = 'https://i.pravatar.cc/150?img='.$numero;


        $dados['url'] = $url;

        return view('exercio', $dados);
    }

    //
    public function index2(){
        return view('include');
    }

    //
    public function components(){
        return view('comp');
    }

    //
    public function layout(){
        return view('site');
    }

    //
    public function layout2(){
        return view('pagina2');
    }

}
