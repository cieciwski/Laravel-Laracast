<x-leyout title="New Idea">
    <div class="min-h-[70vh] flex items-center justify-center">
        <div class="card bg-base-200 w-full max-w-xl shadow-xl">
            <div class="card-body">
                <h2 class="card-title mb-2">Create a new idea</h2>

                <form action="/ideas" method="POST" class="flex flex-col gap-4">
                    @csrf

                    <div>
                        <label class="label" for="description">Description</label>
                        <textarea
                            name="description"
                            id="description"
                            class="textarea textarea-bordered w-full h-32"
                            placeholder="What's the idea you want to save for later?"
                        >{{ old('description') }}</textarea>
                        <x-error name="description"/>
                    </div>

                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-leyout>
