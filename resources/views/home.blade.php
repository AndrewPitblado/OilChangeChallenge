<x-layout>
    <x-slot:title>
        VEHIKL Oil Check
    </x-slot:title>
            <div class="card bg-background-alt rounded-md shadow max-w-xl mx-auto">
                <div class="card-body px-6 py-8">
                    <div class="flex">
                        <h1 class="text-3xl text-accent font-bold mb-4">
                        How are those oil levels looking?
                        </h1>
                        <img src="{{ asset('oil.svg') }}" alt="Oil Change Checker" class="w-12 h-12 ml-4" />    
                    </div>
                    <p class="text-lg text-accent mb-4">
                        Use the form below to enter in your current odometer
                        reading, previous odometer reading, and the date of your
                        last oil change.
                    </p>

                    
                    <form class="mt-6" action="/result" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label
                                for="current_odometer"
                                class="block text-accent font-bold mb-2"
                                >Current Odometer Reading:</label
                            >
                            <input
                                type="number"
                                name="current_odometer"
                                id="current_odometer"
                                class="w-full text-accent border border-accent rounded px-3 py-2"
                                required
                            />
                            @error('current_odometer')
                                <p class="text-red-500 text-sm mt-2">
                                    {{ $message }}
                                </p>
                            @enderror
                            
                        </div>
                        <div class="mb-4">
                            <label
                                for="previous_odometer"
                                class="block text-accent font-bold mb-2"
                                >Previous Odometer Reading:</label
                            >
                            <input
                                type="number"
                                name="previous_odometer"
                                id="previous_odometer"
                                class="w-full text-accent border border-accent rounded px-3 py-2"
                                required
                            />
                            @error('previous_odometer')
                                <p class="text-red-500 text-sm mt-2">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label
                                for="last_oil_change_date"
                                class="block text-accent font-bold mb-2"
                                >Date of Last Oil Change:</label
                            >
                            <input
                                type="date"
                                name="last_oil_change_date"
                                id="last_oil_change_date"
                                class="w-full text-accent border border-accent rounded px-3 py-2"
                                required
                            />
                            @error('last_oil_change_date')
                                <p class="text-red-500 text-sm mt-2">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        <button
                            type="submit"
                            class="bg-primary flex items-center mx-auto text-white font-bold py-2 px-4 rounded hover:bg-secondary"
                        >
                            Check
                        </button>
                    </form>
                </div>
            </div>
        </main>
</x-layout>
