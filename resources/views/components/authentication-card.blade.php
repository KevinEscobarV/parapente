<div class="h-screen bg-cover bg-center" style="background-image: url({{ asset('img/slide1.jpg') }})">
    <div class="h-full flex flex-col sm:justify-center items-center pt-6 sm:pt-0 backdrop-blur-md backdrop-brightness-50">
        <div>
            {{ $logo }}
        </div>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4">
            {{ $slot }}
        </div>
    </div>
</div>
