@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:w-1/6">
            @include('_sidebar-links')
        </div>
        <div class="lg:flex-1 lg:-mt-10">
            <div class="border border-blue-400 rounded-lg px-8 py-6">
                <form action="">
                    <textarea
                        name="body"
                        class="w-full"
                        placeholder="whats up?"
                    ></textarea>

                    <hr class="py-4">

                    <footer class="flex justify-between">
                        <img
                            src="https://i.pravatar.cc/40"
                            alt=""
                            class="rounded-full mr-2"
                        >
                        <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet-a-roo!</button>
                    </footer>


                </form>
            </div>
            <div>

            </div>
        </div>
        <div class="lg:w-1/6">
            @include('_friends-list')
        </div>
    </div>

@endsection
