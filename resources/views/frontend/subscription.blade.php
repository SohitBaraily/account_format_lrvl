<x-page-layout>
    <section>
        <div class="container2 flex flex-col items-center gap-[40px] pt-[30px]">
            <h1 class="font-bold text-[40px] text-indigo-700">SubscriptionShip</h1>
            <div class=" grid grid-cols-3 py-[50px]  gap-[30px]">
                @foreach ($subscriptions as $sub)
                    <div class="bg-[#fcfcfc] rounded-[40px] px-5 py-4 shadow-lg shadow-indigo-600 hover:shadow-2xl hover:shadow-indigo-800">
                        <div>
                            <h2 class="font-[40px] text-blue-300">{{ $sub->name }}</h2>
                            <p>Price: <span class="text-green-500">NRs.{{ $sub->price }}</span> || Duration:
                                {{ $sub->duration }}</p>
                        </div>
                        <div class="space-y-3">

                            <b>About</b>
                            <div class="bg-[#e4e4e4] p-3">
                                {!! $sub->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </section>
    <section>
        <div class="container2">
            <h3>Subscription Policy</h3>
            {!!$company->!!}
        </div>
    </section>
</x-page-layout>
