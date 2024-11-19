<x-guest-layout>
    <div class="max-w-md mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold">Reset Password</h1>
            <p class="text-base-content/60 mt-2">We'll help you get back into your account</p>
        </div>

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="alert alert-info bg-info/10 text-info-content mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="stroke-current shrink-0 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-sm">
                        Enter your email address and we'll send you a link to reset your password.
                    </p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('status') }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                    @csrf

                    <div class="form-control w-full">
                        <label for="email" class="label">
                            <span class="label-text">Email Address</span>
                        </label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="input input-bordered w-full @error('email') input-error @enderror"
                            placeholder="Enter your email address" required autofocus autocomplete="email" />
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary w-full">
                            Send Reset Link
                        </button>
                    </div>

                    <div class="text-center text-sm mt-6">
                        <a href="{{ route('login') }}" class="link link-hover flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>