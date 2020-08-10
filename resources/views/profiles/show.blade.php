<x-app>
    <header class="mb-6 relative">
        <div class="relative">

            <img
                src="../images/default-profile-banner.jpg"
                alt=""
                class="mb-2"
            >


            <img
                src="{{$user->avatar}}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150px"
            >

        </div>

        <div class="flex justify-between items-center mb-6">

        <div>
            <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
            <p>Joined {{$user->created_at->diffForHumans()}}</p>
        </div>

        <div class="flex">
            @if(current_user()->is($user))
            <a
                href=""
                class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2"
            >
                Edit Profile
            </a>
            @endif
                <x-follow-button :user="$user"></x-follow-button>
        </div>

        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi dolores ea eaque excepturi id ipsum, iste libero molestiae neque nobis nostrum, omnis tempore. Blanditiis eveniet fuga fugiat molestias tenetur.</p>


    </header>




    @include('_timeline',[
    'tweets' => $user->tweets
])
    </x-app>
