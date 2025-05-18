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
      <p class="text-base-content/60 mt-2">We'll help you get back into your account</p>
    </div>

    <div class="card bg-base-100 shadow-xl">
      <div class="card-body">
        <div class="alert alert-info mb-6 flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               class="stroke-current shrink-0 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <p class="text-sm flex-1">
            Enter your email address and we'll send you a link to reset your password.
          </p>
        </div>

        <div class="alert alert-success mb-6 flex items-center gap-2 hidden" id="statusMessage">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               class="stroke-current shrink-0 h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>Success message here</span>
        </div>

        <form method="POST" action="/reset-password" class="space-y-6">
          @csrf

          <div class="form-control w-full">
            <label for="email" class="label">
              <span class="label-text">Email Address</span>
            </label>
            <input type="email" id="email" name="email" placeholder="Enter your email address"
                   required autofocus autocomplete="email"
                   class="input input-bordered w-full" />
          </div>

          <div class="form-control mt-6">
            <button type="submit" class="btn bg-pink-500 hover:bg-pink-600 text-white w-full">
              Send Reset Link
            </button>
          </div>

          <div class="text-center text-sm mt-6">
            <a href="/login" class="link link-hover flex items-center justify-center gap-2">
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
</body>
</html>
