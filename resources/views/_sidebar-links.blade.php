
<ul>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="{{route('home')}}"
        >Home</a></li>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="{{route('explore')}}"
        >Explore</a></li>


    <li><a
            class="font-bold text-lg mb-4 block"
            href="{{ route('profile', auth()->user() )}}"
        >
            Profile
        </a>
    </li>



    <li>
        <form method="POST" action="logout">
            @csrf


            <button class="font-bold text-lg">logout</button>
        </form>
    </li>
</ul>

