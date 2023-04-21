<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Page</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class = 'py-4 bg-red-300 text-white'>Hello {{ time() }}</div>
    </body>
</html>