<x-main>
    <x-slot name="css">
        <style>
            .nav {
                background-color: azure !important;
            }

            .nav-link.active {
                background-color: white !important;
            }

            .card {
                background-color: azure !important;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
                border: 2px solid #ccc;
            }

            .card-img-top {
                height: 200px !important;
                object-fit cover;
            }
        </style>
    </x-slot>
    <x-slot name="Titolo">
        Dettagli Voli
    </x-slot>
    <h1 class="mb-4 text-center">Dettagli volo per {{ $flight['destination'] }}</h1>
    <x-cardDetails :flight="$flight"></x-cardDetails>
</x-main>
