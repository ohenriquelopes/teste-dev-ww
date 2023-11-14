<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Ticket;
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

//    public function cadastrar(Request $request)
//    {
//        $request->validate([
//            'nome' => 'required',
//            'email' => 'required|email',
//            'numero_pedido' => 'required|numeric',
//            'titulo_ticket' => 'required',
//            'conteudo' => 'required'
//        ]);
//
//        $ticketData = $request->all();
//         Ticket::create($ticketData);
//
//        #return view('ticket', $ticketData);
//        return redirect()->route('ticket')->with('success', 'Ticket cadastrado com sucesso!');
//    }

    public function cadastrar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'numero_pedido' => 'required|numeric',
            'titulo_ticket' => 'required',
            'conteudo' => 'required'
        ]);
//        dd('Método cadastrar está sendo chamado.');

        // Criar um novo cliente
        $cliente = Cliente::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email')

        ]);

        // Criar um novo pedido
        $pedido = Pedido::create([
            'numero_pedido' => $request->input('numero_pedido'),
//            'cliente_id' => $cliente->id
        ]);

        // Criar um novo ticket associado ao cliente e ao pedido
        $ticket = new Ticket([
//            'nome' => $request->input('nome'),
//            'email' => $request->input('email'),
//            'numero_pedido' => $request->input('numero_pedido'),
            'titulo_ticket' => $request->input('titulo_ticket'),
            'conteudo' => $request->input('conteudo')
        ]);

        $ticket->save();

        // Associar o ticket ao cliente e ao pedido
        $cliente->tickets()->save($ticket);
        $pedido->tickets()->save($ticket);

        // Redirecionar para a página 'ticket' com uma mensagem de sucesso
        return redirect()->route('ticket')->with('success', 'Ticket cadastrado com sucesso!');
    }

}
