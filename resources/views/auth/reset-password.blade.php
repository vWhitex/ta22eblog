<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Reset Password</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-base-200 flex items-center justify-center min-h-screen p-4">
  <div class="max-w-md w-full">
    <div class="text-center mb-8">
      <h1 class="text-3xl font-bold text-base-content">Reset Password</h1>
      <p class="text-base-content/60 mt-2">Enter your new password below</p>
    </div>

    <div class="card bg-base-100 shadow-xl">
      <div class="card-body">
        <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
          @csrf

          <!-- Password Reset Token -->
          <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <!-- Email Address -->
          <div class="form-control w-full">
            <label for="email" class="label">
              <span class="label-text">Email</span>
            </label>
            <input id="email" type="email" name="email" required autocomplete="username"
                   value="{{ old('email', $request->email) }}"
                   class="input input-bordered w-full" />
            @error('email')
              <p class="text-error text-sm mt-2">{{ $message }}</p>
            @enderror
          </div>

          <!-- New Password -->
          <div class="form-control w-full">
            <label for="password" class="label">
              <span class="label-text">New Password</span>
            </label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                   class="input input-bordered w-full" />
            @error('password')
              <p class="text-error text-sm mt-2">{{ $message }}</p>
            @enderror
          </div>

          <!-- Confirm Password -->
          <div class="form-control w-full">
            <label for="password_confirmation" class="label">
              <span class="label-text">Confirm Password</span>
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                   class="input input-bordered w-full" />
            @error('password_confirmation')
              <p class="text-error text-sm mt-2">{{ $message }}</p>
            @enderror
          </div>

          <!-- Submit Button -->
          <div class="form-control mt-4">
            <button type="submit" class="btn bg-pink-500 hover:bg-pink-600 text-white w-full">
              Reset Password
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
