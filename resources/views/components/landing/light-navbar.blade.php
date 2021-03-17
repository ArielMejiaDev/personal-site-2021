 <div class="text-gray-800 bg-transparent body-font relative z-10">
    <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
        <div href="/" class="lg:pl-6 focus:outline-none md:mr-auto mx-auto mb-10 md:mb-0 w-full md:w-auto">
            <div class="w-full inline-flex items-center justify-between">
                <a href="{{ route('welcome') }}" class="font-semibold tracking-tighter transition duration-1000 ease-in-out transform text-gray-700 lg:text-md text-bold lg:mr-8">
                    Ariel Mejia Dev
                </a>
                <a href="#" class="md:hidden bg-purple-400 rounded p-1 text-sm font-semibold text-gray-300 hover:text-white">Download CV</a>
            </div>
        </div>
        <nav class="flex flex-wrap items-center justify-center text-base md:mx-auto">
            <a href="{{ route('portfolio') }}" class="mr-5 text-sm font-semibold text-gray-700 hover:text-gray-500 my-1">Portfolio</a>
            <a href="{{ route('about-me') }}" class="mr-5 text-sm font-semibold text-gray-700 hover:text-gray-500 my-1">About Me</a>
            <a href="https://dev.to/arielmejiadev" target="_blank" class="mr-5 text-sm font-semibold text-gray-700 hover:text-gray-500 my-1">Blog</a>
            <a href="{{ route('contact') }}" class="mr-5 text-sm font-semibold text-gray-700 hover:text-gray-500 my-1">Contact me</a>
        </nav>
        <button class="hidden md:block items-center px-2 py-2 ml-auto font-semibold text-white text-sm transition duration-500 ease-in-out transform bg-purple-400 rounded-lg hover:bg-purple-500 focus:ring focus:outline-none">
            Download CV
        </button>
    </div>
</div>
