<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required|max:50',
            'Pontuação' => 'required|integer|min:0'
        ]);

        Score::create($request->only('Nome', 'Pontuação'));

        return redirect()->back()->with('sucesso', 'Pontuação guardada!');
    }
}
