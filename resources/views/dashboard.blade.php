<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="mb-6 overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
                <div class="px-6 py-8 bg-gradient-to-r from-blue-50 to-indigo-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">Welcome back, {{ Auth::user()->name }}!</h1>
                            <p class="mt-2 text-gray-600">Ready to share your thoughts with the world?</p>
                        </div>
                        <div class="hidden sm:block">
                            <svg class="w-16 h-16 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Grid -->
            <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-3">
                <!-- Create Post Card -->
                <div class="overflow-hidden transition duration-300 bg-white border border-gray-200 shadow-lg sm:rounded-xl hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-lg">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Create New Post</h3>
                                <p class="text-sm text-gray-500">Start writing your next blog post</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('posts.create') }}" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-200 border border-transparent rounded-lg bg-gradient-to-r from-green-500 to-blue-500 hover:from-green-600 hover:to-blue-600">
                                Create Post
                            </a>
                        </div>
                    </div>
                </div>

                <!-- My Posts Card -->
                <div class="overflow-hidden transition duration-300 bg-white border border-gray-200 shadow-lg sm:rounded-xl hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-lg">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 ml-4">
                                <h3 class="text-lg font-medium text-gray-900">My Posts</h3>
                                <p class="text-sm text-gray-500">Manage your blog posts</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('posts.index') }}" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-200 bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700">
                                View Posts
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Browse Posts Card -->
                <div class="overflow-hidden transition duration-300 bg-white border border-gray-200 shadow-lg sm:rounded-xl hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-10 h-10 bg-purple-100 rounded-lg">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Browse Blog</h3>
                                <p class="text-sm text-gray-500">Explore all blog posts</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('blog.posts') }}" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-200 bg-purple-600 border border-transparent rounded-lg hover:bg-purple-700">
                                Browse Posts
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Status Card -->
            <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
                <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-blue-50">
                    <h3 class="text-lg font-semibold text-gray-900">Your Account Status</h3>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-12 h-12 bg-green-100 rounded-full">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-medium text-gray-900">You're logged in!</p>
                                <p class="text-sm text-gray-500">Role: <span class="font-medium {{ Auth::user()->isAdmin() ? 'text-green-600' : 'text-blue-600' }}">{{ Auth::user()->isAdmin() ? 'Administrator' : 'User' }}</span></p>
                            </div>
                        </div>
                        @if(Auth::user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition duration-200 bg-green-600 border border-transparent rounded-lg hover:bg-green-700">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Admin Panel
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
