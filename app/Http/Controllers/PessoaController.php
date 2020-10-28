<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
use App\Pessoa;
use App\Telefone;
use Illuminate\Http\Request;


class PessoaController extends Controller
{

    public function index(Request $request)
    {
        $pessoas = Pessoa::query()
            ->orderBy('nome')
            ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('cadastro.index', compact('pessoas','mensagem'));
    }


    public function create()
    {
        return view('cadastro.create');
    }


    public function store(PessoaRequest $request)
    {
        $requestForm = $request->all();
        $pessoa = Pessoa::create($requestForm);

        $telefones = $request->telefone;
        foreach ($telefones as $telefone){
            $pessoa->telefones()->create(['telefone' => $telefone]);
        }

        $request->session()
            ->flash(
                'mensagem'
                ,"Cliente {$pessoa->nome} {$pessoa->sobrenome} inserido com sucesso"
            );

        return redirect('/pessoas');
    }


    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $telefones = $pessoa->telefones()->get('telefone');
        unset($pessoa->id,$pessoa->created_at,$pessoa->updated_at);
        $dados = [
            'pessoa' => $pessoa,
            'telefones' => $telefones
        ];

        return json_encode($dados);

    }


    public function edit($id)
    {
        //

    }


    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);
        //$telefones = Telefone::query()->where('pessoa_id',$id)->get();

        $pessoa->fill($request->all());
        $pessoa->save();

        return redirect('/pessoas');
    }


    public function destroy(Request $request, int $id)
    {
        $pessoa = Pessoa::find($id);
        $nomePessoa = $pessoa->nome .' '.$pessoa->sobrenome;
        $pessoa->telefones->each(function (Telefone $telefone){
            $telefone->delete();
        });

        $pessoa->delete();
        $request->session()
            ->flash(
                'mensagem'
                ,"Cliente $nomePessoa excluído com sucesso!"
            );
        return redirect('/pessoas');
    }
}
