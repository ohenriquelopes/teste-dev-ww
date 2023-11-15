@extends('_partials.basic')

@section('titulo', 'Relatorio')

@section('conteudo')



{{--      @php--}}
{{--        echo '<pre>';--}}
{{--        print_r($tickets);--}}
{{--        echo '</pre>';--}}
{{--        exit;--}}
{{--      @endphp--}}

    @foreach ($tickets as $ticket)
        <p>ID: {{ $ticket->id }}</p>
        <p>Nome: {{ $ticket->nome }}</p>
        <p>Email: {{ $ticket->email }}</p>
        <p>Pedido ID: {{ $ticket->fk_pedido_id }}</p>
        <p>Título do Ticket: {{ $ticket->titulo_ticket }}</p>
        <p>Conteúdo: {{ $ticket->conteudo }}</p>
        <hr>
    @endforeach


@endsection
