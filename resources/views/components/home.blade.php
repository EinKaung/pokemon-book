@props([
    'pokemons' => [],
])
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pokédex</title>
</head>
<body>
    <x-title></x-title>
    <x-list :pokemons="$pokemons"></x-list>
</body>
</html>
