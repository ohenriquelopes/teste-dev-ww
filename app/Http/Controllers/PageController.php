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

    public function show($id)
    {
        $ticket = Ticket::with('pedido')->find($id);

        return view('show', compact('ticket'));
    }


    public function relatorio(Request $request)
    {
        $query = Ticket::with('pedido');

        $query->when($request->filled('fk_pedido_id'), function ($query) use ($request) {
            $query->where('fk_pedido_id', $request->input('fk_pedido_id'));
        });

        $query->when($request->filled('email'), function ($query) use ($request) {
            $query->where('email', $request->input('email'));
        });

        $tickets = $query->paginate(5);

        return view('relatorio', compact('tickets'));
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

        $cliente = Cliente::where('email', $request->input('email'))->first();
        if(!$cliente) {
            $cliente = Cliente::create([
                'nome' => $request->input('nome'),
                'email' => $request->input('email')
            ]);
        }
//        echo '<pre>';
//        print_r($cliente->id);
//        echo '</pre>';
//        exit;

        // Criar um novo pedido associado ao cliente
        $pedido = Pedido::create([
            'cliente_id' => $cliente->id
        ]);

        // Criar um novo ticket
        Ticket::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'fk_pedido_id' => $pedido->id,
            'titulo_ticket' => $request->input('titulo_ticket'),
            'conteudo' => $request->input('conteudo')
        ]);


        // Redirecionar para a página 'ticket' com uma mensagem de sucesso
        return redirect()->route('ticket')->with('success', 'Ticket cadastrado com sucesso!');
    }





}
