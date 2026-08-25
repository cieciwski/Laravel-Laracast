<x-leyout>
    @if ($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold">Yours ideas:</h2>
            <ul class="mt-6">
                @foreach ($ideas as $idea)
                    <x-cards href="/ideas/{{ $idea->id }}">
                        {{ $idea->description }}
                    </x-cards>
                @endforeach
            </ul>
        </div>
    @else
        <p>No ideas yet.</p>
    @endif
    <p><a href="/ideas/create">Create a new one</a></p>
</x-leyout>

