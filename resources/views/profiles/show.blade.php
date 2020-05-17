<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" class="mb-2" alt="Banner">
            <img src="{{ $user->avatar }}" alt="Avatar" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="150" style="left: 50%;">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
            <h2 style="max-width: 270px" class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                <a href="{{ $user->path('edit') }}" class=" rounded-full border border-gray-300 mr-2 py-2 px-2 text-black text-sm">Edit Profile</a>
                @endcan
                
                
                
            <x-follow-button :user="$user">

            </x-follow-button>

            </div>
        </div>
        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor in quisquam quae, officia tenetur dolorum atque odit non? Temporibus odio sunt ut nostrum atque dolorum voluptatum id, modi, nulla, molestiae illum voluptates soluta. Dolores, fuga.
        </p>
       
        
    </header>



    @include('_timeline',[
        'tweets' => $tweets
    ])
</x-app>