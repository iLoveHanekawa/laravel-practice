@php
    $count = 1;
    $records = [['firstName' => 'arjun'], ['firstName' => 'rohit']];
    $theme = 'dark'
@endphp

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>@yield('title')</title>
    </head>
    <body @class(['text-white' => $theme == 'dark', 'bg-black' => $theme == 'dark'])>
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
        <div>@yield('working', 'Not working')</div>
        <div class = 'text-lg text-red-400'>@yield('nested', 'Nested not working')</div>
        <div>{{ $count }}</div>
        @switch($count)
            @case(0)
                <div>Value of count is 0</div>
                @break
            @default
                <div>Value of count is {{ $count }}</div>
        @endswitch
        @for ($i = 0; $i < 5; $i++)
            <div>hello</div>
        @endfor
        @foreach ($records as $record)
            <div>{{ $record['firstName'] }}</div>
        @endforeach
    </body>
</html>