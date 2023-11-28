<x-layout title="Fortaleza - CE">
<header>

    <nav>
        <a href="{{ route('home')}}">Home</a>
        <a href="{{ route('diario.index') }}">Diário</a>
    </nav>
</header>
    <section>
        <img class="estatico" src="../storage/{{$item[0]['cover']}}" alt="">

        @isset($item)

        <img class="estatico" src="../storage/{{$item[1]['cover']}}" alt="">
        @endisset

        <p>
            {{$item[0]['nome']}}
        </p>

        @isset($item)

        <img class="estatico1" src="../storage/{{$item[2]['cover']}}" alt="">
        @endisset

        @isset($item)

        <img class="estatico1" src="../storage/{{$item[3]['cover']}}" alt="">
        @endisset

        @isset($item)

        <img class="estatico1" src="../storage/{{$item[4]['cover']}}" alt="">
        @endisset

    </section>
</main>


</x-layout>



{{-- <form action="{{ route('fortaleza.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <label for="sobrenome">Sobre Nome</label>
    <input type="text" name="sobrenome" id="sobrenome">

    <label for="cover">Fotos</label>
    <input type="file" name="cover" id="cover" accept="img/*">

    <input type="submit" value="Enviar"> --}}

</form>


