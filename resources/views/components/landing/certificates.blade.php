@php
$certifications = config('certifications');
@endphp

<section id="certificates" class="min-h-screen text-gray-700 body-font bg-cover bg-no-repeat relative overflow-hidden" style="background: url('{{ asset('splatter-dark.png') }}')">

    <div class="hidden md:block absolute bottom-0 -left-10 z-0">
        <img src="{{ asset('assets/7.png') }}" alt="">
    </div>

    <div class="hidden md:block absolute bottom-0 right-0 z-0">
        <img src="{{ asset('assets/1.png') }}" alt="">
    </div>

    <div class="container px-5 py-24 mx-auto">
        <div class="flex justify-center mb-12 mx-4 relative">

            <div class="hidden md:block absolute bottom-0 -right-24 z-0">
                <img src="{{ asset('assets/5.png') }}" alt="">
            </div>

            <h2 style="right: -1rem; bottom: -1.5rem; text-shadow: rgb(138,124,174) 3px 3px; line-height: 72px;transform: translateX(0px) translateY(0px) rotate(-2deg) skewX(0deg) skewY(0deg) scaleX(1) scaleY(1);" class="w-full sm:w-auto inline-block py-1 px-10 my-8 mx-0 text-4xl md:text-5xl lg:text-6xl leading-none text-center uppercase font-extrabold tracking-tighter text-gray-50 bg-purple-700 bg-opacity-50 border-0 border-gray-900 border-solid box-border" >
                Certificates
            </h2>
        </div>
        <div class="flex flex-wrap -m-2">

            @foreach($certifications as $certification)
            <div class="w-full p-2 lg:w-1/3 md:w-1/2 relative z-10" >
                <a class="flex items-center h-full p-4 bg-gray-100 border border-gray-200 rounded-lg shadow-sm hover:shadow-md" href="{{ $certification['url'] }}" target="_blank">
                    <img alt="team" class="flex-shrink-0 object-cover object-center w-16 h-16 mr-4 bg-gray-100 rounded-full" src="{{ \Illuminate\Support\Str::lower(asset($certification['technology']) . '.webp') }}">
                    <div class="flex-grow">
                        <h2 class="font-medium text-gray-900 title-font">{{ $certification['technology'] }}</h2>
                        <p class="text-gray-500">{{ $certification['category'] }}</p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>
