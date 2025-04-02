<nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between items-center">
            <!-- Logo -->
            <div class="flex">
                <div class="flex shrink-0 items-center">
                    <a href="{{ url('/') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden sm:flex space-x-4 items-center">
                <x-nav-link :href="url('/')" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link :href="url('/about')" :active="request()->is('about')">About</x-nav-link>

                <!-- Social Icons -->
                <a href="https://www.facebook.com/events/s/albania-afro-latin-festival/978602950664588/?mibextid=9l3rBW&rdid=HF2NCoMbir01HoVo#" target="_blank" rel="noopener noreferrer">
                    <img src="https://img.icons8.com/?size=100&id=13912&format=png&color=000000" alt="Facebook" class="h-6 w-6" />
                </a>
                <a href="https://www.instagram.com/official_albania_afrolatin/?hl=nl" target="_blank" rel="noopener noreferrer">
                    <img src="https://img.icons8.com/?size=100&id=32323&format=png&color=000000" alt="Instagram" class="h-6 w-6" />
                </a>

            </div>

            <!-- Mobile Hamburger -->
            <div class="flex sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" @click.away="open = false" class="sm:hidden bg-white shadow-md">
        <div class="px-4 py-2 space-y-2">
            <x-responsive-nav-link :href="url('/')" :active="request()->is('/')">Home</x-responsive-nav-link>
            <x-responsive-nav-link :href="url('/about')" :active="request()->is('about')">About</x-responsive-nav-link>

            <div class="flex justify-center space-x-4 pt-4">
                <a href="https://www.facebook.com/events/s/albania-afro-latin-festival/978602950664588/?mibextid=9l3rBW&rdid=HF2NCoMbir01HoVo#" target="_blank">
                    <img src="https://img.icons8.com/?size=100&id=13912&format=png&color=000000" alt="Facebook" class="h-6 w-6" />
                </a>
                <a href="https://www.instagram.com/official_albania_afrolatin/?hl=nl" target="_blank">
                    <img src="https://img.icons8.com/?size=100&id=32323&format=png&color=000000" alt="Instagram" class="h-6 w-6" />
                </a>
            </div>
        </div>
    </div>
</nav>
