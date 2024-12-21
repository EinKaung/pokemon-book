@props([
    'pokemons' => [],
])
<ul class="flexlist">
    @foreach ($pokemons as $pokemon)
        <x-popup :pokemon="$pokemon"></x-popup>
        <li class="item">
            {{-- <a href="{{ route('poke_show', $pokemon['id']) }}"> --}}
            <div class="description green_font">
                <div>
                    No.{{ $pokemon['id'] }}
                </div>
                <div id="pokemon_name">
                    {{ $pokemon['en_name'] }}
                </div>
            </div>
            <button id="pokemon-thumbnail">
                <img src="{{ $pokemon['front_default'] }}" alt="">
            </button>
            {{-- </a> --}}
        </li>
    @endforeach
</ul>

<script>
    $(document)
</script>
