@php
    $names = ['Arjun', 'Rohit']
@endphp

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Dashboard</title>
    </head>
    <body>
        {{-- @include('content', ['name' => 'Arjun']) --}}
        {{-- @foreach ($names as $name )
            @include('content', ['name' => $name])
        @endforeach --}}
        @each('content', $names, 'name')
    </body>
</html>