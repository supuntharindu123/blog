<x-guest-layout>
    <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-indigo-50 to-blue-50">
            <h3 class="text-lg font-semibold text-gray-900">Welcome Back</h3>
            <p class="text-sm text-gray-600 mt-1">Sign in to your account</p>
        </div>

        <div class="p-6">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email Address')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="email" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 bg-gray-50 focus:bg-white" 
                                  type="email" 
                                  name="email" 
                                  :value="old('email')" 
                                  required 
                                  autofocus 
                                  autocomplete="username"
                                  placeholder="Enter your email address" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="password" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 bg-gray-50 focus:bg-white"
                                  type="password"
                                  name="password"
                                  required 
                                  autocomplete="current-password"
                                  placeholder="Enter your password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" 
                               type="checkbox" 
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 transition duration-200" 
                               name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>

                    <a class="text-sm text-indigo-600 hover:text-indigo-800 transition duration-200 font-medium" 
                       href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                </div>

                <!-- Login Button -->
                <div class="pt-4 border-t border-gray-100">
                    <x-primary-button class="w-full justify-center inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        {{ __('Sign In') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Register Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-800 transition duration-200">
                        Create one here
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
