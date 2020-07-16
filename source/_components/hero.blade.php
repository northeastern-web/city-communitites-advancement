<div
    class="relative pt-16 pb-20 bg-black-semi-9 bg-cover bg-center bg-no-repeat md:pt-20 md:pb-24 lg:pt-32 lg:pb-40"
    style="background-image: url('{{ $backgroundImage }}')"
>
    @isset($backgroundGradient)
        <div class="absolute inset-0 {{ $backgroundGradient }}"></div>
    @endisset

    <div class="relative px-4 text-white sm:text-center lg:px-16">
        <h1 class="text-3xl leading-none md:text-5xl lg:text-6xl">
            {{ $title }}
        </h1>
    </div>
</div>