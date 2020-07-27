<x-master>
<section class="px-8">
    <main class="container mx-auto">
        <div class="lg:flex lg:justify-between">
            <div class="lg:w-32">
                @auth
                    @include('_sidebar-links')
            </div>
            @endauth
            <div class="lg:flex-1 lg:-mt-10" style="max-width: 700px">
               {{$slot}}
            </div>
            @auth
                <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                    @include('_friends-list')
                </div>
            @endauth
        </div>

    </main>
</section>
</x-master>
