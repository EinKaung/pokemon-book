@props([
    'pokemons' => [],
])
<ul class="flexlist">
    {{-- <x-popup :pokemon="$pokemon" class="hidden"></x-popup> --}}
    @foreach ($pokemons as $pokemon)
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
            <button class="pokemon-thumbnail" data-pokemon-id="{{ $pokemon['id'] }}">
                <img src="{{ $pokemon['front_default'] }}" alt="">
            </button>
            {{-- </a> --}}
        </li>
    @endforeach
</ul>

{{-- <script>
    $(document).ready(function() {
        function openModal(pokemonId) {
            $.ajax({
                url: '/show/' + pokemonId,
                method: 'GET',
                success: function(data) {
                    $('#modalContent').html(data);
                    $('#pokemonModal').removeClass('hidden');
                },
                error: function() {
                    alert('ポケモンの情報を取得できませんでした。');
                }
            });
        }

        $('#closeModal').on('click', function() {
            $('#pokemonModal').addClass('hidden');
        });

        $('.pokemon-thumbnail').on('click', function(event) {
            event.preventDefault();
            const pokemonId = $(this).data('pokemon-id');
            openModal(pokemonId);
        });
    });
</script> --}}
