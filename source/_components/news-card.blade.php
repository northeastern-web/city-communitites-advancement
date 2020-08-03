<div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
    <a
        href="{{ $article->getPath() }}"
        aria-label="{{ $article->title }}"
        class="group block w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:shadow-outline"
    >
        <div class="relative w-full bg-black">
            <div class="relative w-full h-full ar-16x9">
                <img
                    src="{{ $article->image['url'] }}"
                    alt="{{ $article->image['description'] }}"
                    class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                >
            </div>
        </div>

        <div class="flex flex-col">
            <div class="flex-1">
                <div class="py-6 px-8">
                    <h2 class="text-lg text-gray-900 font-bold leading-tight">{{ $article->title }}</h2>
                </div>
            </div>
        </div>
    </a>
</div>