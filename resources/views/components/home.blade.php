<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Pokédex</title>
</head>
<body class="bg-black text-green">
    <main>
        {{ $slot }}
    </main>
</body>
</html>
