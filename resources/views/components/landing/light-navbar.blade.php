 <div class="text-gray-800 bg-transparent body-font relative z-10">
    <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
        <div href="/" class="lg:pl-6 focus:outline-none md:mr-auto mx-auto mb-10 md:mb-0 w-full md:w-auto">
            <div class="w-full inline-flex items-center justify-between">
                <a href="{{ route('welcome') }}" class="font-semibold tracking-tighter transition duration-1000 ease-in-out transform text-gray-700 lg:text-md text-bold lg:mr-8">
                    Ariel Mejia Dev
                </a>
                <a href="{{ asset('Software_Developer_Ariel_Mejia_Resume.pdf') }}" download class="md:hidden ml-auto items-center text-sm text-white px-2 py-2 rounded-lg bg-purple-600 hover:bg-purple-700 font-semibold focus:outline-none transition duration-500 ease-in-out">Download CV</a>
            </div>
        </div>
        <nav class="flex flex-wrap items-center justify-center text-base md:mx-auto">
            <a href="{{ route('portfolio') }}" class="mr-5 text-xs sm:text-sm font-semibold text-gray-700 hover:text-gray-500 my-1">Portfolio</a>
            <a href="{{ route('about-me') }}" class="mr-5 text-xs sm:text-sm font-semibold text-gray-700 hover:text-gray-500 my-1">About Me</a>
            <a href="https://dev.to/arielmejiadev" target="_blank" rel="noreferrer" class="mr-5 text-xs sm:text-sm font-semibold text-gray-700 hover:text-gray-500 my-1">Blog</a>
            <a href="{{ route('contact') }}" class="mr-5 text-xs sm:text-sm font-semibold text-gray-700 hover:text-gray-500 my-1">Contact me</a>
        </nav>
        <a href="{{ asset('Software_Developer_Ariel_Mejia_Resume.pdf') }}" download class="hidden md:block ml-auto items-center text-sm text-white px-2 py-2 rounded-lg bg-purple-600 hover:bg-purple-700 font-semibold focus:outline-none transition duration-500 ease-in-out">
            Download Resume
        </a>
    </div>
</div>
