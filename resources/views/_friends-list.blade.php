<div class="bg-gray-200 border border-gray-400 rounded-lg py-4 px-6">
    
<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @forelse (current_user()->follows as $user)
    <li class="{{ $loop->last ? '' : 'mb-4' }}">
        <div>
            <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
        <img src="{{ $user->avatar }}" alt="Neko" class="rounded-full mr-2" width="50">
            {{ $user->name }}
            </a>
        </div>
    </li>
    @empty
        <li>No friends yet.</li>
    @endforelse
</ul>
</div>