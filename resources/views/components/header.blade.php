<nav class="bg-black ">
    <div class="container1 h-20 w-full p-[30px]  text-white flex items-center justify-between ">
        <img class="h-full" src="{{ asset(Storage::url($company->logo)) }}" alt="">
        <h1 class="text-[35px]">FINANCIAL FORMAT FOR COMPANIES</h1>
        <div >
            <div class="w-[25%] flex gap-4 justify-end items-center fixed top-1 right-4 text-red-600">
                @if (!Auth::user())
                    <a href="{{ route('register') }}">SignUp</a>
                    <a href="{{ route('login') }}">Login</a>
                @else
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button>
                            logout
                        </button>
                    </form>
                @endif
            </div>
            <div class="flex gap-4 ">
                <a class="hover:text-[#65ada4]" href="/">Home</a>
                <p>|</p>
                <a class="hover:text-[#65ada4]" href="/journal">Financial Transactions</a>
                <p>|</p>
                <a class="hover:text-[#65ada4]" href="/">Database</a>
            </div>
        </div>
    </div>

</nav>
