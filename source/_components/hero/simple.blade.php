<div class="py-20 bg-black">
    <div class="container">
        <h1 class="text-white text-3xl leading-none md:text-5xl">{{ $title }}</h1>
        @isset($description)
            <p class="mt-6 text-gray-200">{{ $description }}</p>
        @endif
    </div>
</div>
