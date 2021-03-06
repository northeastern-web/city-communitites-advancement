---
title: Our Staff
---

@extends('_layouts.about')

@section('content')
    <div>
        <h2 class="text-xl leading-tight md:text-2xl lg:text-3xl">Leadership</h2>
        <div
            class="relative mt-6 -mx-4 flex flex-wrap items-stretch"
        >
            @foreach($staffs->where('leadership', true) as $staff)
                <div class="w-full flex flex-col p-4 xl:w-2/3">
                    <div class="flex items-stretch w-full h-full shadow-sm">
                        <div class="relative w-1/2 bg-black">
                            <div class="w-full h-full aspect-w-4 aspect-h-5">
                                <img
                                    src="{{ $staff->image['url'] }}"
                                    alt="{{ $staff->image['description'] }} "
                                    class="object-cover shadow-inner object-cover"
                                >
                            </div>
                        </div>
                        <div class="w-1/2 flex flex-col">
                            <div class="px-5 flex-1 py-8">
                                <h2 class="text-xl text-gray-900 font-bold">{{ $staff->name }}</h2>
                                <p class="mt-2 text-gray-700">{{ $staff->title }}</p>
                            </div>
                            <div class="p-5 text-white bg-black">
                                <div>
                                    <a class="border-b border-white hover:text-gray-300" href="{{ $staff->getPath() }}">View bio</a>
                                </div>
                                <div class="mt-2 truncate">
                                    <a class="border-b border-white hover:text-gray-300 hover:border-gray-300" href="mailto:{{ $staff->email }}">{{ $staff->email }}</a>
                                </div>
                                <div class="mt-2">
                                    <span>{{ $staff->phone }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h2 class="mt-16 text-xl leading-tight md:text-2xl lg:text-3xl">The Team</h2>
        <div
            class="relative mt-6 -mx-4 flex flex-wrap items-stretch"
        >
            @foreach($staffs->where('leadership', false)->sortBy('lastName') as $staff)
                <div class="w-full flex flex-col p-4 sm:w-1/2 xl:w-1/3">
                    <div class="flex flex-col w-full h-full shadow-sm">
                        <div class="relative bg-black">
                            <div class="relative w-full h-full aspect-w-1 aspect-h-1">
                                <img
                                    src="{{ $staff->image['url'] }}"
                                    alt="{{ $staff->image['description'] }} "
                                    class="shadow-inner object-cover"
                                >
                            </div>
                        </div>
                        <div class="flex-1 flex flex-col">
                            <div class="px-5 flex-1 py-8">
                                <h2 class="text-xl text-gray-900 font-bold">{{ $staff->name }}</h2>
                                <p class="mt-2 text-gray-700">{{ $staff->title }}</p>
                            </div>
                            <div class="px-5 pb-5 text-gray-900">
                                <div class="truncate">
                                    <a class="border-b border-gray-700 hover:text-gray-700" href="mailto:{{ $staff->email }}">{{ $staff->email }}</a>
                                </div>
                                <div class="mt-2">
                                    <span>{{ $staff->phone }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
