<x-leyout title="Your Ideas">
    @if ($ideas->count())
        <div class="mt-6">
            <h2 class="font-bold text-2xl mb-4">Your ideas</h2>
            <div class="grid gap-4">
                @foreach ($ideas as $idea)
                    <x-cards href="/ideas/{{ $idea->id }}">
                        {{ $idea->description }}
                    </x-cards>
                @endforeach
            </div>
            <a href="/ideas/create" class="btn btn-primary mt-6">Create a new one</a>
        </div>
    @else
        <div class="text-center mt-12">
            <p class="mb-4">No ideas yet.</p>
            <a href="/ideas/create" class="btn btn-primary">Create a new one</a>
        </div>
    @endif
</x-leyout>
