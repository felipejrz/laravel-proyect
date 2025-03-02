<nav class="w-screen overflow-x-hidden bg-white border-b dark:bg-slate-900 border-slate-900/10 dark:border-slate-300/10">
    <div class="container px-4 mx-auto sm:px-8 lg:px-12">
        <div class="relative flex items-center justify-between h-16">
            {{-- Logo e íconos de navegación izquierda --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center flex-shrink-0">
                    <svg class="w-8 h-8 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                    </svg>
                </a>
                <div class="ml-8 flex space-x-4">
                    <a href="{{ route('home') }}"
                        class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('home') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        Home
                    </a>
                    <a href="{{ route('posts.index') }}"
                        class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('posts.*') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        Blog
                    </a>
                    <a href="{{ route('about') }}"
                        class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('about') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        About
                    </a>
                    <a href="{{ route('contact') }}"
                        class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('contact') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        Contact
                    </a>
                </div>
            </div>

            {{-- Enlaces de autenticación a la derecha --}}
            <div class="flex items-center space-x-4">
                @guest
                    <a href="{{ route('register') }}"
                        class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('register') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        Register
                    </a>
                    <a href="{{ route('login') }}"
                        class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        Login
                    </a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white text-slate-400">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
