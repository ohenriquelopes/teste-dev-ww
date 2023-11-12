<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function ticket()
    {
        return view('ticket');
    }

    public function cadastrar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'numero_pedido' => 'required|numeric',
            'titulo_ticket' => 'required',
            'conteudo' => 'required'
        ]);

        $ticketData = $request->all();
         Ticket::create($ticketData);

        return view('ticket', $ticketData);
    }

}
