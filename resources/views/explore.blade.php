<x-app>

<div>
    @foreach($users as $user)
        <a href="{{$user->path()}}"  class="flex items-center mb-5 hover:bg-gray-200">
        <img src="{{$user->avatar}}"
             alt="{{$user->username}}"
             width="60px"
             class="mr-4 rounded"
        >
            <div>
                <h4 class="font-bold">{{'@' . $user->username}}</h4>
            </div>
        </a>
        @endforeach

    {{$users->links()}}
</div>



</x-app>
