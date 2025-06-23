<x-page-layout>
    <section>
        <div class="container1">
            <div class="relative right-4 ">
                <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                    class="inline-flex items-center px-2 py-1  text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">AlfaNum Code</button>
            </div>

        </div>
    </section>
    <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow-sm w-60">
        <div class="p-3">
            <label for="input-group-search" class="sr-only">Search</label>
            <div class="relative">
                <input type="text" id="input-group-search"
                    class="bg-gray-50 border border-black text-gray-900 text-sm rounded-lg  block w-full ps-10 p-2.5"
                    placeholder="Code">
            </div>
        </div>

    </div>

</x-page-layout>
