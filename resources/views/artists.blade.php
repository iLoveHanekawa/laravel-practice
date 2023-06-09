<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>About</title>
        @livewireStyles
    </head>
    <body>
        <div class = 'bg-black text-white'>Hello</div>
        @foreach ($rappers as $rapper)
            <livewire:rappers :name="$rapper['name']" :description="$rapper['description']" />
        @endforeach
        @livewireScripts
    </body>
</html>