<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Email Verification</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-base-200 flex items-center justify-center min-h-screen p-4">
  <div class="max-w-md w-full">
    <div class="card bg-base-100 shadow-xl p-6">
      <div class="text-sm text-base-content/60 mb-4">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn’t receive the email, we will gladly send you another.
      </div>

      @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
          A new verification link has been sent to the email address you provided during registration.
        </div>
      @endif

      <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
          @csrf
          <button type="submit" class="btn btn-primary btn-sm">
            Resend Verification Email
          </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-ghost btn-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
            Log Out
          </button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
