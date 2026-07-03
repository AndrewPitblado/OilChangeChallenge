<!DOCTYPE html>
<html lang="en" data-theme="lofi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ isset($title) ? $title : 'Oil Change Checker' }}</title>
        @vite('resources/css/app.css')
        <link rel="icon" href="{{ asset('oil.svg') }}" type="image/x-icon" />
        
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />
    </head>
    <body class="min-h-screen flex flex-col bg-background font-sans">
        <main class="flex-1 container mx-auto px-4 py-8">
            {{ $slot }}
        </main>
        <footer class="footer footer-center p-5 bg-background text-base-content text-xs">
            <div class="flex flex-col items-center">
                <p class="text-accent"> {{date('Y')}} Built with ❤️ by Andrew Pitblado for Sara</p>
            </div>
        </footer>
    </body>
</html>
