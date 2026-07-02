<!DOCTYPE html>
<html lang="en" data-theme="lofi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ isset($title) ? $title : 'Oil Change Checker' }}</title>
        <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css"
            rel="stylesheet"
        />
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />
    </head>
    <body class="min-h-screen flex flex-col bg-base-200 font-sans">
        <main class="flex-1 container mx-auto px-4 py-8">
            {{ $slot }}
        </main>
        <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
            <div>
                <p> {{date('Y')}} Built with ❤️ by Andrew Pitblado for Sara</p>
            </div>
        </footer>
    </body>
</html>
