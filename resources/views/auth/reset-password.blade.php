<x-guest-layout>
    <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-purple-50 to-pink-50">
            <h3 class="text-lg font-semibold text-gray-900">Reset Password</h3>
            <p class="text-sm text-gray-600 mt-1">Create a new password for your account</p>
        </div>

        <div class="p-6">
            <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="email" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 bg-gray-50 focus:bg-white" 
                                  type="email" 
                                  name="email" 
                                  :value="old('email', $request->email)" 
                                  required 
                                  autofocus 
                                  autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('New Password')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="password" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 bg-gray-50 focus:bg-white" 
                                  type="password" 
                                  name="password" 
                                  required 
                                  autocomplete="new-password" 
                                  placeholder="Enter your new password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="password_confirmation" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 bg-gray-50 focus:bg-white"
                                  type="password"
                                  name="password_confirmation" 
                                  required 
                                  autocomplete="new-password" 
                                  placeholder="Confirm your new password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Password Requirements -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-blue-800">Password Requirements:</p>
                            <ul class="text-xs text-blue-700 mt-1 space-y-1">
                                <li>• At least 8 characters long</li>
                                <li>• Mix of uppercase and lowercase letters</li>
                                <li>• At least one number</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end pt-4 border-t border-gray-100">
                    <x-primary-button class="inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                        </svg>
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
