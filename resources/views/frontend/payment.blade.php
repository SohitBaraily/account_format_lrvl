<x-page-layout>
    <section>
        <div class="container py-10">
            <form action="{{route('payment')}}" method="post">
                @csrf
                <div>
                    <div>
                        
                    </div>
                    <div>
                        <label for="address_note">Address Note</label>
                        <input type="text" name="address_note" id="address_note" class="w-full p-2 border border-gray-300 rounded">
                    </div>
                    <div>
                        <label for="contact">Contact No.</label>
                        <input type="text" name="contact" id="contact" class="w-full p-2 border border-gray-300 rounded">
                    </div>
                    <div>
                        <label for="payment">Select Payment Method</label>
                        <select name="payment" id="payment" class="w-full p-2 border border-gray-300 rounded">
                            <option value="Khalti">Khalti</option>
                        </select>
                    </div>
                    <div>
                        <button class="bg-[var(--primary)] text-white px-4 py-2 rounded" type="submit">Order</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-page-layout>
