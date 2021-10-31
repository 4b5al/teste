<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publicacao;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
       return view('home');
    }
    
    public function salvar(Request $request){
        //inclusão
        if($request->input('_token') != '' && $request->input('id') == ''){

            $regras = [
                'titulo' => 'required|min:2|max:40',
                'data' => 'required',
                'mensagem' => 'required'
            ];

            $feedback = [
                'required' => 'Todos os campos devem ser preenchidos'
            ];

            $request->validate($regras, $feedback);


            $publicacao = new publicacao();
            $publicacao->create($request->all());
            

        }

        //edição
        if($request->input('_token') != '' && $request->input('id') != ''){
            $publicacao = publicacao::find($request->input('id'));

            $subir = $publicacao->update($request->all());
    
        }

        return view('home');

    }

    public function listar(Request $request){
        //listar
        $publicacao = publicacao::where('titulo', 'like', '%'.$request->input('titulo').'%')
        ->where('data', 'like', '%'.$request->input('data').'%')
        ->where('mensagem', 'like', '%'.$request->input('mensagem').'%')
        ->where('id', 'like', '%'.$request->input('id').'%')
        ->get();

        //dd($publicacao);
        return view('gerenciar', ['publicacao'=>$publicacao]);
    }

    public function editar($id){
        //editar
        $publicacao =publicacao::find($id);

        return view('home', ['publicacao' => $publicacao]);
        //dd($publicacao);
    }

    public function excluir($id){
        //excluir
        publicacao::find($id)->delete();

        return redirect()->route('home');
    }
}    