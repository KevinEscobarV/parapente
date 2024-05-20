<aside class="flex-shrink-0 hidden z-20 bg-gray-50 dark:bg-gray-900/95 border-r border-primary-800/50 dark:border-gray-700 md:block" 
x-data="{ open: $persist(false) }">
    <div class="flex flex-col h-full transition-all duration-500" :class="{ 'w-52': open, 'w-20': !open }">

        <div class="flex items-center justify-center px-4 my-10">
            <x-application-mark class="text-gray-500 dark:text-gray-200 w-full" />
        </div>

        <div class="flex flex-col items-center justify-center w-full my-4">
            <div class="self-end mt-2 -mb-3">
                <div x-on:click="open = ! open" class="px-2 py-1 flex justify-center items-center bg-white dark:bg-gray-800 rounded-full border border-primary-800 dark:border-gray-700 shadow-md cursor-pointer -mr-4">
                    <button class="text-primary-800 dark:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 transition-transform transform duration-1000" :class="{ 'rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar links -->
        <nav aria-label="Main" class="flex flex-col h-full py-3 mt-12 soft-scrollbar overflow-hidden hover:overflow-y-auto">
            <x-side-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" icon="chart-pie" wire:navigate>
                <span x-show="open" x-transition.duration.500ms>Administración</span>
            </x-side-link>
            <x-side-link href="{{ route('buyers') }}" :active="request()->routeIs('buyers*')" icon="megaphone" wire:navigate>
                <span x-show="open" x-transition.duration.500ms>Clientes</span>
            </x-side-link>
            <x-side-link href="{{ route('users') }}" :active="request()->routeIs('users')" icon="rocket-launch" wire:navigate>
                <span x-show="open" x-transition.duration.500ms>Pilotos</span>
            </x-side-link>
            <x-side-link href="#" icon="paper-airplane" wire:navigate>
                <span x-show="open" x-transition.duration.500ms>Vuelos</span>
            </x-side-link>
            <x-side-link href="{{ route('weather.index') }}" :active="request()->routeIs('weather.index')" icon="sun" wire:navigate>
                <span x-show="open" x-transition.duration.500ms>Clima</span>
            </x-side-link>
        </nav>

        <!-- Sidebar footer -->
        <div class="flex-shrink-0 border-t border-gray-100 dark:border-gray-700 px-2 py-4 space-y-2">
            <div class="p-4">
                <div class="inline-flex items-center gap-4 leading-4 font-light text-primary-900 rounded mr-4 dark:text-gray-200">
                    <span x-show="open" x-transition.duration.500ms>PARAPENTE</span>
                </div>
            </div>
        </div>
    </div>
</aside>