@props([
    'pokemons' => []
])
<ul class="flexlist">
    <?php foreach ($pokemons as $pokemon) : ?>
    <x-popup :pokemon="$pokemon"></x-popup>
    <li class="item">
        {{-- <a href="{{ route('poke_show', $pokemon['id']) }}"> --}}
        <div class="description green_font">
            <div>
                No.<?php echo $pokemon['id']; ?>
            </div>
            <div id="pokemon_name">
                <?php echo $pokemon['en_name']; ?>
            </div>
        </div>
        <button id="pokemon-thumbnail">
            <img src="<?php echo $pokemon['front_default']; ?>" alt="">
        </button>
        {{-- </a> --}}
    </li>
    <?php endforeach ?>
</ul>
