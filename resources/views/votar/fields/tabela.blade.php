
<div class="card">
    <form method="post" action="/votar">
    @csrf
    <table width=100% class="table table-bordered">
        <thead>
            <tr align="center">
                <th scope="col">
                    Selecionar:
                </th>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roupas as $roupa)
        <tr>
            <td align="center">
                    <input type="radio" name="roupa_id" value="{{$roupa->id}}">
            </td>
            <td align="center">{{$roupa->nome}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
                    <button type="submmit" align="center"> Votar </button>
    </form>

</div>

            <div class="card">
                <table width=100% class="table table-bordered">
                    <thead>
                    <tr align="center">
                        <th scope="col">Votos gerais na Enquete</th>
                        <th scope="col">Votos</th>
                    </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td align="center">{{$total}} </td>
                        <td align="center">
                        @if(!empty($totalroupa))
                            {{$totalroupa}}
                        @else
                            Selecione uma roupa:
                        @endif
                    </tr>
                </tbody>
            </table>

            <form method="get">
                <div class="row">
                    <div class="col-sm input-group">

                    <select name="busca" class="form-control">
                        @foreach($roupas as $roupa)
                            <option value="{{$roupa->id}}" name="busca"> {{$roupa->nome}}</option>
                        @endforeach
                    </select>
                    <span class="input-group-btn">
                        <button type="search"> Ver Quantidades dos votos </button>
                        <br>
                        <br>
                        <a href="/roupa" class="MyButton">Cadastrar Roupas</a>
                    </span>
                    </div>
                    </div>
            </form>
            </div>
</link>