@extends('main')
<h1> QUAL ROUPA VOCÊ ACHA MAIS BONITA</h1>
    <form method="post" action = "/votar">
        @csrf
        <input type="checkbox" name="roupas" value="{{$votar->roupas}}">
        <button type="submit"name="botao"  onclick="return confirm('Tem certeza que deseja escolher essa camiseta');">Enviar</button>

        
    </form>


