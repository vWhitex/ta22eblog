<section class="space-y-6 max-w-xxl mx-auto">
  <div class="flex items-center gap-4">
    <div class="flex-1">
      <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
        {{ __('Update Password') }}
      </h2>
      <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
      </p>
    </div>
    <div class="tooltip" data-tip="Use a strong password">
      <div class="p-3 bg-base-200 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
        </svg>
      </div>
    </div>
  </div>

  <form method="post" action="{{ route('password.update') }}" class="space-y-6">
    @csrf
    @method('put')

    <div class="form-control w-full">
      <label for="current_password" class="label">
        <span class="label-text">{{ __('Current Password') }}</span>
      </label>
      <input
        type="password"
        id="update_password_current_password"
        name="current_password"
        class="input input-bordered w-full"
        autocomplete="current-password"
      />
      <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
    </div>

    <div class="form-control w-full">
      <label for="password" class="label">
        <span class="label-text">{{ __('New Password') }}</span>
      </label>
      <input
        type="password"
        id="update_password_password"
        name="password"
        class="input input-bordered w-full"
        autocomplete="new-password"
      />
      <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
    </div>

    <div class="form-control w-full">
      <label for="password_confirmation" class="label">
        <span class="label-text">{{ __('Confirm Password') }}</span>
      </label>
      <input
        type="password"
        id="update_password_password_confirmation"
        name="password_confirmation"
        class="input input-bordered w-full"
        autocomplete="new-password"
      />
      <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center gap-4">
      <button type="submit" class="btn btn-primary">
        {{ __('Update Password') }}
      </button>

      @if (session('status') === 'password-updated')
        <div id="success-alert" class="alert alert-success p-2 flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"
               stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>{{ __('Password updated successfully.') }}</span>
        </div>
      @endif
    </div>
  </form>
</section>

<script>
  // Auto-hide the success alert after 2 seconds if it exists
  document.addEventListener('DOMContentLoaded', () => {
    const alert = document.getElementById('success-alert');
    if (alert) {
      setTimeout(() => {
        alert.style.transition = 'opacity 0.5s ease';
        alert.style.opacity = '0';
        setTimeout(() => alert.remove(), 500);
      }, 2000);
    }
  });
</script>
