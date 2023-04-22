<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        @verbatim
            <div class = 'py-4 bg-red-300 text-white'>Hello {{ $name }}</div>
        @endverbatim
        <script>
            const app = {{ Js::from("hello") }}
            console.log(app)
        </script>
        @if ($friends > 0)
            <div>Hi friends </div>
        @else
            <div>Hello to me I guess?</div>
        @endif
        @unless ($authenticated == true)
            <div>Unathenticated</div>
        @endunless
        @empty($user)
            <div>No user here</div>
        @endempty
    </body>
</html>