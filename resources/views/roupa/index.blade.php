

<a> Roupas cadastradas </a> <br>

@forelse($roupas as $roupa)
    <ul>
        <li><a href="roupa/{{$roupa->id}}/edit"> {{ $roupa->nome}} </a></li>
        <li>{{$roupa->tipo}}</li>
    <li>
        <form action="/roupa/{{$roupa->id}}" method="post">
        @csrf
        @method('delete')
    <button type="submit" onclick="return confirm('Tem certeza');"> Apagar</button>
        <br>
        <br>
        </form>
    </li>
    </ul>
    <a  href="roupa/create" align="center"> Voltar a Cadastrar </a>
@empty
    Não há roupas cadastradas!
@endforelse
