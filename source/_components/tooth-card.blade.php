@props([ 'image' ])

<div class="mt-16 -mb-20 mx-auto prose max-w-3xl">
    <img src="{{ $image }}" alt="">
</div>
<div class="px-8 pt-32 pb-16 bg-gray-200">
    <div class="prose max-w-3xl mx-auto text-gray-900 lg:prose-lg">
        {!! $slot !!}
    </div>
</div>
