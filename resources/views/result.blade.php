<x-layout>
    <x-slot:title>
        Here's your results!
    </x-slot:title>
    <div class="card bg-base-100 shadow max-w-xl mx-auto">
        <div class="card-body">
            <h1 class="text-3xl font-bold mb-4">Here's your results!</h1>
            <p class="text-lg">
                Here are the details you submitted:
                <ul>
                    <li>Current Odometer Reading: {{ $form_data->current_odometer }}</li>
                    <li>Previous Odometer Reading: {{ $form_data->previous_odometer }}</li>
                    <li>Last Oil Change Date: {{ $form_data->last_oil_change_date }}</li>
                </ul>
            </p>
            <p class="text-lg mt-4">
                This means that you have driven
                {{ $form_data->current_odometer - $form_data->previous_odometer }} kilometers since your
                last oil change.
            </p>
            @if ($form_data->current_odometer - $form_data->previous_odometer > 5000)
                <p class="text-lg mt-4 text-red-500 font-bold">
                    Since you have driven more than 5000km since your last oil change, it looks like its time for another one!
                </p>
            @elseif (now()->diffInMonths($form_data->last_oil_change_date) > 6)
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