@extends('Layouts.layout')

@section('title', 'Home')

@section('content')
    <main
        class="text-black bg-[#e2e2e2] dark:text-white dark:bg-[#1a1a1a] w-full min-h-[80vh]  rounded-md py-5 px-3 md:px-8">
        <nav class="flex justify-end items-center gap-4 light:bg-blue-300 dark:brightness-[10]">
            {{-- <a href=""><img src="{{ asset('sun.png') }}" alt="Switch color themes" class="w-8" /></a>

            <a href=""><img src="{{ asset('lang.png') }}" alt="Switch between english and portuguese"
                    class="w-[31px]" /></a> --}}

            @guest
                <a href="{{ route('login') }}"><img src="{{ asset('img/login.png') }}" alt="Login Page" class="w-[26px]" /></a>
            @endguest

            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    @method('post')
                    <button>
                        <img src="{{ asset('img/logout.png') }}" alt="Log out" class="w-[26px] mt-[6px]" />
                    </button>
                </form>


                <a href="{{ route('posts.create') }}"><img src="{{ asset('img/more.png') }}" alt="Publishing Page"
                        class="w-[35px]" /></a>
            @endauth
        </nav>

        <div class="h-[70vh] flex justify-center">
            <section class="  md:w-3/5 w-[90%]  items-center font-semibold m-auto ">
                <p class="text-center m-auto text-xl ">
                    I am a student of Web Development with a couple of full stack
                    projects under the belt. I now seek to continue improving my design
                    and coding skills.
                </p>

                <nav class="flex flex-wrap gap-x-10 gap-y-5 justify-evenly mt-8 text-lg dark:brightness-[10]">
                    <a href="{{ route('posts.index') }}" class="flex gap-2 items-center"><img
                            src="{{ asset('img/arrow.png') }}" alt="arrow icon" class="h-4" /> my
                        projects</a>

                    <a href="{{ route('links') }}" class="flex gap-2 items-center"><img src="{{ asset('img/arrow.png') }}"
                            alt="arrow icon" class="h-4" /> my
                        links</a>
                </nav>
            </section>
        </div>


    </main>
@endsection
