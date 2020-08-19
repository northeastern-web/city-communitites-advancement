@props([ 'title', 'description', 'backgroundImage', 'backgroundPosition' => 'bg-center' ])

<div
    class="py-16 bg-gray-800 bg-cover bg-no-repeat {{ $backgroundPosition }}"
    style="background-image: url('{{ $backgroundImage }}')"
>
    <div class="container">
        <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
            <h1 class="text-3xl leading-none md:text-5xl">{{ $title }}</h1>
            @isset($description)
                <p class="mt-6 text-gray-200">{{ $description }}</p>
            @endif
        </div>
    </div>
</div>
