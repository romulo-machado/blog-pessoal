<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class FortalezaController extends Controller
{
    public function index(Request $request)
    {
        $item = Teste::all();
        return view("fortaleza.index")->with('item', $item);
    }

    public function create(Request $request)
    {
        $item = new Teste();
        $item->nome = $request->input('nome');
        $item->sobrenome = $request->input('sobrenome');
        $item->cover = $request->file('cover')->store('public');
        $item->cover = str_replace('public/', "", $item->cover);

        $item->save();


        // $item = new Teste();
        // $item->create($request->all());

        return redirect()->route("fortaleza.index");
    }

}
