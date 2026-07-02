<x-layout>
    <x-slot:title>
        Here's your results!
    </x-slot:title>
    <div class="card bg-base-100 shadow max-w-xl mx-auto">
        <div class="card-body">
            <h1 class="text-3xl font-bold mb-4">Here's your results!</h1>
            <p class="text-lg">
                Based on the information you provided, your current odometer
                reading is {{ $current_odometer }} miles, your previous
                odometer reading was {{ $previous_odometer }} miles, and your
                last oil change was on {{ $last_oil_change_date }}.
            </p>
            <p class="text-lg mt-4">
                This means that you have driven
                {{ $current_odometer - $previous_odometer }} miles since your
                last oil change.
            </p>
            @if ($current_odometer - $previous_odometer > 5000)
                <p class="text-lg mt-4 text-red-500 font-bold">
                    Based on the information you provided, it is recommended that
                    you get an oil change as soon as possible.
                </p>
            @elseif (now()->diffInMonths($last_oil_change_date) > 6)
                <p class="text-lg mt-4 text-red-500 font-bold">
                    Based on the information you provided, it is recommended that
                    you get an oil change as soon as possible.
                </p>
            @else
                <p class="text-lg mt-4 text-green-500 font-bold">
                    Based on the information you provided, it is not necessary to
                    get an oil change at this time.
                </p>
            @endif
            <a
                href="/"
                class="btn btn-primary mt-6"
                >Go back to the form</a
            >
        </div>
    </div>
</x-layout>