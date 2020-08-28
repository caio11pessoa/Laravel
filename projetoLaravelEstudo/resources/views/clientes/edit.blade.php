<h3>Novo cliente</h3>

<form action="{{ route('clientes.update', $cliente['id'])}}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="nome" value="{{ $cliente['nome']}}">
    <input type="submit" value="Salvar">
</form>