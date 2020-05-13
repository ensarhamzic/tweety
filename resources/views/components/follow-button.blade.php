<form method="POST" action="/profiles/{{ $user->name }}/follow">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-sm">
        {{ auth()->user()->following($user) ? 'Unfollow me' : 'Follow me' }}
    </button>
</form>