@props([
    'pokemons' => [],
])
<ul class="flexlist">
    @foreach ($pokemons as $pokemon)
        <li class="item">
            <div class="description green_font">
                <div>
                    No.{{ $pokemon['id'] }}
                </div>
                <div id="pokemon_name">
                    {{ $pokemon['en_name'] }}
                </div>
            </div>
            <button class="pokemon-thumbnail" data-pokemon-id="{{ $pokemon['id'] }}">
                <img src="{{ $pokemon['official_artwork_front_default'] }}" alt="">
            </button>
        </li>
    @endforeach
</ul>
