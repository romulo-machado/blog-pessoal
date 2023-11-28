<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teste;
use Illuminate\Http\Request;

class DiarioController extends Controller
{
    public function index(Request $request)
    {
        $item = Teste::all();

        $mensagem = $request->session()->get('mensagem');

        return view('diario.index')->with('item', $item)->with('mensagem', $mensagem);
    }

    public function store(Request $request)
    {
        $item = new Teste;

        $item->nome = $request->input('nome');
        $item->sobrenome = $request->input('sobrenome');
        $item->cover = $request->file('cover')->store('public');

        $item->cover = str_replace('public/', '', $item->cover);

        $item->save();

        return to_route('diario.index');
    }

    public function edit(Request $request)
    {
        $teste = Teste::all();

        return view('diario.edit')->with('teste', $teste);
    }

    public function update(Request $request, $id)
    {
       $item = [
        'nome' => $request->nome,
        'sobrenome' => $request->sobrenome,
        'cover' => $request->file('cover')->store('public'),
    ];
        $item['cover'] = str_replace('public/','',$item['cover']);

       Teste::where('id',$id)->update($item);

       $request->session()->flash('mensagem', 'Atualizado com sucesso');

        return to_route('diario.index');
    }

    public function destroy(Request $request, $id)
    {
        Teste::destroy($id);
        $mensagem = $request->session()->get('mensagem');

        return to_route('diario.index')->with('mensagem', $mensagem);
    }

    public function controle(Request $request)
    {
        $teste = Teste::all();

        return view('diario-controle.index')->with('teste', $teste);
    }
}
