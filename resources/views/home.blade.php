<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bienvenido a la pagina principal</h1> --}}

        <x-alert>
            {{-- <x-slot name="title">
                titulo de la alerta
            </x-slot> --}}
            contenido de la alerta
        </x-alert>
        
    </div>
</body>
</html>