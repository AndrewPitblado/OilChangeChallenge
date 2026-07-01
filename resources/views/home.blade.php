<main class="flex-1 container mx-auto px-4 py8">

    <h1 class="text-3xl font-bold mb-4">Do I need an oil change?</h1>
    <p class="text-lg">Use the form below to enter in your current odemeter reading, previous odemeter reading, and the date of your last oil change.</p>
    <form class="mt-6" action="/result" method="POST">
        @csrf
        <div class="mb-4">
            <label for="current_odometer" class="block text-gray-700 font-bold mb-2">Current Odometer Reading:</label>
            <input type="number" name="current_odometer" id="current_odometer" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="previous_odometer" class="block text-gray-700 font-bold mb-2">Previous Odometer Reading:</label>
            <input type="number" name="previous_odometer" id="previous_odometer" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="last_oil_change_date" class="block text-gray-700 font-bold mb-2">Date of Last Oil Change:</label>
            <input type="date" name="last_oil_change_date" id="last_oil_change_date" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">Check</button>
    </form>

    

    
</main>



