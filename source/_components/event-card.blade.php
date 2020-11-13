<div class="max-w-2xl w-full flex flex-col p-4 sm:w-1/2">
    <a
        href="{{ $event->getPath() }}"
        aria-label="{{ $event->title }}"
        class="group block w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 lg:flex hover:bg-gray-200 focus:outline-none focus:shadow-outline"
    >
        <div class="relative w-full bg-black lg:w-1/2">
            <div class="relative w-full h-full ar-16x9 lg:pb-0">
                <img
                    src="{{ $event->image['url'] }}"
                    alt="{{ $event->image['description'] }}"
                    class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                >

                @if ($event->signature)
                    <div
                        role="status"
                        aria-label="This is a signature event"
                        class="absolute top-0 inset-x-0 py-2 px-8 text-sm text-white uppercase tracking-widest bg-red-700"
                    >
                        Signature
                    </div>
                @endif
            </div>
        </div>

        <div class="flex flex-col lg:w-1/2">
            <div class="flex-1">
                <p class="flex items-center px-5 py-2 text-sm text-gray-900 font-bold border-b">
                    <i aria-hidden="true" focusable="false" data-feather="calendar" class="mr-2 w-4 h-4"></i>
                    <span>
                        {{ $event->start_date }}
                        @if ($event->end_date && $event->start_date !== $event->end_date)
                            to {{ $event->end_date }}
                        @endif
                    </span>
                </p>
                <p class="flex items-center px-5 py-2 text-sm text-gray-900 font-bold border-b">
                    <i aria-hidden="true" focusable="false" data-feather="clock" class="mr-2 w-4 h-4"></i>
                    <span>
                        {{ $event->start_time }}
                        @if ($event->end_time)
                            - {{ $event->end_time }}
                        @endif
                    </span>
                </p>
                <div class="py-12 px-8">
                    <h2 class="text-lg text-gray-900 font-bold leading-tight">{{ $event->title }}</h2>
                    <p class="mt-2 text-gray-700">{{ \Illuminate\Support\Str::limit($event->short_description, 120) }}</p>
                </div>
            </div>
        </div>
    </a>
</div>
