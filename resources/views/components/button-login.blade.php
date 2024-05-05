<div class="fixed bottom-6 left-6 group z-20">
    <a href="{{route(request()->routeIs(['login', 'register']) ? 'home' : 'login')}}"
    class="flex items-center justify-center border-2 border-white text-white bg-green-700 rounded-full w-14 h-14 hover:bg-green-800 dark:bg-green-600 dark:hover:bg-green-700 focus:ring-4 focus:ring-green-300 focus:outline-none dark:focus:ring-green-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-7 h-7 {{request()->routeIs(['login', 'register']) ? '' : 'rotate-180'}} transition-transform group-hover:scale-125">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
        </svg>
        <span class="sr-only">Login</span>
    </a>
</div>