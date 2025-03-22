<!-- Include Google Icons & Flatpickr CSS/JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Right Content Section (Booking Form) -->
<div class="w-full mt-8 lg:mt-0">
    <div class="bg-white p-8 rounded-xl shadow-md border border-gray-300">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
            <span class="material-icons text-gray-600 mr-2">event</span> Check Availability
        </h2>

        <form>
            <!-- Location Dropdown -->
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 flex items-center">
                    <span class="material-icons text-gray-500 mr-2">place</span> Location
                </label>
                <select id="location" name="location"
                    class="w-full px-4 py-3 border border-gray-300 bg-white text-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                    <option value="" disabled selected>Select Location</option>
                    <option value="Ko Samui District, Thailand">Ko Samui District, Thailand</option>
                    <option value="Mae Nam, Thailand">Mae Nam, Thailand</option>
                    <option value="Tambon Bo Put, Thailand">Tambon Bo Put, Thailand</option>
                </select>
            </div>

            <!-- Check-in Field -->
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 flex items-center">
                    <span class="material-icons text-gray-500 mr-2">calendar_today</span> Check-in
                </label>
                <input type="text" id="checkin" name="checkin"
                    class="w-full px-4 py-3 border border-gray-300 bg-white text-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400"
                    placeholder="Select date">
            </div>

            <!-- Check-out Field -->
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 flex items-center">
                    <span class="material-icons text-gray-500 mr-2">calendar_today</span> Check-out
                </label>
                <input type="text" id="checkout" name="checkout"
                    class="w-full px-4 py-3 border border-gray-300 bg-white text-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400"
                    placeholder="Select date">
            </div>

            <!-- Rooms Field -->
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 flex items-center">
                    <span class="material-icons text-gray-500 mr-2">hotel</span> Rooms
                </label>
                <select
                    class="w-full px-4 py-3 border border-gray-300 bg-white text-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                    <option>1 Room</option>
                    <option>2 Rooms</option>
                    <option>3 Rooms</option>
                </select>
            </div>

            <!-- Guests Field -->
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 flex items-center">
                    <span class="material-icons text-gray-500 mr-2">group</span> Guests
                </label>
                <select
                    class="w-full px-4 py-3 border border-gray-300 bg-white text-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                    <option>1 Adult</option>
                    <option>2 Adults</option>
                    <option>2 Adults, 1 Child</option>
                </select>
            </div>

            <!-- Customer Email -->
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 flex items-center">
                    <span class="material-icons text-gray-500 mr-2">email</span> Email
                </label>
                <input type="email" id="email" name="email"
                    class="w-full px-4 py-3 border border-gray-300 bg-white text-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400"
                    placeholder="Enter your email">
            </div>

            <!-- Customer Phone Number -->
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 flex items-center">
                    <span class="material-icons text-gray-500 mr-2">phone</span> Phone Number
                </label>
                <input type="tel" id="phone" name="phone"
                    class="w-full px-4 py-3 border border-gray-300 bg-white text-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400"
                    placeholder="Enter your phone number">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-black text-white py-3 rounded-md uppercase text-sm font-semibold hover:bg-gray-800 transition duration-300 flex items-center justify-center">
                <span class="material-icons text-white mr-2">search</span> Check Availability
            </button>
        </form>
    </div>
</div>

<!-- Initialize Flatpickr -->
<script>
    flatpickr("#checkin", {
        dateFormat: "Y-m-d",
        minDate: "today",
        disableMobile: true
    });

    flatpickr("#checkout", {
        dateFormat: "Y-m-d",
        minDate: "today",
        disableMobile: true
    });
</script>

