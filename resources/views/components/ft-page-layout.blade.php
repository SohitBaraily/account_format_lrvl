<x-page-layout>
    <nav class="sticky top-20">
        <div class="container2 h-15 w-full text-[#3d1a75] p-[30px]  flex items-center justify-between ">
            <h1 class="text-[35px]">Financial Transaction</h1>
            <div class="flex gap-4">
                <a class="hover:text-[#637583]" href="/journal">Journal</a>
                <a class="hover:text-[#637583]" href="/ledger">Ledger</a>
                <a class="hover:text-[#637583]" href="/trial-balance">Trial Balance</a>
            </div>
        </div>
    </nav>
    {{ $slot }}
</x-page-layout>
