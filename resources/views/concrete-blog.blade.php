@extends('layouts.master')

@section('main')
    <div class="bg-white sm:py-32">
        <div class="mx-auto lg:px-8">
            <div class="mx-auto max-w-5xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{!! $blogTitle !!}</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert
                    advice.</p>
            </div>
            <div
                class="mx-auto mt-10 max-w-5xl">
                <article class="flex flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-m">
                        <div class="text-gray-500">{!! $created_at !!}</div>
                        <a href="#"
                           class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{!! $blogCategory !!}</a>
                    </div>

                    <div class="group relative">
                        <img class="mt-5" src="{{ $blogImageLink }}">
                        <p class="mt-5 text-m text-gray-600">
                            {!! $content !!}
                        </p>
                    </div>

                    <div class="relative mt-8 flex items-center gap-x-10 mt-5">
                        <img
                            src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="h-10 w-10 rounded-full">
                        <div class="text-sm">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    Max Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
