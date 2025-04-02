     <!-- Right Content Section (Booking Form) -->
     <div class="w-full mt-8 lg:mt-0">
         <div class="bg-white p-6 shadow-md">
             <h2 class="text-2xl font-semibold mb-6">Check Availability</h2>

             <form>
                 <!-- Check-in Date -->
                 <div class="mb-4">
                     <label class="block text-gray-700 text-xs font-bold mb-2">Check-in</label>
                     <input type="date" id="check-in" name="checkin"
                         class="w-full px-4 py-3 border border-gray-300 focus:ring-2 focus:ring-gray-200">
                 </div>

                 <!-- Check-out Date -->
                 <div class="mb-4">
                     <label class="block text-gray-700 text-xs font-bold mb-2">Check-out</label>
                     <input type="date" id="check-out" name="checkout"
                         class="w-full px-4 py-3 border border-gray-300 focus:ring-2 focus:ring-gray-200">
                 </div>

                 <!-- Rooms Selection -->
                 <div class="mb-4">
                     <label class="block text-gray-700 text-xs font-bold mb-2">Rooms</label>
                     <div class="relative">
                         <select
                             class="w-full px-4 py-3 border border-gray-300 focus:ring-2 focus:ring-gray-200 appearance-none">
                             <option>1 Room</option>
                             <option>2 Rooms</option>
                             <option>3 Rooms</option>
                         </select>
                         <span class="material-icons absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-600">
                             expand_more
                         </span>
                     </div>
                 </div>

                 <!-- Guests Selection -->
                 <div class="relative mb-6">
                     <label class="block text-gray-700 text-xs font-bold mb-2">Guests</label>
                     <div id="guests-selector"
                         class="border border-gray-300 px-4 py-3 w-full text-gray-800 cursor-pointer flex justify-between items-center">
                         <span id="guests-display">1 Adult</span>
                         <span class="material-icons">expand_more</span>
                     </div>

                     <div id="guests-dropdown"
                         class="absolute top-full left-0 right-0 bg-white border border-gray-300 mt-1 p-4 z-10 hidden">
                         <div class="flex justify-between items-center mb-3">
                             <span>Adults</span>
                             <select id="adults-count" class="border border-gray-300 px-4 py-3 rounded-md">
                                 <option value="1" selected>1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                             </select>
                         </div>

                         <div class="flex justify-between items-center mb-3">
                             <span>Children <br><small class="text-gray-500">(2-12 years)</small></span>
                             <select id="children-count" class="border border-gray-300 px-4 py-3 rounded-md">
                                 <option value="0" selected>0</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                             </select>
                         </div>

                         <div class="flex justify-between items-center mb-4">
                             <span>Infants <br><small class="text-gray-500">(0-2 years)</small></span>
                             <select id="infants-count" class="border border-gray-300 px-4 py-3 rounded-md">
                                 <option value="0" selected>0</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                             </select>
                         </div>

                         <button id="done-button"
                             class="w-full border border-gray-400 py-3 text-gray-800 hover:bg-gray-100">
                             DONE
                         </button>
                     </div>
                 </div>

                 <button type="submit"
                     class="w-full bg-black text-white py-3 uppercase text-sm font-semibold hover:bg-gray-800">
                     Check Availability
                 </button>
             </form>
         </div>
     </div>


     <script>
         document.addEventListener("DOMContentLoaded", function() {
             // Set default check-in and check-out dates
             const today = new Date();
             document.getElementById('check-in').value = today.toISOString().split('T')[0];

             const tomorrow = new Date();
             tomorrow.setDate(today.getDate() + 1);
             document.getElementById('check-out').value = tomorrow.toISOString().split('T')[0];

             // Guests Dropdown Handling
             const guestsSelector = document.getElementById('guests-selector');
             const guestsDropdown = document.getElementById('guests-dropdown');
             const guestsDisplay = document.getElementById('guests-display');
             const doneButton = document.getElementById('done-button');

             guestsSelector.addEventListener('click', function() {
                 guestsDropdown.classList.toggle('hidden');
             });

             document.addEventListener('click', function(event) {
                 if (!guestsSelector.contains(event.target) && !guestsDropdown.contains(event.target)) {
                     guestsDropdown.classList.add('hidden');
                 }
             });

             doneButton.addEventListener('click', function(event) {
                 event.preventDefault();
                 updateGuestsDisplay();
                 guestsDropdown.classList.add('hidden');
             });

             document.getElementById('adults-count').addEventListener('change', updateGuestsDisplay);
             document.getElementById('children-count').addEventListener('change', updateGuestsDisplay);
             document.getElementById('infants-count').addEventListener('change', updateGuestsDisplay);

             function updateGuestsDisplay() {
                 const adults = parseInt(document.getElementById('adults-count').value);
                 const children = parseInt(document.getElementById('children-count').value);
                 const infants = parseInt(document.getElementById('infants-count').value);

                 let displayText = `${adults} Adult${adults > 1 ? 's' : ''}`;
                 if (children > 0) displayText += `, ${children} Child${children > 1 ? 'ren' : ''}`;
                 if (infants > 0) displayText += `, ${infants} Infant${infants > 1 ? 's' : ''}`;

                 guestsDisplay.textContent = displayText;
             }
         });
     </script>
