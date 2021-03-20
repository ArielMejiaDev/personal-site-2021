<section class="text-gray-700 body-font min-h-screen bg-cover bg-no-repeat relative overflow-hidden" style="background: url('{{ asset('images/splatters/splatter.jpeg') }}')">

    <div class="hidden md:block absolute top-0 -right-24 z-10">
        <img src="{{ asset('images/assets/2.png') }}" alt="floating yellow triangle">
    </div>

    <div class="hidden md:block absolute bottom-0 -left-0 z-10">
        <img src="{{ asset('images/assets/8.png') }}" alt="floating purple liquid">
    </div>

    <x-landing.light-navbar />

    <div class="flex items-center">

        <div class="container flex flex-col items-center px-5 py-16 mx-auto lg:px-20 lg:py-24 xl:flex-row">

            <div class="w-6/6 mb-10 lg:max-w-lg lg:w-full xl:w-1/2 xl:mb-0 transform -rotate-0 sm:-rotate-12 hover:-rotate-6">
                <img alt="Me as a head jar" src="{{ asset('images/avatar.png') }}">
            </div>

            <div class="relative flex flex-col items-center text-center lg:flex-grow xl:w-1/2 md:items-start md:text-left">

                <div class="bg-purple-300 py-10 lg:px-24 px-4 bg-opacity-50">

                    <h1 style="bottom: -1.5rem; text-shadow: rgb(255,255,255) 3px 3px; line-height: 72px;transform: translateX(0px) translateY(0px) rotate(-2deg) skewX(0deg) skewY(0deg) scaleX(1) scaleY(1);" class="relative z-20 font-sans text-4xl md:text-5xl lg:text-7xl leading-none text-center uppercase font-extrabold tracking-tighter sm:text-center lg:text-left my-4 lg:mb-20">
                        <span class="relative">
                            <span class="absolute bottom-0 left-0 inline-block w-full h-4 mb-1 -ml-1 transform -skew-x-3 bg-indigo-300"></span>
                            <span class="relative text-purple-500">More</span>
                        </span>
                        <span class="relative block text-purple-700">about me</span>
                    </h1>

                    <ul class="relative z-20 block mt-6 text-sm text-gray-900 sm:text-center lg:text-left">
                            <li class="my-4">
                                I am the creator an mantainer of
                                <a target="_blank" rel="noreferrer" class="font-semibold text-black underline hover:text-gray-700" href="https://larapex-charts.netlify.app">Larapex Charts</a>
                                a laravel package to create charts with thousands of downloads & other Laravel packages.
                            </li>

                            <li class="my-4">
                                I also contribute to devdojo tails project,
                                <a target="_blank" rel="noreferrer" class="font-semibold text-black underline hover:text-gray-700" href="https://devdojo.com/tails">
                                    an opensource Tailwindcss library.
                                </a>
                            </li>
                            <li class="my-4">
                                If you want to know more about me,
                                <a target="_blank"  rel="noreferrer" class="font-semibold text-black underline hover:text-gray-700" href="https://www.youtube.com/watch?v=BFFTHJWqx9s">here is an old podcast interview in spanish.</a>
                            </li>
                        </ul>

                        <div class="relative flex justify-center lg:justify-start items-center mt-10">
                            <a href="#certificates" class="text-base leading-tight tracking-tighter transition duration-150 ease-in-out text-purple-600 md:py-2 font-extrabold md:text-lg xl:text-xl hover:text-purple-700 hover:underline">
                                View Certificates
                            </a>
                        </div>

                </div>

            </div>
        </div>

    </div>
</section>
