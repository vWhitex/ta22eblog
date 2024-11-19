<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-1">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Profile Settings') }}
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{ __('Manage your account settings and preferences') }}
            </p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-12 gap-6">
                <div class="md:col-span-3">
                    <div class="sticky top-8">
                        <nav class="menu bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg">
                            <div class="menu-title text-gray-500 dark:text-gray-400 text-sm font-medium uppercase">
                                {{ __('Settings') }}
                            </div>
                            <ul class="mt-2 space-y-1">
                                <li>
                                    <a href="#profile-info" class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        {{ __('Profile Information') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#security" class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                        {{ __('Security') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#danger" class="flex items-center px-3 py-2 text-red-600 dark:text-red-400 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        {{ __('Danger Zone') }}
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="md:col-span-9 space-y-6">
                    <div id="profile-info" class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg transition-all hover:shadow-xl">
                        <div class="p-6">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div id="security" class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg transition-all hover:shadow-xl">
                        <div class="p-6">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div id="danger" class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg border-2 border-red-200 dark:border-red-900/50 transition-all hover:shadow-xl">
                        <div class="p-6">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Smooth scroll to sections
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    @endpush
</x-app-layout>
