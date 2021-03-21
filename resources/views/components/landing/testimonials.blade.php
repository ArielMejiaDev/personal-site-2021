<div class="relative min-h-screen py-4 md:py-16 px-4 mx-auto max-w-6xl leading-6 text-gray-900 border-0 border-gray-900 border-solid box-border bg-cover bg-no-repeat" style="background: url('{{ asset('images/splatters/splatter.jpeg') }}')">

    <div class="hidden md:block absolute -top-10 -left-20 z-0">
        <img src="{{ asset('images/assets/5.png') }}" alt="floating dark triangles">
    </div>

    <div class="hidden md:block absolute bottom-10 -right-20 z-0">
        <img src="{{ asset('images/assets/6.png') }}" alt="floating dark triangle" loading="lazy">
    </div>

    <div class="flex justify-center mb-4 md:mb-20">
        <h2 style="right: -1rem; bottom: -1.5rem; text-shadow: rgb(138,124,174) 3px 3px; line-height: 72px;transform: translateX(0px) translateY(0px) rotate(-2deg) skewX(0deg) skewY(0deg) scaleX(1) scaleY(1);"
            class="inline-block py-1 px-10 my-8 mx-0 text-4xl md:text-5xl lg:text-7xl leading-none text-center uppercase font-extrabold tracking-tighter text-center text-gray-50 bg-purple-700 bg-opacity-50 border-0 border-gray-900 border-solid box-border" >
            How I add value to teams
        </h2>
    </div>

    <div class="flex content-center flex-wrap text-gray-900 border-0 border-gray-900 border-solid box-border">

        <x-landing.testimonial
            text="I worked with Ariel ... he was my mentor and advisor for a project,
            He is very knowledgable regarding the latest trends in technology...
            he is passionate about what he does and it comes through in his work."
            name="Irene Valdes Salazar"
            image="irene.jpeg"
            position="Intern Apple"
        />

        <x-landing.testimonial
            text="Ariel is very passionate about his work, and is particularly excellent at
            PHP & Laravel programming. He spends a lot of his free time learning new skills,
            which translates into real results at work. He's also a very good person with good values,
            which helps make a positive impact in a company's culture."
            name="Christian Saravia"
            image="christian.jpeg"
            position="Buildawow CEO & Founder"
        />

        <x-landing.testimonial
            text="His skills as full stack developer includes PHP & Laravel (Backend),
            VueJS (Front-end) and Flutter (mobile) and he can easily adapt to learn new languages,
            frameworks and tools as needed ...
            His community work shows strengths on planning, organizing and executing projects beyond code."
            name="Adrian Catalan"
            image="adrian.jpeg"
            position="Google Developer Expert"
        />

    </div>
    <div class="mx-auto mt-4 max-w-6xl text-right border-0 border-gray-900 border-solid box-border relative z-10">
        <a href="{{ route('portfolio') }}" class="text-lg leading-7 font-extrabold text-indigo-600 no-underline bg-transparent border-0 border-gray-900 border-solid cursor-pointer box-border hover:text-gray-900">My Portfolio →</a>
    </div>
</div>
