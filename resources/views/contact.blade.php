<x-guest-layout>

    <section class="text-gray-600 body-font relative min-h-screen bg-cover bg-no-repeat relative overflow-hidden" style="background: url('{{ asset('images/splatters/splatter-dark.png') }}')">

        <div class="hidden md:block absolute top-0 -left-10 z-0 transform rotate-45">
            <img src="{{ asset('images/assets/5.png') }}" alt="floating dark triangles">
        </div>

        <div class="hidden md:block absolute bottom-0 right-0 z-0 transform rotate-90">
            <img src="{{ asset('images/assets/2.png') }}" alt="floating yellow triangle">
        </div>

        <div class="hidden md:block absolute bottom-24 left-0 z-0 transform rotate-90">
            <img src="{{ asset('images/assets/10.png') }}" alt="floating purple liquid">
        </div>

        <x-landing.navbar />

        <div class="container px-5 md:py-24 mx-auto">

            <div class="flex justify-center my-4 lg:my-20 mx-4">
                <h2 style="right: -1rem; bottom: -1.5rem; text-shadow: rgb(138,124,174) 3px 3px; line-height: 72px;transform: translateX(0px) translateY(0px) rotate(-2deg) skewX(0deg) skewY(0deg) scaleX(1) scaleY(1);" class="w-full sm:w-auto inline-block py-1 px-10 my-8 mx-0 text-4xl md:text-5xl lg:text-7xl leading-none text-center uppercase font-extrabold tracking-tighter text-gray-50 bg-purple-700 bg-opacity-50 border-0 border-gray-900 border-solid box-border" >
                    Contact Me
                </h2>
            </div>

            <div x-data="form()" class="lg:w-1/2 md:w-2/3 mx-auto">
                <form @submit.prevent="submit()" class="flex flex-wrap -m-2">
                    @csrf
                    <input x-model="hp_contact_form" type="hidden" name="hp_contact_form">
                    <div class="p-2 w-1/2">
                        <div class="relative" data-children-count="1">
                            <label for="name" class="hidden">Name</label>
                            <input x-model="name" :class="{ 'bg-gray-300':sent }" :disabled="sent" type="text" id="name" name="name" class="w-full bg-gray-50 border border-gray-300 focus:border-indigo-500 focus:bg-white text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Name">
                            <p class="text-white text-xs font-bold mt-1" x-show="errors.name" x-text="errors.name"></p>
                        </div>
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative" data-children-count="1">
                            <label for="email" class="hidden">Email</label>
                            <input x-model="email" :class="{ 'bg-gray-300':sent }" :disabled="sent" type="email" id="email" name="email" class="w-full bg-gray-50 border border-gray-300 focus:border-indigo-500 focus:bg-white text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Email">
                            <p class="text-white text-xs font-bold mt-1" x-show="errors.email" x-text="errors.email"></p>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative" data-children-count="1">
                            <label for="message" class="hidden">Message</label>
                            <textarea x-model="message" :class="{ 'bg-gray-300':sent }" :disabled="sent" id="message" name="message" class="w-full bg-gray-50 border border-gray-300 focus:border-indigo-500 focus:bg-white h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" placeholder="Message"></textarea>
                            <p class="text-white text-xs font-bold mt-1" x-show="errors.message" x-text="errors.message"></p>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <p class="text-white text-xs font-bold mt-1" x-show="errors.hp_contact_form" x-text="errors.hp_contact_form"></p>
                        <button type="submit" class="flex mx-auto text-black bg-white font-extrabold border-0 py-4 px-16 focus:outline-none hover:bg-gray-200 focus:bg-gray-200 rounded-full uppercase tracking-tighter text-xl"
                            :disabled="submitting"
                            :class="{ 'bg-gray-300':sent }"
                            x-text="text"></button>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <x-landing.footer />

    <script src="{{ asset('js/contactForm.js') }}"></script>

</x-guest-layout>
