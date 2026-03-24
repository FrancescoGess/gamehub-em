<h2>Register</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">

        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form action="/register" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm/6 font-medium text-gray-100">Name</label>
                <div class="mt-2">
                    <input id="name" type="text" name="name" required autocomplete="name"
                        value="{{ old('name') }}"
                        class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                </div>
            </div>
            <div>
                <label for="surname" class="block text-sm/6 font-medium text-gray-100">Surname</label>
                <div class="mt-2">
                    <input id="surname" type="text" name="surname" required autocomplete="surname"
                        value="{{ old('surname') }}"
                        class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                </div>
            </div>

            <div>
                <label for="username" class="block text-sm/6 font-medium text-gray-100">Username</label>
                <div class="mt-2">
                    <input id="username" type="text" name="username" required autocomplete="username"
                        value="{{ old('username') }}"
                        class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-100">Email</label>
                <div class="mt-2">
                    <input id="email" type="email" name="email" required autocomplete="email"
                        value="{{ old('email') }}"
                        class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-100">Password</label>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password"
                            value="{{ old('password') }}" placeholder="Password">
                    </div>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password_confirmation" class="block text-sm/6 font-medium text-gray-100">Confirm
                        Password</label>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation" value="{{ old('password_confirmation') }}"
                            placeholder="Confirm Password">
                    </div>
                </div>
            </div>

    </div>

    <div>
        <button type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign
            in</button>
    </div>
    </form>


</div>
</div>
