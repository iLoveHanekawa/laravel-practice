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
        <div>Hello</div>
        <x-counter count=10 first-name="Arjun" last-name="Tanwar"/> {{-- count = 0 doesn't work wow. WOW ---}}
        <livewire:counter :count=10 />
        @livewireScripts
    </body>
</html>