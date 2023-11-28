<x-layout title="Controle - Diário">

    <form action="{{ route('diario.update', $teste[5]['id']) }}" method="post" enctype="multipart/form-data">
        @csrf

        <form action="{{ route('diario.update', $teste[5]['id'])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="cover">Foto</label>
            <input type="file"
            accept="img/*"
            name="cover"
            id="cover"
            value="{{$teste[5]['cover']}}">

            <img class="estatico" src="../storage/{{$teste[5]['cover']}}" alt=""
            style="width: 100px"
            style="height: auto">

            <label for="nome">Data</label>
            <input type="text"
            name="nome"
            id="nome"
            value="{{ $teste[5]['nome'] }}">

            <label for="sobrenome">Me fale sobre o seu dia:</label>
            <input type="text"
            name="sobrenome"
            id="sobrenome"
            value="{{$teste[5]['sobrenome']}}">

            <button class="button" type="submit">Enviar</button>
        </form>

        {{-- <label for="nome">Data</label>
        <input type="text" name="nome" id="nome">

        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome">

        <label for="cover">Foto</label>
        <input type="file" name="cover" id="cover" accept="img/*"
        >

        <button type="submit">Enviar</button>

        </form> --}}

</x-layout>
