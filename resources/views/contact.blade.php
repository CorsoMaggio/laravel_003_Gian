<x-main>
    <x-slot name="css">
        <style>
            .nav {
                background-color: azure !important;
            }

            .nav-link.active {
                background-color: white !important;
            }
        </style>
    </x-slot>
    <x-slot name="titolo">
        Contatti
    </x-slot>
    <h1 class="mb-4 text-center">I voli disponibili</h1>
    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/invia-email">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControl1" class="form-label">Nome utente</label>
            <input type="text" class="form-control" id="exampleFormControl1" name="firstname"
                placeholder="Inserisci il tuo nome">

        </div>
        <div class="mb-3">
            <label for="exampleFormControl2" class="form-label">Cognome utente</label>
            <input type="text" class="form-control" id="exampleFormControl2" name="lastname"
                placeholder="Inserisci il tuo cognome"">

        </div>
        <div class="mb-3">
            <label for="exampleFormControl3" class="form-label">Email utente</label>
            <input type="email" class="form-control" id="exampleFormControl3" name="email"
                placeholder="Inserisci il tuo cognome">

        </div>
        <div class="mb-3">
            <label for="exampleFormControl4" class="form-label">Informazioni in più e richiesta</label>
            <textarea class="form-control" id="exampleFormControl4" rows="3" name="text"
                placeholder="Inserisci informazioni in più e richiesta"></textarea>

        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit" style="margin-top: 20px;">Invia</button>
        </div>
    </form>
</x-main>
