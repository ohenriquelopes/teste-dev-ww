@extends('_partials.basic')

@section('titulo', 'Relatorio')

@section('conteudo')



{{--      @php--}}
{{--        echo '<pre>';--}}
{{--        print_r($tickets);--}}
{{--        echo '</pre>';--}}
{{--        exit;--}}
{{--      @endphp--}}


    <h1>Relatorio</h1>

    <form method="get" action="{{ route('relatorio') }}">
        <label for="email">Filtrar por E-mail:</label>
        <input type="text" name="email" value="{{ request('email') }}">

        <label for="fk_pedido_id">Filtrar por Número do Pedido:</label>
        <input type="text" name="fk_pedido_id" value="{{ request('fk_pedido_id') }}">

        <button type="submit">Filtrar</button>
    </form>


    @foreach ($tickets as $ticket)
        <p>Numero_ticket: {{ $ticket->id }}</p>
        <p>Numero_pedido: {{ $ticket->fk_pedido_id }}</p>
        <p>Titulo_pedido: {{ $ticket->titulo_ticket }}</p>
        <p>Email_cliente: {{ $ticket->email }}</p>
        <p>Data: {{ $ticket->created_at }}</p>
        <p>ID: {{ $ticket->id }} - <a href="{{ route('ticket.show', $ticket->id) }}">Ver Detalhes</a></p>
        <hr>
    @endforeach

    {{ $tickets->links() }}


@endsection
