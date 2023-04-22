<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class = 'w-screen py-5 px-3 text-white bg-purple-700 flex justify-between items-center'>
            <div class = 'gap-4 flex justify-start items-center'>
                <div>Home</div>
                <div>Dashboard</div>
                <div>Admin</div>
            </div>
            <div className = 'self-end'>{{ $name }}</div>
        </div>
    </body>
</html>
