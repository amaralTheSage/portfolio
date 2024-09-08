@extends('Layouts.layout')

@section('title', strtoupper($post->title))


@section('content')
    <main
        class="bg-[#E2E2E2] w-full min-h-[78vh] rounded-md py-6 px-4 md:px-12 flex flex-col justify-between dark:text-white dark:bg-[#1a1a1a]">
        <header class="border-gray-400 border-b uppercase">PORTFOLIO</header>

        <section class="md:mx-6 lg:mx-8 my-6 grid lg:grid-cols-2 gap-6">
            <div>

                @foreach ($post->images as $image)
                    @if ($loop->first)
                        <img src="{{ $post->getImageURL($image->address) }}" alt=""
                            class="aspect-video w-full object-cover rounded-md" />
                    @endif
                @endforeach


                <div class="grid grid-cols-3 gap-3 mt-2">
                    @foreach ($post->images as $image)
                        @if (!$loop->first)
                            <img src="{{ $post->getImageURL($image->address) }}" alt=""
                                class="aspect-video object-cover rounded-md w-full" />
                        @endif
                    @endforeach


                </div>
            </div>

            <div class="flex flex-col gap-1 p-1">
                <h3 class="uppercase font-semibold">{{ $post->title }}</h3>
                <p class="text-sm text-justify">
                    {{ $post->description }}
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
                    <div class="font-medium mb-1 rounded-md flex justify-between">
                        <span>Website: </span> <span>{{ $post->website ?? 'Not yet available' }}</span>
                    </div>

                    <div class="font-medium mb-1 rounded-md flex justify-between">
                        <span>GitHub: </span> <span>{{ $post->github ?? 'Not yet available' }}</span>
                    </div>

                </div>
            </div>
        </section>

        <!-- BACK BUTTON -->
        @include('components.back-button')
    </main>
@endsection
