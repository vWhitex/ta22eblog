<section class="space-y-6 max-w-xxl mx-auto">
  <div class="flex items-center gap-4">
    <div class="flex-1">
      <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
        Delete Account
      </h2>
      <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
      </p>
    </div>
    <div class="tooltip" data-tip="Danger Zone">
      <div class="p-2 bg-error/20 text-error rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
      </div>
    </div>
  </div>

  <button
    type="button"
    id="open-delete-modal"
    class="btn btn-error"
  >
    Delete Account
  </button>

  <!-- Modal backdrop -->
  <div id="delete-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-md w-full p-4">
      <form method="post" action="{{ route('profile.destroy') }}">
        @csrf
        @method('delete')

        <div class="mb-4 alert alert-error flex gap-3 items-start p-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div>
            <h3 class="font-bold mb-1">Are you absolutely sure?</h3>
            <p class="text-sm leading-tight">Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.</p>
          </div>
        </div>

        <div class="form-control w-full mb-3">
          <label for="password" class="label mb-1">
            <span class="label-text">Password</span>
          </label>
          <input
            type="password"
            id="password"
            name="password"
            class="input input-bordered w-full"
            placeholder="Password"
            required
          />
          <!-- Place for errors, if any -->
          <p class="text-error mt-1 text-sm" id="password-error" style="display:none;"></p>
        </div>

        <div class="flex justify-end gap-3">
          <button
            type="button"
            id="cancel-delete"
            class="btn btn-ghost px-4 py-2"
          >
            Cancel
          </button>
          <button
            type="submit"
            class="btn btn-error px-4 py-2"
          >
            Delete Account
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<script>
  const openModalBtn = document.getElementById('open-delete-modal');
  const modal = document.getElementById('delete-modal');
  const cancelBtn = document.getElementById('cancel-delete');

  openModalBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
    modal.classList.add('flex');
  });

  cancelBtn.addEventListener('click', () => {
    modal.classList.remove('flex');
    modal.classList.add('hidden');
  });

  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.remove('flex');
      modal.classList.add('hidden');
    }
  });
</script>
