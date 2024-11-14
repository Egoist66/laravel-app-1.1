<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css'])
    <style>
        body {
            @apply bg-gray-100 dark:bg-black text-gray-800 dark:text-white flex items-center justify-center min-h-screen;
        }
    </style>
</head>
<body>
    <div class="text-center pt-5">
        <h1 class="text-9xl font-bold text-gray-300 dark:text-gray-600">404</h1>
        <h2 class="text-4xl font-semibold mt-4">
            {{ $exception->getMessage() ?? 'Page Not Found' }}
        </h2>
        <p class="text-lg mt-2">Sorry, the page you're looking for doesn't exist or has been moved.</p>
        <a href="{{ url('/') }}" class="mt-6 inline-block px-5 py-3 bg-blue-500 text-black rounded-full hover:bg-blue-600 transition duration-300">Go Home</a>
    </div>
</body>
</html>
