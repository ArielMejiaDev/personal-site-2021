<section class="overflow-hidden text-gray-700 body-font bg-cover bg-no-repeat relative" style="background: url('{{ asset('images/splatters/splatter.jpeg') }}')">

    <x-landing.light-navbar />

    <div class="hidden md:block absolute top-10 -left-5 z-0">
        <img src="{{ asset('images/assets/8.png') }}" alt="floating purple liquid">
    </div>

    <div class="hidden md:block absolute bottom-0 -left-5 z-0">
        <img src="{{ asset('images/assets/9.png') }}" alt="floating purple liquid">
    </div>

    <div class="hidden md:block absolute top-24 right-0 z-0">
        <img src="{{ asset('images/assets/10.png') }}" alt="floating dark triangle">
    </div>

    <div class="container mx-auto">

        <div class="flex justify-center my-4 lg:my-20 mx-4">
            <h2 style="right: -1rem; bottom: -1.5rem; text-shadow: rgb(138,124,174) 3px 3px; line-height: 72px;transform: translateX(0px) translateY(0px) rotate(-2deg) skewX(0deg) skewY(0deg) scaleX(1) scaleY(1);" class="w-full sm:w-auto inline-block py-1 px-10 my-8 mx-0 text-4xl md:text-5xl lg:text-7xl leading-none text-center uppercase font-extrabold tracking-tighter text-center text-gray-50 bg-purple-700 bg-opacity-50 border-0 border-gray-900 border-solid box-border" >
                Portfolio
            </h2>
        </div>

        <div class="min-h-screen flex items-center">

            <div class="flex flex-wrap m-4 relative z-10">
                @foreach (config('portfolio') as $project)
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <a href="{{ $project['url'] }}" target="_blank" rel="noreferrer">
                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('images/portfolio/' .$project['image']) }}" alt="Project image thumbnail">
                        </a>
                        <div class="flex">
                            @foreach ($project['technologies'] as $technology)
                                <h3 class="text-purple-600 text-xs font-semibold title-font mx-1">{{ $technology }}</h3>
                            @endforeach
                        </div>
                        <a href="{{ $project['url'] }}" target="_blank" rel="noreferrer" class="text-lg text-gray-900 font-medium title-font mb-4">{{ $project['title'] }}</a>
                        <p class="leading-relaxed text-base">{{ $project['description'] }}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <div class="p-6 mx-auto text-right text-sm lg:text-lg">
            <a href="https://github.com/ArielMejiaDev?tab=repositories" target="_blank" rel="noreferrer" class=" mx-4 leading-7 font-extrabold text-indigo-600 no-underline bg-transparent border-0 border-gray-900 border-solid cursor-pointer box-border hover:text-gray-900">
                You can see more project where I work on my github account →
            </a>
        </div>

    </div>

</section>
