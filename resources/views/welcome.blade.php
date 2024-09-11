<x-guest-layout>

    <div class="relative h-screen bg-white overflow-hidden bg-cover bg-center">

        <div class="splide h-full z-10 " role="group" aria-label="Splide Welcome">
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="text-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
                <button class="splide__arrow splide__arrow--next">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="text-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
            <div class="splide__track h-full brightness-50">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('img/slide1.jpg') }}" alt="Auth BG">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('img/slide2.jpg') }}" alt="Auth BG 2">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('img/slide3.jpg') }}" alt="Auth BG 3">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('img/slide4.jpg') }}" alt="Auth BG 3">
                    </li>
                </ul>
            </div>
        </div>

        <div class="absolute top-0 z-20 w-full flex items-center justify-between p-4">

            <x-logo-parapente class="w-32" />

            <div class="ml-3 flex items-center space-x-2 sm:space-x-4">
                <a href="https://web.facebook.com/GASASAguazulOficial" target="_blank"
                    class="text-white hover:scale-110 hover:text-lime-700 transition duration-500 ease-in-out">
                    <span class="sr-only">Facebook</span>
                    <x-icon-facebook class="h-8" />
                </a>
                <a href="https://www.instagram.com/ga_sas_aguazul/?hl=es-la" target="_blank"
                    class="text-white hover:scale-110 hover:text-lime-700 transition duration-500 ease-in-out">
                    <span class="sr-only">Instagram</span>
                    <x-icon-instagram class="h-8" />
                </a>
                <a href="https://wa.me/message/7MKTPOCQMHWHK1?src=qr&fbclid=IwZXh0bgNhZW0CMTAAAR1hZUS6SdN31HrVrndmcotgN5tUZMOHJKxGy2Iaq1sQJvovUGlgT1bMRvs_aem_Ab1Y7HNNENsNpXbwRdUsfaEjlxVTHCRs1D1La2DsNjYz9j7Jr5-gNDlVwuR3aLzzLut9pCiX3jtNztF3DUpo_cXI" target="_blank"
                    class="text-white hover:scale-110 hover:text-lime-700 transition duration-500 ease-in-out">
                    <span class="sr-only">WhatsApp</span>
                    <x-icon-whatsapp class="h-8" />
                </a>
                <x-button id="jumpSection">
                    Conocerme
                </x-button>
            </div>
        </div>
        <div class="absolute inset-0 h-full flex items-center justify-center px-12">
            <x-mark-center class="h-64 z-30" />
        </div>
    </div>

    <div class="bg-white">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto text-center flex flex-col gap-8">
                <h2 class="text-5xl font-extrabold text-lime-800">¿Quiénes  SOMOS?</h2>
                <h4 class="text-xl md:text-2xl font-semibolde">
                    "Somos un equipo apasionado de profesionales del parapente dedicados a proporcionar emocionantes experiencias en el aire. Nos comprometemos con la seguridad, la excelencia técnica y la satisfacción del cliente en cada vuelo. Nuestra misión es crear momentos inolvidables”
                </h4>
                <div class="grid grid-cols-7 mt-12 gap-6">
                    <div class="col-span-8 sm:col-span-3">
                        <img src="{{ asset('img/1.png') }}" alt="foto6" class="rounded-xl">
                    </div>
                    <div class="col-span-4 flex flex-col gap-4 text-left">
                        <header>
                            <h2 class="text-3xl md:text-5xl font-extrabold">MISION</h2>
                        </header>
                        <div class="flex flex-col gap-1">
                            <p class="font-medium text-sm">
                                "Nuestra misión es elevar los sueños y las emociones de nuestros clientes mediante la experiencia incomparable de vuelos inductivos de parapente. Nos comprometemos a proporcionar un servicio de calidad excepcional, enfocado en la seguridad, la excelencia técnica y la atención personalizada. Inspiramos la pasión por la aventura y la conexión con la naturaleza, creando momentos inolvidables que perduran en la memoria de nuestros clientes."
                            </p>
                        </div>

                        <header class="mt-24">
                            <h2 class="text-3xl md:text-5xl font-extrabold">VISION</h2>
                        </header>
                        <div class="flex flex-col gap-1">
                            <p class="font-medium text-sm">
                                "Nos visualizamos como líderes en la industria de los deportes aéreos, reconocidos por nuestra excelencia en la prestación de servicios de vuelos inductivos de parapente. Nos esforzamos por expandir nuestros horizontes, alcanzando nuevos destinos y desafiando los límites de la experiencia humana en el aire. A través de la innovación constante, la dedicación al cliente y el compromiso con la seguridad, aspiramos a ser la opción preferida de aventureros en busca de emociones auténticas y memorables en el cielo."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-36">
                <div class="flex-col">
                    <div class="w-full aspect-square relative">
                        <img src="{{ asset('img/foto1.jpg') }}" alt="foto1"
                            class="mt-2 ml-4 rounded-full w-full h-full absolute">
                        <div class="rounded-full h-40 aspect-square absolute -bottom-4 -right-6"
                            style="background: repeating-linear-gradient( -45deg, #00a552, #11a76d 3px, #fffcfe00 3px, #fffcfe00 10px );">
                        </div>
                        <div class="bg-lime-700 rounded-full h-full w-full"></div>
                    </div>
                    <h2 class="text-4xl mt-5 font-extrabold text-black">
                        Omar Yesid García Suarez
                    </h2>
                    <div class="flex mt-3 items-center">
                        <div class="h-1 w-20 bg-gray-800"></div>
                        <div class="h-3 w-3 -ml-2 rounded-full bg-gray-800"></div>
                    </div>
                    <p class="mt-2 text-base text-gray-500">
                        Imagina a un espíritu libre, siempre buscando desafiar los límites del cielo. Con ojos brillantes y una sonrisa que refleja su pasión por la aventura, el piloto de parapente es un verdadero amante de la libertad.
                    </p>
                </div>

                <div class="flex-col">
                    <div class="w-full aspect-square relative">
                        <img src="{{ asset('img/foto2.jpg') }}" alt="foto2"
                            class="mt-2 ml-4 rounded-full w-full h-full absolute">
                        <div class="rounded-full h-40 aspect-square absolute -bottom-4 -right-6"
                            style="background: repeating-linear-gradient( -45deg, #00a552, #11a76d 3px, #fffcfe00 3px, #fffcfe00 10px );">
                        </div>
                        <div class="bg-lime-700 rounded-full h-full w-full"></div>
                    </div>
                    <h2 class="text-4xl mt-5 font-extrabold text-black">
                        Lorem ipsum dolor sit amet
                    </h2>
                    <div class="flex mt-3 items-center">
                        <div class="h-1 w-20 bg-gray-800"></div>
                        <div class="h-3 w-3 -ml-2 rounded-full bg-gray-800"></div>
                    </div>
                    <p class="mt-2 text-base text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt velit eius cum enim, amet expedita consectetur doloremque, inventore facere adipisci obcaecati, sapiente illum odio asperiores quae minus voluptatem cupiditate?
                    </p>
                </div>

                <div class="flex-col">
                    <div class="w-full aspect-square relative">
                        <img src="{{ asset('img/foto3.jpg') }}" alt="foto3"
                            class="mt-2 ml-4 rounded-full w-full h-full absolute">
                        <div class="rounded-full h-40 aspect-square absolute -bottom-4 -right-6"
                            style="background: repeating-linear-gradient( -45deg, #00a552, #11a76d 3px, #fffcfe00 3px, #fffcfe00 10px );">
                        </div>
                        <div class="bg-lime-700 rounded-full h-full w-full"></div>
                    </div>
                    <h2 class="text-4xl mt-5 font-extrabold text-black">
                        Lorem ipsum dolor sit amet
                    </h2>
                    <div class="flex mt-3 items-center">
                        <div class="h-1 w-20 bg-gray-800"></div>
                        <div class="h-3 w-3 -ml-2 rounded-full bg-gray-800"></div>
                    </div>
                    <p class="mt-2 text-base text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam fugiat perspiciatis iusto ratione itaque, reiciendis dignissimos. Explicabo ullam molestias ea odit, tenetur fugit unde sapiente possimus earum aspernatur perferendis voluptatem?
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-white" id="sectionPaulina">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-20 lg:grid-cols-2">
                <div class="flex-col">
                    <x-icon-muesca class="text-lime-600 float-right -mb-2" />
                    <img src="{{ asset('img/foto6.jpg') }}" alt="foto4" class="rounded-lg w-full pr-10">
                </div>
                <div class="flex-col text-center lg:text-left">
                    <h2 class="text-5xl mt-16 font-extrabold text-black">
                        SOMOS GA S.A.S
                    </h2>
                    <p class="mt-8 text-2xl text-gray-500">
                        Contamos con más 5 años de experiencia, en la práctica y organización de eventos deportivos, en el departamento de Casanare. Esta experiencia nos ha permitido brindar calidad en los servicios prestados por nuestra compañía.
                    </p>
                </div>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-y-10 gap-x-20 lg:grid-cols-2">
                <div class="flex-col text-center lg:text-right">
                    <h2 class="text-5xl mt-16 font-extrabold text-black">
                        Uno de nuestros mayores logros
                    </h2>
                    <p class="mt-8 text-2xl text-gray-500">
                        Lograr posicionar GA S.A.S con la calidad y el servicio que nos caracteriza, brindando a nuestros clientes la seguridad y confianza que ellos necesitan.
                    </p>
                </div>
                <div class="flex-col">
                    <x-icon-muesca class="text-lime-600 float-left -mb-2 transform scale-x-[-1]" />
                    <img src="{{ asset('img/background.jpg') }}" alt="foto5" class="rounded-lg w-full pl-10">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white bg-cover bg-center" style="background-image: url({{ asset('img/background.jpg') }})">
        <div class="h-full bg-lime-900/70">
            <div class="container mx-auto py-32 sm:py-48 px-4 sm:px-6 lg:px-8">
                <h1 class="text-2xl sm:text-4xl font-bold text-white text-center">
                    SOMOS GA S.A.S
                </h1>
            </div>
        </div>
    </div>



    <div class="bg-white" id="sectionLogros">
        <div class="grid grid-cols-6 gap-20 md:gap-10 max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="col-span-6 md:col-span-4 flex flex-col gap-8">
                <h2 class="text-5xl mt-16 font-extrabold text-[#32891c]">
                    RECOMENDACIONES
                </h2>
                <p class="mt-8 text-2xl text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="flex flex-col border-l-2 border-[#5a891c] pl-4">
                        <x-icon-family class="text-black h-[137px] mb-8" />
                        <h2 class="text-5xl font-extrabold text-[#5a891c]">
                            +5 Años
                        </h2>
                        <h6 class="font-semibold text-[#5a891c] tracking-tight">Niños y niñas mayores a 5 años</h6>
                        <p>Desde los 5 años en adelante, si es menor de edad debe ir acompañado de los padres de familia.</p>
                    </div>
                    <div class="flex flex-col border-l-2 border-[#5a891c] pl-4">
                        <x-icon-house class="text-black h-[137px] mb-8" />
                        <h2 class="text-5xl font-extrabold text-[#5a891c]">
                            Botas
                        </h2>
                        <h6 class="font-semibold text-[#5a891c] tracking-tight">Tenis o botas de montaña</h6>
                        <p>Para la comodidad y seguridad de nuestros clientes, es necesario llevar calzado adecuado.</p>
                    </div>
                    <div class="flex flex-col border-l-2 border-[#5a891c] pl-4">
                        <x-icon-building class="text-black h-[137px] mb-8" />
                        <h2 class="text-5xl font-extrabold text-[#5a891c]">
                            21
                        </h2>
                        <h6 class="font-semibold text-[#5a891c] tracking-tight">Centros Integrales</h6>
                        <p>para la familia para acercarles la oferta institucional en sus barrios</p>
                    </div>
                </div>
            </div>

            <div class="col-span-6 md:col-span-2 flex flex-col relative">
                <x-icon-blob class="w-full text-[#29891c] absolute top-[-35px] right-[-35px] hidden lg:block" />
                <img src="{{ asset('img/foto5.jpg') }}" alt="foto7" class="rounded-xl z-10" style="box-shadow: -11px -11px 0px -1px white, -11px -11px 0px 0px #4d891c">
            </div>
        </div>
    </div>


    <div class="bg-white pb-12">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-20 lg:grid-cols-2">
                <div class="flex-col">
                    <video controls class="rounded-xl mx-auto max-w-4xl">
                        <source src="{{ asset('img/videocorto.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="flex-col">
                    <p class="text-xl mt-16 font-extrabold text-black">
                        Video campaña
                    </p>
                    <h2 class="text-6xl mt-4 font-extrabold text-gray-300 drop-shadow">
                        SOMOS GA S.A.S
                    </h2>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            const jumpSection = document.getElementById('jumpSection');
            jumpSection.addEventListener('click', () => {
                document.getElementById('sectionPaulina').scrollIntoView({
                    behavior: 'smooth'
                });
            });
            new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                pauseOnHover: false,
                interval: 4000,
                speed: 800,
                arrows: true,
                pagination: true,
                cover: true,
            }).mount();
        </script>
    @endpush

</x-guest-layout>