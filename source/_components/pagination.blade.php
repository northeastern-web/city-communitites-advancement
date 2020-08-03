<div class="-mx-1 flex items-center justify-center">
    <div class="px-1">
        @if ($pagination->previous)
            <a
                href="{{ $page->baseUrl . $pagination->previous }}"
                class="inline-flex items-center justify-center w-6 h-6 text-sm leading-none text-gray-700 rounded-full focus:outline-none focus:shadow-outline"
            >
                <i data-feather="chevron-left" class="w-4 h-4"></i>
            </a>
        @else
            <span class="inline-flex items-center justify-center w-6 h-6 text-gray-500 cursor-not-allowed">
                <i data-feather="chevron-left" class="w-4 h-4"></i>
            </span>
        @endif
    </div>

    @foreach ($pagination->pages as $pageNumber => $path)
        <div class="px-1">
            <a
                href="{{ $page->baseUrl }}{{ $path }}"
                class="{{ $pagination->currentPage == $pageNumber ? 'text-white bg-black' : 'text-gray-900' }} inline-flex items-center justify-center w-6 h-6 text-sm leading-none rounded-full focus:outline-none focus:shadow-outline"
            >
                {{ $pageNumber }}
            </a>
        </div>
    @endforeach

    <div class="px-1">
        @if ($pagination->next)
            <a
                href="{{ $page->baseUrl . $pagination->next }}"
                class="inline-flex items-center justify-center w-6 h-6 text-sm leading-none text-gray-700 rounded-full focus:outline-none focus:shadow-outline"
            >
                <i data-feather="chevron-right" class="w-4 h-4"></i>
            </a>
        @else
            <span class="inline-flex items-center justify-center w-6 h-6 text-gray-500 cursor-not-allowed">
                <i data-feather="chevron-right" class="w-4 h-4"></i>
            </span>
        @endif
    </div>
</div>