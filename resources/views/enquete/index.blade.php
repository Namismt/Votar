
<form method="post" action="/">
    @csrf
    <h2> Criar nova enquete </h2>
    <div class="row">
        <label name="nome"><b>Escreva o nome da enquete</b></label>
        <input id="nome" type="text" name="nome" value="">
        <label name="data"><b>Selecione a data de término da enquete</b><label>
    <input id="id" type="date" name="datafim" value="">
    </div>
    <button type="submmit"> Cadastrar </button>
</form>


@forelse($enquetes as $enquete)
        {{ $enquete->nome }}
    @include('votar.index');
@empty  
    Nenhuma enquete nova
@endforelse