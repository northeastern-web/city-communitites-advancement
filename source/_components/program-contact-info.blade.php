
<div {{ $attributes->merge(['class' => '-mx-4 flex flex-wrap items-stretch' ]) }}>
    <div class="w-full p-4 md:w-1/2 lg:w-2/3">
        <div class="pt-8 pb-12 px-10 text-gray-900 bg-gray-200">
            <div class="prose lg:prose-lg">
                <h2>Contact us</h2>
            </div>
            <div class="mt-4 -mx-4 flex flex-wrap items-center justify-center">
                <div class="flex-shrink-0 p-4">
                    <img class="w-48 h-48 rounded-full shadow-inner" src="{{ $image }}" alt="{{ $name }}">
                </div>
                <div class="p-4 flex-1">
                    <h3 class="text-xl font-bold">{{ $name }}</h3>
                    <p class="text-gray-700">{!! $title !!}</p>
                    <div class="mt-6">
                        <a href="mailto:{{ $email }}" class="inline-flex items-center font-bold hover:text-gray-700">
                            <i data-feather="mail" class="w-6 h-6"></i>
                            <span class="ml-4">{{ $email }}</span>
                        </a>
                    </div>
                    <div class="mt-2">
                        <span class="inline-flex items-center font-bold">
                            <i data-feather="phone" class="w-6 h-6"></i>
                            <span class="ml-4">{{ $phone }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full p-4 md:w-1/2 lg:w-1/3">
        <div class="h-full flex flex-col py-12 px-10 text-sm text-gray-900 bg-gray-200">
            <h2 class="font-bold uppercase tracking-widest">Follow Us:</h2>
            <a href="#" class="mt-4 uppercase tracking-widest hover:text-gray-700">Twitter</a>
            <a href="#" class="mt-2 uppercase tracking-widest hover:text-gray-700">Facebook</a>
            <a href="#" class="mt-2 uppercase tracking-widest hover:text-gray-700">Instagram</a>
        </div>
    </div>
</div>