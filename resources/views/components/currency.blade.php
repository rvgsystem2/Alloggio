{{-- <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-semibold text-gray-700 text-center mb-4">Currency Converter</h2>
        <div class="mb-4">
            <label class="block text-gray-600">Amount</label>
            <input id="amount" type="number" class="w-full p-2 border rounded mt-1" placeholder="Enter amount"
                oninput="convertCurrency()">
        </div>
        <div class="mb-4">
            <label class="block text-gray-600">From</label>
            <select id="fromCurrency" class="w-full p-2 border rounded mt-1" onchange="convertCurrency()"></select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-600">To</label>
            <select id="toCurrency" class="w-full p-2 border rounded mt-1" onchange="convertCurrency()"></select>
        </div>
        <p id="result" class="mt-4 text-center text-lg font-semibold text-gray-700"></p>
    </div>
</div>

<script>
    async function populateCurrencies() {
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
        const data = await response.json();
        const currencies = Object.keys(data.rates);

        const fromCurrency = document.getElementById("fromCurrency");
        const toCurrency = document.getElementById("toCurrency");

        currencies.forEach(currency => {
            const optionFrom = document.createElement("option");
            optionFrom.value = currency;
            optionFrom.textContent = currency;
            fromCurrency.appendChild(optionFrom);

            const optionTo = document.createElement("option");
            optionTo.value = currency;
            optionTo.textContent = currency;
            toCurrency.appendChild(optionTo);
        });

        fromCurrency.value = "USD";
        toCurrency.value = "EUR";
    }

    async function convertCurrency() {
        const amount = document.getElementById("amount").value;
        const fromCurrency = document.getElementById("fromCurrency").value;
        const toCurrency = document.getElementById("toCurrency").value;

        if (amount === "" || amount <= 0) {
            document.getElementById("result").innerText = "";
            return;
        }

        const response = await fetch(`https://api.exchangerate-api.com/v4/latest/${fromCurrency}`);
        const data = await response.json();
        const rate = data.rates[toCurrency];
        const convertedAmount = (amount * rate).toFixed(2);

        document.getElementById("result").innerText =
        `${amount} ${fromCurrency} = ${convertedAmount} ${toCurrency}`;
    }

    document.addEventListener("DOMContentLoaded", populateCurrencies);
</script> --}}


<div class="bg-gray-100 font-sans">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-xl shadow-xl w-full max-w-md overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6">
                <h2 class="text-2xl font-bold text-white text-center">Currency Converter</h2>
                <p class="text-blue-100 text-center text-sm mt-1">Live exchange rates</p>
            </div>

            <!-- Form -->
            <div class="p-6">
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Amount</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-coins text-gray-400"></i>
                        </div>
                        <input id="amount" type="number"
                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Enter amount" oninput="convertCurrency()">
                    </div>
                </div>

                <div class="grid grid-cols-5 gap-4 mb-6">
                    <div class="col-span-2">
                        <label class="block text-gray-700 font-medium mb-2">From</label>
                        <div class="relative">
                            <select id="fromCurrency"
                                class="w-full pl-3 pr-10 py-3 border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                onchange="convertCurrency()">
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center">
                        <button id="swapButton"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-600 p-2 rounded-full transition duration-300"
                            onclick="swapCurrencies()">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                    </div>

                    <div class="col-span-2">
                        <label class="block text-gray-700 font-medium mb-2">To</label>
                        <div class="relative">
                            <select id="toCurrency"
                                class="w-full pl-3 pr-10 py-3 border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                onchange="convertCurrency()">
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="loadingIndicator" class="hidden flex justify-center items-center space-x-2 my-4">
                    <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-blue-500"></div>
                    <p class="text-sm text-gray-600">Fetching rates...</p>
                </div>

                <div id="resultContainer" class="bg-gray-50 p-4 rounded-lg border border-gray-200 hidden">
                    <p id="result" class="text-center text-xl font-semibold text-gray-800"></p>
                    <p id="rate" class="text-center text-sm text-gray-500 mt-1"></p>
                    <p id="lastUpdated" class="text-center text-xs text-gray-400 mt-1"></p>
                </div>

                <div id="errorContainer" class="bg-red-50 p-4 rounded-lg border border-red-200 hidden">
                    <p id="errorMessage" class="text-center text-sm text-red-600"></p>
                </div>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                <p class="text-xs text-gray-500 text-center">Data provided by ExchangeRate-API</p>
            </div>
        </div>
    </div>
