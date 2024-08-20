@extends('Layouts.layout')

@section('title', 'Login')


@section('content')
    <main class="bg-[#E2E2E2] w-full min-h-[78vh] rounded-md py-5 px-4 md:px-8 dark:text-white dark:bg-[#1a1a1a]">
        <!-- BACK BUTTON -->
        @include('components.back-button')


        <form action="{{ route('authenticate') }}" method="post"
            class="font-semibold m-auto flex flex-col w-fit mt-16 justify-center items-center gap-3">
            @csrf
            @method('POST')



            <div class="text-center">
                <img src="{{ asset('amaral.png') }}" alt="amaral" class="w-32 my-2" />

                <p>amaral</p>
            </div>

            <div class="flex flex-col gap-3 items-center">
                <input type="email" placeholder="email" name="email"
                    class="bg-inherit p-1 px-2 border border-black dark:border-gray-600 rounded-md" />
                @error('email')
                    <span class="text-sm text-red-500 mr-auto">{{ $message }}</span>
                @enderror


                <input type="password" placeholder="password" name="password"
                    class="bg-inherit p-1 px-2 border border-black dark:border-gray-600 rounded-md" />
                @error('password')
                    <span class="text-sm text-red-500 mr-auto">{{ $message }}</span>
                @enderror

                <button class="font-semibold text-white bg-black w-fit px-12 py-1 rounded-md dark:text-black dark:bg-white">
                    Log in
                </button>

                @if (session('fail'))
                    <p class="text-red-500 text-sm w-full">{{ session('fail') }}</p>
                @endif
            </div>
        </form>
    </main>
@endsection
