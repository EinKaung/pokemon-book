<x-home>
    <x-title></x-title>
    <x-list :pokemons="$pokemons"></x-list>
    <div id="pokemonModal"
        class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex justify-center items-center border-green-500">
        <div class="bg-black rounded-lg p-4 w-full max-w-screen-md mx-auto relative">
            <img src="{{ asset('storage/close-icon.svg') }}" id="closeModal"
                class="absolute top-2 right-2 w-6 h-6 cursor-pointer">
            <div id="modalContent"></div>
        </div>
    </div>

    <script>
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
    </script>
</x-home>

