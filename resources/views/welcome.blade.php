<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="flex items-center justify-center min-h-screen">
            <a href="{{ route('auth_line') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-4 px-8 rounded">
                LINE
            </a>
        </div>
    </body>
</html>
