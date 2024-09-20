@extends('Layouts.layout')

@section('title', strtoupper($post->title))


@section('content')
    <main
        class="bg-[#E2E2E2] w-full min-h-[78vh] rounded-md py-6 px-6 md:px-12 flex flex-col justify-between dark:text-white dark:bg-[#1a1a1a] ">
        <header class="border-gray-400 border-b uppercase">Projects</header>

        <section class="md:mx-6 lg:mx-8 my-6 grid lg:grid-cols-2 gap-6 min-w-0">
            <div class="min-w-0">

                @foreach ($post->images as $image)
                    @if ($loop->first)
                        <img src="{{ $post->getImageURL($image->address) }}" alt=""
                            class="aspect-video w-full object-cover rounded-md shadow-md" />
                    @endif
                @endforeach


                <div class="grid sm:grid-cols-3 grid-cols-none gap-3 mt-2">
                    @foreach ($post->images as $image)
                        @if (!$loop->first)
                            <img src="{{ $post->getImageURL($image->address) }}" alt=""
                                class="aspect-video object-cover rounded-md w-full shadow-md min-w-0 min-h-0" />
                        @endif
                    @endforeach


                </div>
            </div>

            <div class="flex flex-col gap-1 p-1 min-w-0">
                <h3 class="uppercase font-semibold">{{ $post->title }}</h3>
                <p class="text-sm text-justify">
                    {{-- {{ $post->description }} --}}
                </p>

                <div class="my-2">
                    <h3 class="font-semibold">Techs Used</h3>
                    <div class="flex gap-1 flex-wrap text-white dark:text-black">
                        @foreach (explode(' ', $post->techs) as $tech)
                            <span
                                class="bg-black dark:bg-white p-1 px-[14px] font-medium rounded-md">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="my-2">
                    <h3 class="font-semibold">Links</h3>
                    <a href="https://{{ $post->website }}">
                        <div class="font-medium mb-1 rounded-md flex justify-between flex-wrap">
                            <span>Website: </span> <span
                                class="break-words break-all">{{ $post->website ?? 'Not yet available' }}</span>
                        </div>
                    </a>

                    <a href="https://{{ $post->github }}">
                        <div class="font-medium mb-1 rounded-md flex justify-between flex-wrap">
                            <span>GitHub: </span> <span
                                class="break-words break-all">{{ $post->github ?? 'Not yet available' }}</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- BACK BUTTON -->
        @include('components.back-button')
    </main>
@endsection
