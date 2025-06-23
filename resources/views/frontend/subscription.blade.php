<x-page-layout>
    <section>
        <div class="container2 flex flex-col items-center gap-[40px] pt-[30px]">
            <h1 class="font-bold text-[40px] text-indigo-700">SubscriptionShip</h1>

            <div class=" grid grid-cols-3 py-[50px]  gap-[30px]">

                @foreach ($subscriptions as $sub)
                    <button type="button" data-modal-target="default-modal{{ $sub->id }}"
                        data-modal-toggle="default-modal{{ $sub->id }}"
                        class="bg-[#fcfcfc] rounded-[40px] px-5 py-4 shadow-lg shadow-indigo-600 hover:shadow-2xl hover:shadow-indigo-800">
                        <div>

                            <h2 class="font-[40px] text-blue-300">{{ $sub->name }}</h2>
                            <p>Price: <span class="text-green-500">NRs.{{ $sub->price }}</span> || Duration:
                                {{ $sub->duration }} Days</p>
                        </div>
                        <div class="space-y-3">

                            <b>About</b>
                            <div class="bg-[#e4e4e4] p-3">
                                {!! $sub->description !!}
                            </div>
                        </div>
                    </button>

                    <div id="default-modal{{ $sub->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Terms of Service
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="default-modal{{ $sub->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <form action="" method="post">
                                        <div class="grid md:grid-cols-2 gap-3 ">
                                            <div class="flex flex-col gap-2">
                                                <label for="com_name">Enter Your Company Name</label>
                                                <input type="text" name="com_name" id="com_name"
                                                    value="{{ old('name') }}">
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <label for="name">Enter Your Name</label>
                                                <input type="text" name="name" id="name"
                                                    value="{{ old('name') }}">
                                                @error('name')
                                                    <p class="text-red-600">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <label for="email">Enter Your Email</label>
                                                <input type="email" name="email" id="email"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <p class="text-red-600">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <label for="contact_no">Enter Your Contact Number</label>
                                                <input type="tel" name="contact_no" id="contact_no"
                                                    value="{{ old('contact_no') }}">
                                                @error('contact_no')
                                                    <p class="text-red-600">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <label for="address">Enter Your Address</label>
                                                <input type="text" name="address" id="address"
                                                    value="{{ old('address') }}">
                                                @error('address')
                                                    <p class="text-red-600">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                            <input type="text" name="subscription" id="subscription"
                                                value="{{ $sub->name }}"hidden>
                                            <div>
                                                <p>Amount:{{ $sub->price }}</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>
    <section>
        <div class="container2 mb-[19px]">
            <h3>Subscription Policy</h3>
            {!! $company->subscription_policies !!}
        </div>
    </section>
</x-page-layout>
