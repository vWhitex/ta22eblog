<div class="max-w-md mx-auto p-6 bg-base-200 rounded-lg shadow-md">
    <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        This is a secure area of the application. Please confirm your password before continuing.
    </p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password field -->
        <div class="form-control w-full mb-4">
            <label for="password" class="label">
                <span class="label-text">Password</span>
            </label>
            <input 
                id="password" 
                type="password" 
                name="password" 
                required 
                autocomplete="current-password"
                class="input input-bordered w-full" 
            />
            @if ($errors->has('password'))
                <label class="label">
                    <span class="label-text-alt text-error">
                        {{ $errors->first('password') }}
                    </span>
                </label>
            @endif
        </div>

        <div class="flex justify-end">
            <button type="submit" class="btn btn-primary">
                Confirm
            </button>
        </div>
    </form>
</div>
