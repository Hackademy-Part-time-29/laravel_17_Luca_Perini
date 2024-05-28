<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di Benvenuto</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header>
       <x-navbar></x-navbar>
    </header>
{{$slot}}
    <x-footer></x-footer>
</body>
</html>