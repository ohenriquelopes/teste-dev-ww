@extends('_partials.basic')

@section('titulo', 'Tickets')

@section('conteudo')

    <div>
        <h1>Tickets</h1>
    </div>
    <div>
        <h2>Criar Ticket</h2>
        <p>Formulario para criar um ticket</p>
        @component('_partials.form_ticket', ['classe' => 'borda-preta', 'Button' => 'Emprestar'])

        @endcomponent
    </div>
@endsection
