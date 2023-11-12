
{{ $slot }}

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif

<form action="{{ route('cadastrar') }}" method="post">
    @csrf

    <label for="nome">Nome do Cliente:</label>
    <input type="text" name="nome" value="{{ old('nome') }}" required>
    <br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
    <br>

    <label for="numero_pedido">Número do Pedido:</label>
    <input type="text" name="numero_pedido" value="{{ old('numero_pedido') }}" required>
    <br>

    <label for="titulo_ticket">Título do Ticket:</label>
    <input type="text" name="titulo_ticket" value="{{ old('titulo_ticket') }}" required>
    <br>

    <label for="conteudo">Conteúdo do Ticket:</label>
    <textarea name="conteudo" rows="4" required>{{ old('conteudo') }}</textarea>
    <br>

    <button type="submit">Cadastrar</button>
</form>
