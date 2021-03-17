<div class="relative mx-5 py-4 px-6 w-full font-mono bg-indigo-100 border border-gray-900 border-solid shadow-md lg:flex-1 lg:w-1/3" style="border: 1px solid;padding: 10px;box-shadow: 10px 10px rgba(83, 223, 255, 0.3);">

    <span class="absolute text-5xl font-bold border-0 border-gray-900 border-solid box-border" style="left: -1rem; top: -1.5rem; text-shadow: rgb(184, 255, 243) 3px 3px; line-height: 72px;">“</span>

    <p class="m-0 border-0 border-gray-900 border-solid box-border">
        {{ $text }}
    </p>

    <a href="https://twitter.com/JohnONolan" class="inline-flex items-center mt-6 italic no-underline bg-transparent border-0 border-gray-900 border-solid cursor-pointer box-border">
        <img src="{{ asset($image) }}" alt="John O'Nolan, Founder/CEO, Ghost" height="48" width="48" class="block mr-4 max-w-full h-auto italic align-middle rounded-full border border-gray-900 border-solid box-border shadow-xs" />
        <p class="m-0 text-sm italic leading-5 border-0 border-gray-900 border-solid box-border">
            <span class="block italic font-bold border-0 border-gray-900 border-solid box-border hover:text-pink-600">{{ $name }}</span>
            {{ $position }}
        </p>
    </a>

    <span class="absolute text-5xl font-bold border-0 border-gray-900 border-solid box-border" style="right: -1rem; bottom: -1.5rem; text-shadow: rgb(184, 255, 243) 3px 3px; line-height: 72px;">”</span>

</div>
