{{-- Navbar --}}
<div class="flex justify-between bg-slate-800 text-white px-4">
    {{-- Logo --}}
    <div>
        <a href="" class="py-navbar-item block">Logo</a>
    </div>
    <div class="block md:hidden fixed z-20 top-0 left-0 bottom-0 bg-slate-900 w-[220px] h-full shadow-2xl transition-all hidden" id="menuBar">
        <ul>
            <li><a href="{{ route('home') }}" class="py-2 px-navbar-item flex items-center transition-all hover:bg-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Home
            </a></li>
            <li><a href="" class="py-2 px-navbar-item block transition-all hover:bg-slate-700">Category</a></li>
            <li><a href="" class="py-2 px-navbar-item block transition-all hover:bg-slate-700">Something</a></li>
        </ul>
        <ul>
            <li class="">
                <a href="{{ route('cart') }}" class="py-2 px-navbar-item flex items-center transition-all hover:bg-slate-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                Cart
                </a>
            </li>
            <li class="relative select-none">
                <div onclick="dropdown()" class="cursor-pointer py-2 px-navbar-item items-center flex justify-between transition-all hover:bg-slate-700 btnTrigger">
                    My Account
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </div>
                <ul class="w-full bg-slate-800 py-2 dropdown hidden">
                    <li>
                        <a href="" class="flex items-center py-1 px-4 transition-all hover:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                              </svg>                                  
                            My Profile
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center py-1 px-4 transition-all hover:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                              </svg>                                  
                            Watchlist
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center py-1 px-4 transition-all hover:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>                                  
                            Orders
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center py-1 px-4 transition-all hover:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                              </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
            <li class="my-3">
                <a href="" class="flex items-center py-2 px-navbar-item transition-all hover:bg-slate-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    Login
                </a>
            </li>
            <li class="px-3">
                <a href="" class="btn-emerald">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Signup for Free
                </a>
            </li>
        </ul>
    </div>
    {{-- Nav Content 1 --}}
    <nav class="hidden md:block">
        <ul class="grid grid-flow-col">
            <li><a href="{{ route('home') }}" class="py-navbar-item px-navbar-item flex items-center transition-all hover:bg-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>                      
                Home
            </a></li>
            <li><a href="" class="py-navbar-item px-navbar-item block transition-all hover:bg-slate-700">Category</a></li>
            <li><a href="" class="py-navbar-item px-navbar-item block transition-all hover:bg-slate-700">Something</a></li>
        </ul>
    </nav>  
    {{-- Nav Content 2 --}}
    <nav class="hidden md:block">
        <ul class="grid grid-flow-col items-center">
            <li class="">
                <a href="{{ route('cart') }}" class="py-navbar-item px-navbar-item flex items-center transition-all hover:bg-slate-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                Cart
                </a>
            </li>
            <li class="relative">
                <button onclick="dropdown()" class="py-navbar-item px-navbar-item items-center flex transition-all hover:bg-slate-700 btnTrigger">
                    My Account
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <input type="checkbox" hidden id="trigger">
                <ul class="absolute z-10 w-full right-0 bg-slate-900 py-2 hidden dropdown">
                    <li>
                        <a href="" class="flex items-center py-1 px-4 transition-all hover:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                              </svg>                                  
                            My Profile
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center py-1 px-4 transition-all hover:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                              </svg>                                  
                            Watchlist
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center py-1 px-4 transition-all hover:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>                                  
                            Orders
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center py-1 px-4 transition-all hover:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                              </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
            {{-- Login Button --}}
            <li>
                <a href="" class="flex items-center py-navbar-item px-navbar-item transition-all hover:bg-slate-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    Login
                </a>
            </li>
            {{-- Signup Button --}}
            <li>
                <a href="" class="btn-emerald">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Signup for Free
                </a>
            </li>
        </ul>
    </nav>
    <button class="block md:hidden" onclick="menu()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
</div>