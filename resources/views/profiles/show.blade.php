<x-app>
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" class="mb-2" alt="Banner">

        <div class="flex justify-between items-center mb-4">
            <div>
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class=" rounded-full border border-gray-300 mr-2 py-2 px-2 text-black text-sm">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-sm">Follow Me</a>
            </div>
        </div>
        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor in quisquam quae, officia tenetur dolorum atque odit non? Temporibus odio sunt ut nostrum atque dolorum voluptatum id, modi, nulla, molestiae illum voluptates soluta. Dolores, fuga.
        </p>
        <img src="{{ $user->avatar }}" alt="Neko" class="rounded-full mr-2 absolute" style="width: 150px; left:calc(50% - 75px); top:138px;">

        
    </header>



    @include('_timeline',[
        'tweets' => $user->tweets
    ])
</x-app>