<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources\css\app.css', 'resources\js\app.js'])

<body>
    <x-nav />
    {{$slot}}

    <p class="mb-1">Copyright © Emanuele Papale 2023</p>
</body>

</html>
