<div x-data="{ open: false }" class="bg-green-600 shadow-sm">
    <div class="max-w-screen-xl mx-auto px-6 py-4 flex items-center">
        <!-- Logo / Brand -->
        <a href="/" class="font-rounded text-white text-xl font-semibold">
            Masjid Asy-Syuhada Kalisari
        </a>

        <!-- Desktop Menu -->
        <div class="hidden sm:flex items-center ml-auto space-x-6">
            <ul class="flex space-x-4 text-base text-gray-300">
                <li>
                    <a href="/"
                        class="{{ Request::is('/') ? 'text-white border-b border-white' : 'border-b border-transparent' }} hover:text-white transition-all">
                        Beranda
                    </a>
                </li>
                <li><a href="#" class="hover:text-white transition-all">Profil</a></li>
                <li><a href="#" class="hover:text-white transition-all">Laporan Infaq</a></li>
                <li><a href="#" class="hover:text-white transition-all">Inventaris</a></li>
                <li>
                    <a href="/dashboard"
                        class="{{ Request::is('/dashboard') ? 'text-white border-b border-white' : 'border-b border-transparent' }} hover:text-white transition-all">
                        Dashboard hanya admin
                    </a>
                </li>
            </ul>

            <!-- Theme Toggle -->
            <label class="swap swap-rotate cursor-pointer">
                <input type="checkbox" class="theme-controller hidden" value="dark" />

                <!-- Sun icon -->
                <svg class="swap-off w-7 h-7 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>

                <!-- Moon icon -->
                <svg class="swap-on w-7 h-7 fill-current text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </label>
        </div>

        <!-- Mobile: Hamburger Button -->
        <div class="sm:hidden ml-auto">
            <button @click="open = !open" aria-label="Toggle menu" class="btn btn-ghost">
                <svg x-show="!open" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white"
                    viewBox="0 0 512 512">
                    <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                </svg>
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition x-cloak class="sm:hidden px-6 pb-4 space-y-2 text-white text-base">
        <a href="/" class="block hover:text-white">Beranda</a>
        <a href="#" class="block hover:text-white">Profil</a>
        <a href="#" class="block hover:text-white">Laporan Infaq</a>
        <a href="#" class="block hover:text-white">Inventaris</a>
        <a href="/dashboard" class="block hover:text-white">Dashboard Admin</a>

        <!-- Theme Toggle -->
        <label class="swap swap-rotate cursor-pointer">
            <input type="checkbox" class="theme-controller hidden" value="dark" />
            <svg class="swap-off w-7 h-7 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
            </svg>
            <svg class="swap-on w-7 h-7 fill-current text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
            </svg>
        </label>
    </div>
</div>
