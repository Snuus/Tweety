<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>

    @foreach(auth()->user()->follows as $user)
    <li class="mb-4">
        <div class="flex text-sm">
            <img
                src="https://i.pravatar.cc/40"
                alt=""
                class="rounded-full mr-2"
            >
            John Doe
        </div>
    </li>
        @endforeach
</ul>

