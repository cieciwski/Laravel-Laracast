<x-leyout title="Log In">
    <div class="min-h-[70vh] flex items-center justify-center">
        <div class="card bg-base-200 w-full max-w-sm shadow-xl">
            <div class="card-body">
                <h2 class="card-title justify-center mb-2">Log In</h2>
                <form action="/login" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div>
                        <label class="label" for="email">Email</label>
                        <input class="input input-bordered w-full" type="email" name="email" placeholder="Your Email" required />
                        <x-error name="email"/>
                    </div>
                    <div>
                        <label class="label" for="password">Password</label>
                        <input type="password" class="input input-bordered w-full" name="password" placeholder="Password" required />
                        <x-error name="password"/>
                    </div>
                    <button class="btn btn-primary mt-2">Log In</button>
                </form>
            </div>
        </div>
    </div>
</x-leyout>
