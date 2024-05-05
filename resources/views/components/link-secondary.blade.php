<a {{ $attributes->merge(['class' => 'inline-flex items-center cursor-pointer px-4 py-2 bg-transparent dark:bg-transparent border border-white rounded-full font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-white dark:hover:white hover:text-black focus:bg-pink-700 dark:focus:bg-white active:bg-pink-900 dark:active:bg-pink-300 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 dark:focus:ring-offset-pink-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
