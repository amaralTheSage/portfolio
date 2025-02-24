@extends('Layouts.layout')

@section('title', 'Publishing')


@section('content')
    <main
        class="bg-[#E2E2E2] dark:text-white dark:bg-[#1a1a1a] w-full min-h-[78vh] rounded-md py-6 px-4 md:px-12 flex flex-col justify-between">
        <header class="border-gray-400 border-b uppercase">Edit {{ $post->title }}</header>

        <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST" enctype="multipart/form-data"
            class="md:mx-10 lg:mx-20 my-6 grid md:grid-cols-2 lg:gap-16 md:gap-8 gap-4 m-auto min-w-0">
            @csrf
            @method('patch')


            <div class="flex flex-col gap-2 min-w-0">
                <div class="flex flex-col">
                    <label for="title" class="font-semibold text-lg">Title</label>
                    <input type="text" name="title"
                        class="bg-inherit dark:border-gray-600 p-1 px-2 border border-black rounded-md"
                        value="{{ $post->title }}" />

                    @error('title')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="techs" class="font-semibold text-lg">Technologies Used</label>
                    <input type="text" name="techs" value="{{ $post->techs }}"
                        class="bg-inherit dark:border-gray-600 p-1 px-2 border border-black rounded-md" />

                    <p class="text-sm">(space-separated)</p>

                    @error('techs')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>



                <div class="flex flex-col">
                    <label for="short_description" class="font-semibold text-lg">Short Description</label>
                    <textarea name="short_description"
                        class="bg-inherit dark:border-gray-600 p-1 px-2 border border-black rounded-md overflow-hidden resize-x-none">{{ $post->short_description }}</textarea>
                    @error('short_description')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col gap-2 my-2 min-w-0">
                <div class="flex flex-col">
                    <label for="description" class="font-semibold text-lg">Description</label>
                    <textarea name="description" rows="5"
                        class="bg-inherit dark:border-gray-600 p-1 px-2 border border-black rounded-md overflow-hidden resize-x-none">{{ $post->description }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="website" class="font-semibold text-lg">Website</label>
                    <input type="text" name="website" value="{{ $post->website }}"
                        class="bg-inherit dark:border-gray-600 p-1 px-2 border block border-black rounded-md w-full" />

                    @error('website')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="GitHub" class="font-semibold text-lg">GitHub</label>
                    <input type="text" name="github" value="{{ $post->github }}"
                        class="bg-inherit dark:border-gray-600 p-1 px-2 border block border-black rounded-md w-full" />

                    @error('github')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    class="font-semibold text-white bg-black w-fit px-12 py-1 rounded-md ml-auto mt-auto dark:text-black dark:bg-white">
                    Edit
                </button>
            </div>
        </form>

        <!-- BACK BUTTON -->
        @include('components.back-button')

    </main>
@endsection
