<nav class="bg-yellow-300 border-gray-200 px-4 lg:px-6 py-2.5 shadow-md">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <a href="/" class="flex items-center gap-2">
            <img src="{{ asset('images/logo.png') }}" class="h-11" alt="Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap font-[Poppins]"><span class="text-green-700">Gab<span class="text-amber-700">Salabat</span></span></span>
        </a>
        <div class="flex items-center lg:order-2 font-[Poppins]">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-amber-800 text-gray-700">Dashboard</a>
            @else
                <a href="/login" class="hover:text-amber-800 mr-2">
                    Log in</a>
                <a href="/register" class="shadow-md rounded-md px-2 py-1 bg-amber-500 hover:bg-amber-400 hover:text-amber-800">
                    Register</a>
                @endauth
            @endif
            <button data-navigate-track data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center ml-2 text-sm text-gray-500 rounded-lg lg:hidden" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 font-[Poppins] text-center">
                <li> 
                    <a href="/#home" class="nav-link block hover:text-amber-800 text-amber-800" aria-current="page">
                        Home</a>
                </li>
                <li>
                    <a href="/#about" class="nav-link block hover:text-amber-800">
                        About Us</a>
                </li>
                <li>
                    <a href="/#product" class="nav-link block hover:text-amber-800">
                        Product</a>
                </li>
                <li>
                    <a href="/#contact" class="nav-link block hover:text-amber-800">
                        Contact</a>
                </li> 
                <li>
                    <a href="#cart" class="nav-link md:block hover:text-amber-800 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg></a>
                </li>  
            </ul>
        </div>
    </div>
</nav>