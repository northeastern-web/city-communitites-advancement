<div class="w-full flex flex-col p-4 sm:w-1/2">
    <a
        href="{{ $item->link_to }}"
        aria-label="{{ $item->title }}"
        class="flex flex-col w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:ring focus:ring-blue-500"
    >
        <div class="flex-1 flex flex-col p-8">
            <h2 class="text-lg text-gray-900 font-bold leading-tight">{{ $item->title }}</h2>
            <p class="flex-1 mt-2 text-gray-700">{{ $item->description }}</p>
            <div class="mt-4 flex justify-end">
                <i data-feather="arrow-right" class="inline-block h-5 w-5"></i>
            </div>
        </div>
    </a>
</div>