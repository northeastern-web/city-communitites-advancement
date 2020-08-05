<div class="w-full flex flex-col p-4 sm:w-1/2">
    <a
        href="{{ $item->link_to }}"
        aria-label="{{ $item->title }}"
        class="group flex flex-col w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:shadow-outline"
    >
        @if($item->image_url)
            <div class="relative w-full bg-black">
                <div class="relative w-full h-full ar-16x9">
                    <img
                        src="{{ $item->image_url }}"
                        class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                    >
                </div>
            </div>
        @endif

        <div class="flex-1 flex flex-col">
            <div class="flex-1 flex flex-col py-6 px-8">
                <h2 class="text-lg text-gray-900 font-bold leading-tight">{{ $item->title }}</h2>
                <p class="flex-1 mt-2 text-gray-700">{{ $item->description }}</p>
                <div class="mt-4 flex justify-end">
                    <i data-feather="arrow-right" class="inline-block h-5 w-5"></i>
                </div>
            </div>
        </div>
    </a>
</div>