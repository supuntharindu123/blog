<x-guest-layout>
    <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-blue-50 to-cyan-50">
            <h3 class="text-lg font-semibold text-gray-900">Forgot Password</h3>
            <p class="text-sm text-gray-600 mt-1">Reset your account password</p>
        </div>

        <div class="p-6">
            <!-- Information Message -->
            <div class="flex items-start mb-6">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600 leading-relaxed">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </p>
                </div>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email Address')" class="text-sm font-medium text-gray-700" />
                    <x-text-input id="email" 
                                  class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 bg-gray-50 focus:bg-white" 
                                  type="email" 
                                  name="email" 
                                  :value="old('email')" 
                                  required 
                                  autofocus 
                                  placeholder="Enter your email address" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Information Box -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-700">What happens next?</p>
                            <ul class="text-xs text-gray-600 mt-1 space-y-1">
                                <li>• We'll send a reset link to your email</li>
                                <li>• Click the link to create a new password</li>
                                <li>• The link expires in 60 minutes for security</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end pt-4 border-t border-gray-100">
                    <x-primary-button class="inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Back to Login -->
            <div class="mt-6 text-center">
                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-800 transition duration-200">
                    ← Back to Login
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
