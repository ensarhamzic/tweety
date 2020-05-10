<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
    @foreach (range(1, 8) as $index)
    <li class="mb-4">
        <div class="flex items-center text-sm">
            <img src="https://avatars.dicebear.com/v2/male/aaa.svg?w=40&h=40" alt="Neko" class="rounded-full mr-2">
            John Doe
        </div>
    </li>
    @endforeach
</ul>