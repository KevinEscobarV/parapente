<footer class="text-gray-100 bg-lime-800 relative">
    <div class="container p-8 mx-auto">
        <div class="flex flex-wrap">
            <div class="lg:w-1/4 md:w-1/2 w-full sm:px-4">
                <x-mark-center class="w-48 text-white" />
                <div class="flex mt-5 items-center space-x-2 sm:space-x-4">
                    <a href="https://web.facebook.com/GASASAguazulOficial" target="_blank"
                        class="text-white hover:scale-110 transition duration-500 ease-in-out">
                        <span class="sr-only">Facebook</span>
                        <x-icon-facebook class="h-8" />
                    </a>
                    <a href="https://www.instagram.com/ga_sas_aguazul/?hl=es-la" target="_blank"
                        class="text-white hover:scale-110 transition duration-500 ease-in-out">
                        <span class="sr-only">Instagram</span>
                        <x-icon-instagram class="h-8" />
                    </a>
                    <a href="https://wa.me/message/7MKTPOCQMHWHK1?src=qr&fbclid=IwZXh0bgNhZW0CMTAAAR1hZUS6SdN31HrVrndmcotgN5tUZMOHJKxGy2Iaq1sQJvovUGlgT1bMRvs_aem_Ab1Y7HNNENsNpXbwRdUsfaEjlxVTHCRs1D1La2DsNjYz9j7Jr5-gNDlVwuR3aLzzLut9pCiX3jtNztF3DUpo_cXI" target="_blank"
                        class="text-white hover:scale-110 transition duration-500 ease-in-out">
                        <span class="sr-only">WhatsApp</span>
                        <x-icon-whatsapp class="h-8" />
                    </a>
                </div>
                <h2 class="font-bold mt-4 text-white tracking-widest text-xl mb-3">Contactos</h2>
                <nav class="list-none space-y-2">
                    <li>
                        <p class="text-gray-100 hover:text-white">+57 320-734-5009</p>
                    </li>
                </nav>
            </div>
            <div class="lg:w-2/4 md:w-1/2 w-full sm:px-4">
                <div class="rounded-lg overflow-hidden h-full w-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.108283301568!2d-75.59783052410819!3d6.2494599937389586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44290a836791fd%3A0xa73af6da6bb4ca91!2sCra.%2076%20%2343-24%2C%20Laureles%20-%20Estadio%2C%20Medell%C3%ADn%2C%20Laureles%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1694609659128!5m2!1ses!2sco"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full sm:px-4">
                <h2 class="font-bold text-white tracking-widest text-xl mb-3">Registrate</h2>
                <form action="#" method="POST">
                    @method('POST')
                    @csrf
                    @if ($errors->any())
                        <div {{ $attributes }}>
                            <div class="font-medium text-white dark:text-red-400">
                                {{ __('Whoops! Something went wrong.') }}
                            </div>

                            <ul class="mt-3 list-disc list-inside text-sm text-white dark:text-red-400">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mt-2">
                        <x-input id="name" placeholder="Nombre" class="block mt-1 w-full text-gray-800" type="text"
                            name="name" :value="old('name')" autocomplete="name" />
                    </div>
                    <div class="mt-2">
                        <x-input id="phone" placeholder="Telefono" class="block mt-1 w-full text-gray-800" type="text"
                            name="phone" :value="old('phone')" autocomplete="phone" />
                    </div>
                    <div class="mt-2">
                        <x-input id="document" placeholder="Numero de Documento" class="block mt-1 w-full text-gray-800"
                            type="text" name="document" :value="old('document')" required autocomplete="document" />
                    </div>
                    <div class="mt-2">
                        <x-input id="email" placeholder="Correo electronico" class="block mt-1 w-full text-gray-800"
                            type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>

                    <button type="submit" class="mt-4 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-500/80 transition-all duration-200 ease-in-out">
                        Suscribirme
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom-6 right-6 group absolute">
        <button id="jumpUp"
            class="flex items-center animate-bounce justify-center border-2 border-white text-white bg-green-700 rounded-full w-14 h-14 hover:bg-green-800 dark:bg-green-600 dark:hover:bg-green-700 focus:ring-4 focus:ring-green-300 focus:outline-none dark:focus:ring-green-800">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
            </svg>

            <span class="sr-only">Volver Arriba</span>
        </button>
    </div>
</footer>

@push('scripts')
    <script>
        const jumpUp = document.getElementById('jumpUp');
        jumpUp.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
@endpush
