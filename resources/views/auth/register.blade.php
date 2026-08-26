<x-leyout title="Register">
    <div class="min-h-[70vh] flex items-center justify-center">
        <div class="card bg-base-200 w-full max-w-sm shadow-xl">
            <div class="card-body">
                <h2 class="card-title justify-center mb-2">Register</h2>
                <form action="/register" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div>
                        <label class="label" for="name">Name</label>
                        <input class="input input-bordered w-full" name="name" placeholder="Your name" required />
                        <x-error name="name"/>
                    </div>
                    <div>
                        <label class="label" for="email">Email</label>
                        <input type="email" name="email" class="input input-bordered w-full" placeholder="Email" required />
                        <x-error name="email"/>
                    </div>
                    <div>
                        <label class="label" for="password">Password</label>
                        <input type="password" name="password" class="input input-bordered w-full" placeholder="Password" required />
                        <x-error name="password"/>
                    </div>
                    <button class="btn btn-primary mt-2" data-test="register-button">Register</button>
                </form>
            </div>
        </div>
    </div>
</x-leyout>
