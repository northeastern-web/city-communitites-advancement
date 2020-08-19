@props([ 'title', 'backgroundImage', 'backgroundPosition' => 'bg-center' ])

<div
    class="pt-64 bg-gray-800 bg-cover bg-no-repeat {{ $backgroundPosition }}"
    style="background-image: url('{{ $backgroundImage }}')"
>
    <div class="container py-6 text-white bg-black-semi-9">
        <h1 class="text-3xl leading-none md:text-5xl">{{ $title }}</h1>
    </div>
</div>
