<x-layout title="Diário - {{ $item[5]['nome'] }}">

    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('fortaleza.index') }}">Fortaleza-CE</a>
        </nav>
    </header>
    @foreach ($item as $itens)
    @endforeach
    <main>

        @isset($mensagem)
        <nav>
            {{ $mensagem }}
        </nav>
        @endisset

        {{-- <a href="{{ route('diario.edit', $itens->id) }}">

            <button class="button"  type="submit">Editar foto</button>

        </a> --}}

        {{-- <form action="{{ route('diario.destroy', $item[5]['id'])}}" method="post">
            @csrf
            @method('DELETE')
            <button class="button">Excluir</button>
        </form> --}}

        @isset($item[5]['cover'])

        <img class="estatico1" class="estatico" src="../storage/{{$item[5]['cover']}}" alt="">
        @endisset
        <section>
            <p>
                {{ $item[5]['sobrenome'] }}
            </p>
        </section>
    </main>
</x-layout>
