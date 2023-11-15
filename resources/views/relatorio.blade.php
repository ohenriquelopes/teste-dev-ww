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
        <p>Numero_ticket: {{ $ticket->id }}</p>
        <p>Numero_pedido: {{ $ticket->fk_pedido_id }}</p>
        <p>Titulo_pedido: {{ $ticket->titulo_ticket }}</p>
        <p>Email_cliente: {{ $ticket->email }}</p>
        <p>Data: {{ $ticket->created_at }}</p>
        <hr>
    @endforeach

    {{ $tickets->links() }}

@endsection
