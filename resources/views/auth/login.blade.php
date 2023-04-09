<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="m-0 row">
        <div class="p-0 col-12">
            <div class="login-card">
                <div>
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Address -->
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="text-danger" />
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control" type="password" name="password"
                                    required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="text-danger" />
                            </div>
                            <!-- Remember Me -->
                            <div class="mb-0 form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox"
                                                class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                                name="remember">
                                            <span
                                                class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ingat Saya') }}</span>
                                        </label>
                                    </div>
                                    <div class="col text-end">
                                        @if (Route::has('password.request'))
                                            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                href="{{ route('password.request') }}">
                                                {{ __('Lupa Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="btn btn-primary btn-block w-100">
                                    {{ __('Masuk') }}
                                </x-primary-button>
                            </div>
                            <div class="flex items-center justify-end mt-4 text-center">
                                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('register') }}">
                                    {{ __('Belum memiliki akun?') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
