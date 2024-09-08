@extends('Layouts.layout')

@section('title', 'Projects')


@section('content')
    <main
        class="bg-[#E2E2E2] w-full min-h-[78vh] flex flex-col justify-between rounded-md py-6 px-4 md:px-12 dark:text-white dark:bg-[#1a1a1a]">
        <header class="border-gray-400 border-b uppercase">Projects</header>

        <section>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12 md:mx-8 my-6">
                @foreach ($posts as $post)
                    <a href="{{ route('posts.show', $post->id) }}">
                        <div>

                            @foreach ($post->images as $image)
                                @if ($loop->first)
                                    <img src="{{ $post->getImageUrl($image->address) }}" alt=""
                                        class="aspect-video object-cover rounded-md shadow-md " />
                                @endif
                            @endforeach

                            <div class="flex flex-col gap-1 p-1">
                                <h3 class="uppercase font-semibold">{{ $post->title }}</h3>
                                <p class="text-sm text-justify">
                                    {{ $post->short_description }}
                                </p>

                                <div class="mt-2 flex gap-1 flex-wrap text-white dark:text-black">
                                    @foreach (array_slice(explode(' ', $post->techs), 0, 3) as $tech)
                                        <span
                                            class="bg-black dark:bg-white p-1 px-[14px] font-medium rounded-md">{{ $tech }}</span>
                                    @endforeach

                                    @if (count(explode(' ', $post->techs)) > 3)
                                        <span class="bg-black dark:bg-white p-1 px-[14px] font-medium rounded-md">+</span>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

            <div class="my-4 px-4 ">
                {{ $posts->links() }}
            </div>


        </section>



        <!-- BACK BUTTON -->
        @include('components.back-button')

    </main>
@endsection
