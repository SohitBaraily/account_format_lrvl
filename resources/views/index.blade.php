<x-page-layout>



    <div class="body">
        <section>
            <div class="hd1">
                <h2>Journal Entries</h2>
            </div>
            <form action="/save-journal-info" method="post">
                @csrf
                <div class="container">
                    <div class="inbox ib1 w-[14%]">
                        <div class="hib">
                            <h3>
                                Date
                            </h3>
                        </div>
                        <div class="mmbd">
                            <div class="mbd mbd1">

                            </div>
                        </div>
                    </div>
                    <div class="inbox ib2 w-[50%]">
                        <div class="hib">
                            <h3>
                                Particulars
                            </h3>
                        </div>
                        <div class="mmbd">
                            <div class="mbd mbd2">

                            </div>
                        </div>
                    </div>
                    <div class="inbox ib3 w-[4%]">
                        <div class="hib">
                            <h3>
                                L.F.
                            </h3>
                        </div>
                        <div class="mmbd">
                            <div class="mbd mbd3">

                            </div>
                        </div>
                    </div>
                    <div class="inbox ib4 w-[16%]">
                        <div class="hib">
                            <h3 class="ibh1">
                                Debit (Rs.)
                            </h3>
                        </div>
                        <div class="mmbd">
                            <div class="mbd mbd4">

                            </div>
                        </div>
                    </div>
                    <div class="inbox ib5 w-[16%]">
                        <div class="hib">
                            <h3 class="ibh1">
                                Credit (Rs.)
                            </h3>
                        </div>
                        <div class="mmbd">
                            <div class="mbd mbd5">

                            </div>
                        </div>
                    </div>
                </div>
                <button class="border border-black bg-gray-200 rounded" type="submit">
                    submit
                </button>
            </form>
        </section>
        <div type="button" class="div ">
            <button class="add border border-black bg-gray-200 rounded">Add new</button>
        </div>
    </div>
    <a href=""></a>




    <script src="js/account.js"></script>
</x-page-layout>
