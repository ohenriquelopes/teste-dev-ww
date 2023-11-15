
@extends('_partials.basic')

@section('titulo', 'Relatorio_do_ticket')

@section('conteudo')

    <h1>Detalhes do Ticket</h1>

    <p>ID: {{ $ticket->id }}</p>
    <p>Nome: {{ $ticket->nome }}</p>
    <p>Email: {{ $ticket->email }}</p>
    <p>FK Pedido ID: {{ $ticket->fk_pedido_id }}</p>
    <p>Título do Ticket: {{ $ticket->titulo_ticket }}</p>
    <p>Conteúdo: {{ $ticket->conteudo }}</p>
    <p>Data: {{ $ticket->created_at }}</p>
    <p>Data_atualizacao: {{ $ticket->updated_at }}</p>
    <p>Data_deletado: {{ $ticket->deleted_at }}</p>


    <a href="{{ route('ticket') }}">Voltar para a lista de tickets</a>
@endsection
