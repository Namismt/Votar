<h1> QUAL ROUPA VOCÊ ACHA MAIS BONITA</h1>

<form method="post" action = "/votar">
@csrf

<input type="text" name="roupas" value="{{$votar->roupas}}">
<button type="submit"name="botao">Enviar</button>

</form>