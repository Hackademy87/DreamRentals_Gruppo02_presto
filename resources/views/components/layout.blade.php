<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @livewireStyles
</head>
<body>
    <x-navbar></x-navbar>

    @if(session('message'))

        <div class="alert alert-success">{{session('message')}}</div>

    @endif


    {{$slot}}
    @livewireScripts
    <x-footer/>
    <script src="https://kit.fontawesome.com/75bc6d0aee.js" crossorigin="anonymous"></script>
</body>
</html>