</div>
<script>
    let rates = {};
    let lastUpdated = null;

    async function populateCurrencies() {
        showLoading(true);
        try {
            const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
            const data = await response.json();
            rates = data.rates;
            lastUpdated = new Date(data.time_last_updated * 1000);

            const currencies = Object.keys(rates);
            const popularCurrencies = ['USD', 'EUR', 'GBP', 'JPY', 'CAD', 'AUD', 'CHF', 'CNY', 'INR'];

            const fromCurrency = document.getElementById("fromCurrency");
            const toCurrency = document.getElementById("toCurrency");

            // Add popular currencies first
            popularCurrencies.forEach(currency => {
                if (currencies.includes(currency)) {
                    addCurrencyOption(fromCurrency, currency);
                    addCurrencyOption(toCurrency, currency);
                }
            });

            // Add divider
            if (currencies.length > popularCurrencies.length) {
                addDivider(fromCurrency);
                addDivider(toCurrency);
            }

            // Add remaining currencies
            currencies.forEach(currency => {
                if (!popularCurrencies.includes(currency)) {
                    addCurrencyOption(fromCurrency, currency);
                    addCurrencyOption(toCurrency, currency);
                }
            });

            fromCurrency.value = "USD";
            toCurrency.value = "EUR";
            convertCurrency();
        } catch (error) {
            showError("Failed to load currency data. Please try again later.");
        } finally {
            showLoading(false);
        }
    }

    function addCurrencyOption(selectElement, currency) {
        const option = document.createElement("option");
        option.value = currency;
        option.textContent = `${currency} - ${getCurrencyName(currency)}`;
        selectElement.appendChild(option);
    }

    function addDivider(selectElement) {
        const divider = document.createElement("option");
        divider.disabled = true;
        divider.textContent = "─────────────";
        selectElement.appendChild(divider);
    }

    function getCurrencyName(code) {
        const currencyNames = {
            'USD': 'US Dollar',
            'EUR': 'Euro',
            'GBP': 'British Pound',
            'JPY': 'Japanese Yen',
            'CAD': 'Canadian Dollar',
            'AUD': 'Australian Dollar',
            'CHF': 'Swiss Franc',
            'CNY': 'Chinese Yuan',
            'INR': 'Indian Rupee',
            'BRL': 'Brazilian Real',
            'RUB': 'Russian Ruble',
            'KRW': 'South Korean Won',
            'SGD': 'Singapore Dollar',
            'NZD': 'New Zealand Dollar',
            'MXN': 'Mexican Peso',
            'HKD': 'Hong Kong Dollar',
            'TRY': 'Turkish Lira',
            'ZAR': 'South African Rand',
            'SEK': 'Swedish Krona',
            'NOK': 'Norwegian Krone'
        };
        return currencyNames[code] || code;
    }

    async function convertCurrency() {
        const amount = document.getElementById("amount").value;
        const fromCurrency = document.getElementById("fromCurrency").value;
        const toCurrency = document.getElementById("toCurrency").value;

        if (amount === "" || amount <= 0) {
            document.getElementById("resultContainer").classList.add("hidden");
            return;
        }

        showLoading(true);
        hideError();

        try {
            let rate;

            // If we need to update rates for the selected 'from' currency
            if (!rates[fromCurrency] || fromCurrency !== 'USD') {
                const response = await fetch(`https://api.exchangerate-api.com/v4/latest/${fromCurrency}`);
                const data = await response.json();
                rate = data.rates[toCurrency];
                lastUpdated = new Date(data.time_last_updated * 1000);
            } else {
                // Calculate cross rate
                rate = rates[toCurrency] / rates[fromCurrency];
            }

            const convertedAmount = (amount * rate).toFixed(2);

            document.getElementById("result").innerText =
                `${parseFloat(amount).toLocaleString()} ${fromCurrency} = ${parseFloat(convertedAmount).toLocaleString()} ${toCurrency}`;

            document.getElementById("rate").innerText =
                `1 ${fromCurrency} = ${rate.toFixed(4)} ${toCurrency}`;

            document.getElementById("lastUpdated").innerText =
                `Last updated: ${lastUpdated.toLocaleString()}`;

            document.getElementById("resultContainer").classList.remove("hidden");
        } catch (error) {
            showError("Failed to convert currency. Please try again later.");
        } finally {
            showLoading(false);
        }
    }

    function swapCurrencies() {
        const fromCurrency = document.getElementById("fromCurrency");
        const toCurrency = document.getElementById("toCurrency");

        const temp = fromCurrency.value;
        fromCurrency.value = toCurrency.value;
        toCurrency.value = temp;

        convertCurrency();

        // Add animation effect
        const swapButton = document.getElementById("swapButton");
        swapButton.classList.add("animate-spin");
        setTimeout(() => {
            swapButton.classList.remove("animate-spin");
        }, 500);
    }

    function showLoading(isLoading) {
        const loadingIndicator = document.getElementById("loadingIndicator");
        if (isLoading) {
            loadingIndicator.classList.remove("hidden");
        } else {
            loadingIndicator.classList.add("hidden");
        }
    }

    function showError(message) {
        const errorContainer = document.getElementById("errorContainer");
        const errorMessage = document.getElementById("errorMessage");

        errorMessage.innerText = message;
        errorContainer.classList.remove("hidden");
    }

    function hideError() {
        document.getElementById("errorContainer").classList.add("hidden");
    }

    document.addEventListener("DOMContentLoaded", populateCurrencies);
</script>
