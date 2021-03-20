<x-guest-layout>
    <section class="text-gray-700 body-font min-h-screen bg-cover bg-no-repeat relative" style="background: url('{{ asset('images/splatters/splatter-dark.png') }}')">

        <div class="hidden md:block absolute bottom-1 right-1 z-0">
            <img src="{{ asset('images/assets/1.png') }}" alt="">
        </div>

        <div class="hidden md:block absolute -top-10 -left-20 z-0">
            <img src="{{ asset('images/assets/2.png') }}" alt="">
        </div>

        <x-landing.navbar />

        <div class="flex items-center">

            <div class="container flex flex-col items-center px-5 py-16 mx-auto lg:px-20 lg:py-24 xl:flex-row">

                <div class="w-6/6 mb-10 lg:max-w-lg lg:w-full xl:w-1/2 xl:mb-0">
                    <img class="transform hover:rotate-2" alt="hero" src="{{ asset('images/avatar.png') }}">
                </div>

                <div class="relative z-10 flex flex-col items-center text-center lg:flex-grow xl:w-1/2 py-10 lg:px-24 px-4 md:items-start md:text-left transform -rotate-0 sm:-rotate-2 bg-cover bg-no-repeat" style="background: url('{{ asset('images/splatters/splatter.jpeg') }}')">
                    <h1 class="w-full text-4xl md:text-5xl flex flex-col leading-none text-center uppercase font-extrabold tracking-tighter text-gray-800" style="right: -1rem; bottom: -1.5rem; text-shadow: rgb(80,223,255) 3px 3px; line-height: 72px;transform: translateX(0px) translateY(0px) rotate(-2deg) skewX(0deg) skewY(0deg) scaleX(1) scaleY(1);">
                        You are currently not connected to any networks.
                    </h1>
                </div>
            </div>

        </div>
    </section>
</x-guest-layout>
