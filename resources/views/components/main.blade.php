<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatibile" content="ie-edge" />
    <title>{{ $Titolo ?? 'homepage' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{ $css ?? '' }}
</head>

<body>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        {{ $slot }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
