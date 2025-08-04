<x-guest-layout>
    <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-yellow-50 to-orange-50">
            <h3 class="text-lg font-semibold text-gray-900">Confirm Password</h3>
            <p class="text-sm text-gray-600 mt-1">Security verification required</p>
        </div>

        <div class="p-6">
            <!-- Security Message -->
            <div class="flex items-start mb-6">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600 leading-relaxed">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </p>
                </div>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="password" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition duration-200 bg-gray-50 focus:bg-white"
                                  type="password"
                                  name="password"
                                  required 
                                  autocomplete="current-password" 
                                  placeholder="Enter your current password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Security Notice -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-sm text-gray-600">
                            Your password is required to access sensitive areas of the application.
                        </p>
                    </div>
                </div>

                <div class="flex justify-end pt-4 border-t border-gray-100">
                    <x-primary-button class="inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
