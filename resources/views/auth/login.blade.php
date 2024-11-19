@extends('partials.layout')

@section('title', 'Login')

@section('content')
<div class="min-h-screen bg-base-200 py-16 px-4">
    <div class="max-w-md mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold">Welcome Back</h1>
            <p class="text-base-content/60 mt-2">Please sign in to your account</p>
        </div>

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

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
                            autofocus 
                            autocomplete="username"
                        />
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <label for="password" class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input 
                            type="password" 
                            id="password"
                            name="password" 
                            class="input input-bordered w-full @error('password') input-error @enderror"
                            placeholder="Enter your password"
                            required 
                            autocomplete="current-password"
                        />
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="label cursor-pointer gap-2">
                            <input 
                                type="checkbox" 
                                name="remember"
                                class="checkbox checkbox-primary"
                                {{ old('remember') ? 'checked' : '' }}
                            />
                            <span class="label-text">Remember me</span>
                        </label>

                        <a href="{{ route('password.request') }}" class="text-sm link link-hover">
                            Forgot password?
                        </a>
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary w-full">
                            Sign In
                        </button>
                    </div>

                    <div class="text-center text-sm mt-6">
                        <span class="text-base-content/60">Don't have an account?</span>
                        <a href="{{ route('register') }}" class="link link-primary ml-1">
                            Create one now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
@endpush
