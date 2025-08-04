<x-guest-layout>
    <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-green-50 to-teal-50">
            <h3 class="text-lg font-semibold text-gray-900">Create Account</h3>
            <p class="text-sm text-gray-600 mt-1">Join our community today</p>
        </div>

        <div class="p-6">
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Full Name')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="name" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-200 bg-gray-50 focus:bg-white" 
                                  type="text" 
                                  name="name" 
                                  :value="old('name')" 
                                  required 
                                  autofocus 
                                  autocomplete="name"
                                  placeholder="Enter your full name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email Address')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="email" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-200 bg-gray-50 focus:bg-white" 
                                  type="email" 
                                  name="email" 
                                  :value="old('email')" 
                                  required 
                                  autocomplete="username"
                                  placeholder="Enter your email address" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="password" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-200 bg-gray-50 focus:bg-white"
                                  type="password"
                                  name="password"
                                  required 
                                  autocomplete="new-password"
                                  placeholder="Create a secure password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="password_confirmation" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-200 bg-gray-50 focus:bg-white"
                                  type="password"
                                  name="password_confirmation" 
                                  required 
                                  autocomplete="new-password"
                                  placeholder="Confirm your password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Password Requirements -->
                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-green-800">Password Requirements:</p>
                            <ul class="text-xs text-green-700 mt-1 space-y-1">
                                <li>• At least 8 characters long</li>
                                <li>• Mix of uppercase and lowercase letters</li>
                                <li>• At least one number</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Register Button -->
                <div class="pt-4 border-t border-gray-100">
                    <x-primary-button class="w-full justify-center inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        {{ __('Create Account') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="font-medium text-green-600 hover:text-green-800 transition duration-200">
                        Sign in here
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
