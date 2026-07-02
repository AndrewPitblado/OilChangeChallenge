<x-layout>
    <x-slot:title>
         VEHIKL results!
    </x-slot:title>
    @if (session('success'))
        <div class="toast toast-top toast-center">
            <div class="alert alert-success animate-fade-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif
    <div class="card bg-base-100 shadow max-w-xl mx-auto">
        <div class="card-body">
            <h1 class="text-3xl font-bold mb-4">VEHIKL results!</h1>
            <p class="text-lg">
                Here are the details you submitted:
                <ul>
                    <li>Current Odometer Reading: {{$formData->current_odometer }}</li>
                    <li>Previous Odometer Reading: {{ $formData->previous_odometer }}</li>
                    <li>Last Oil Change Date: {{ $formData->last_oil_change_date }}</li>
                </ul>
            </p>
            <p class="text-lg mt-4">
                This means that you have driven
                {{ $formData->current_odometer - $formData->previous_odometer }} kilometers since your
                last oil change.
            </p>
            @if ($formData->current_odometer - $formData->previous_odometer > 5000)
                <p class="text-lg mt-4 text-red-500 font-bold">
                    Since you have driven more than 5000km since your last oil change, it looks like its time for another one!
                </p>
            @elseif ($formData->last_oil_change_date->addMonths(6)->isPast())
                <p class="text-lg mt-4 text-red-500 font-bold">
                    Looks like it's been more than 6 months since your last oil change (we have missed you), we'll see you at the shop!
                </p>
            @else
                <p class="text-lg mt-4 text-green-500 font-bold">
                    Got some great news for you! It looks like your car is still running on good oil, so your wallet can breathe a sigh of relief (for now)!
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