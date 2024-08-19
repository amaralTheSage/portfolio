@extends('Layouts.layout')

@section('content')
    <main class="bg-[#E2E2E2] w-full min-h-[78vh] rounded-md py-5 px-3 md:px-8 dark:text-white dark:bg-[#1a1a1a]">
        <!-- BACK BUTTON -->
        @include('components.back-button')


        <section class="py-6 px-6 lg:px-12">
            <h1 class="font-semibold border-b border-black text-lg dark:border-gray-600">
                Contact & Links
            </h1>

            <nav class="font-semibold m-auto pt-8 px-6 gap-1 text-lg flex flex-col">
                <a href="" class="w-fit duration-200">Linkedin</a>
                <a href="" class="w-fit duration-200">GitHub</a>
                <a href="" class="w-fit duration-200">Email</a>
                <a href="" class="w-fit duration-200">Resume</a>
                <a href="" class="w-fit duration-200">Youtube
                    <span class="text-sm">(there are a few guitar covers in there)</span></a>
            </nav>
        </section>
    </main>
@endsection
