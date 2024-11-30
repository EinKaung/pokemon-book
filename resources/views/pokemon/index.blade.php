<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @stack('css') --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pokemons</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    {{-- <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
    </style> --}}
</head>

<body class="antialiased">
    <div id="pokemon_block">
        <div class="wrap-inner">
            <ul class="poke_list flexlist">
                <?php foreach ($pokemons as $pokemon) : ?>
                <li class="item">
                    {{-- <a href="{{ route('poke_show', $pokemon['id']) }}"> --}}
                    No.<?php echo $pokemon['id']; ?>
                    <?php echo $pokemon['en_name']; ?>
                    <div class="imgarea">
                        <img src="<?php echo $pokemon['front_default']; ?>" alt="">
                    </div>
                    {{-- </a> --}}
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

</body>

</html>
