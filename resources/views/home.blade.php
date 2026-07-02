<!DOCTYPE html>
<html lang="en" data-theme="lofi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Oil Change Checker</title>
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
            <div class="card bg-base-100 shadow max-w-xl mx-auto">
                <div class="card-body">
                    <h1 class="text-3xl font-bold mb-4">
                        Do I need an oil change?
                    </h1>
                    <p class="text-lg">
                        Use the form below to enter in your current odometer
                        reading, previous odometer reading, and the date of your
                        last oil change.
                    </p>

                    
                    <form class="mt-6" action="/result" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label
                                for="current_odometer"
                                class="block text-gray-700 font-bold mb-2"
                                >Current Odometer Reading:</label
                            >
                            <input
                                type="number"
                                name="current_odometer"
                                id="current_odometer"
                                class="w-full border border-gray-300 rounded px-3 py-2"
                                required
                            />
                            @if ($errors->has('current_odometer'))
                                <p class="text-red-500 text-sm mt-2">
                                    {{ $errors->first('current_odometer') }}
                                </p>
                            @endif
                            
                        </div>
                        <div class="mb-4">
                            <label
                                for="previous_odometer"
                                class="block text-gray-700 font-bold mb-2"
                                >Previous Odometer Reading:</label
                            >
                            <input
                                type="number"
                                name="previous_odometer"
                                id="previous_odometer"
                                class="w-full border border-gray-300 rounded px-3 py-2"
                                required
                            />
                            @if ($errors->has('previous_odometer'))
                                <p class="text-red-500 text-sm mt-2">
                                    {{ $errors->first('previous_odometer') }}
                                </p>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label
                                for="last_oil_change_date"
                                class="block text-gray-700 font-bold mb-2"
                                >Date of Last Oil Change:</label
                            >
                            <input
                                type="date"
                                name="last_oil_change_date"
                                id="last_oil_change_date"
                                class="w-full border border-gray-300 rounded px-3 py-2"
                                required
                            />
                            @if ($errors->has('last_oil_change_date'))
                                <p class="text-red-500 text-sm mt-2">
                                    {{ $errors->first('last_oil_change_date') }}
                                </p>
                            @endif

                        </div>
                        <button
                            type="submit"
                            class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600"
                        >
                            Check
                        </button>
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
            <div>
                <p> {{date('Y')}} Built with ❤️ by Andrew Pitblado for Sara</p>
            </div>
        </footer>
    </body>
</html>
