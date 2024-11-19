@extends('partials.layout')

@section('title', 'Register')

@section('content')
<div class="min-h-screen bg-base-200 py-16 px-4">
    <div class="max-w-md mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold">Create Account</h1>
            <p class="text-base-content/60 mt-2">Join us today and get started</p>
        </div>

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div class="form-control w-full">
                        <label for="name" class="label">
                            <span class="label-text">Full Name</span>
                        </label>
                        <input 
                            type="text" 
                            id="name"
                            name="name" 
                            value="{{ old('name') }}"
                            class="input input-bordered w-full @error('name') input-error @enderror"
                            placeholder="Enter your full name"
                            required 
                            autofocus 
                            autocomplete="name"
                        />
                        @error('name')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-control w-full">
                        <label for="email" class="label">
                            <span class="label-text">Email Address</span>
                        </label>
                        <input 
                            type="email" 
                            id="email"
                            name="email" 
                            value="{{ old('email') }}"
                            class="input input-bordered w-full @error('email') input-error @enderror"
                            placeholder="name@example.com"
                            required 
                            autocomplete="username"
                        />
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-control w-full">
                        <label for="password" class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input 
                            type="password" 
                            id="password"
                            name="password" 
                            class="input input-bordered w-full @error('password') input-error @enderror"
                            placeholder="Create a strong password"
                            required 
                            autocomplete="new-password"
                        />
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-control w-full">
                        <label for="password_confirmation" class="label">
                            <span class="label-text">Confirm Password</span>
                        </label>
                        <input 
                            type="password" 
                            id="password_confirmation"
                            name="password_confirmation" 
                            class="input input-bordered w-full @error('password_confirmation') input-error @enderror"
                            placeholder="Confirm your password"
                            required 
                            autocomplete="new-password"
                        />
                        @error('password_confirmation')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary w-full">
                            Create Account
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center text-sm mt-6">
                        <span class="text-base-content/60">Already have an account?</span>
                        <a href="{{ route('login') }}" class="link link-primary ml-1">
                            Sign in instead
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection