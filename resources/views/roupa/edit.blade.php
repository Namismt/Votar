    <form method="post" action = "/roupa/{{$roupa->id}}">
        @csrf
        @method ('patch')
        @include('roupa.fields.form')
    </form>



