

<h1> ADICIONE SUAS ROUPAS </h1>
        <input type="text" name="nome" value="{{$roupa->nome}}">
            <br>
        <select name="tipo">
            <option name="tipo" value="Camiseta"> Camiseta </option>
            <option name="tipo" value="Calça"> Calça </option>
            <option name="tipo" value="Blusa"> Blusa </option>
        </select>
        <button type="submit" name="botao"onclick="return confirm('Tem certeza que deseja cadastrar esta roupa');">Enviar</button>
        <br>
        <br>
            <a href="/roupa" align="center"> Ver roupas cadastradas</a>
            <br>
            <a href="/votar" align="center"> Ver a Votação</a>
            