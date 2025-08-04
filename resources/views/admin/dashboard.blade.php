<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <!-- Recent Posts -->
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold">Recent Posts</h3>
                            <a href="{{ route('posts.create') }}" class="px-4 py-2 font-bold text-white rounded bg-gradient-to-r from-green-500 to-blue-500 hover:from-green-600 hover:to-blue-600 hover:bg-blue-700">
                                Create New Post
                            </a>
                        </div>
                        
                        @if($posts->count() > 0)
                            <div class="grid grid-cols-1 gap-4">
                                @foreach($posts as $post)
                                    <div class="p-4 transition duration-300 border border-gray-200 rounded-lg bg-gray-50 hover:shadow-md">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1">
                                                <a href="{{ route('posts.show', $post) }}" class="text-lg font-semibold text-blue-600 transition duration-200 hover:text-blue-800">
                                                    {{ Str::limit($post->title, 50) }}
                                                </a>
                                                <p class="mt-2 text-sm leading-relaxed text-gray-600">
                                                    {{ Str::limit($post->content, 100) }}
                                                </p>
                                                <div class="flex items-center mt-3 text-xs text-gray-500">
                                                    <div class="flex items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                        </svg>
                                                        <span class="font-medium">{{ $post->user->name }}</span>
                                                    </div>
                                                    <span class="mx-2">•</span>
                                                    <div class="flex items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                        </svg>
                                                        <span>{{ $post->created_at->format('M d, Y') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col ml-4 space-y-2">
                                                <a href="{{ route('posts.show', $post) }}" class="px-2 py-1 text-xs text-center text-blue-700 transition duration-200 bg-blue-100 rounded-full hover:bg-blue-200">
                                                    View
                                                </a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4 text-center">
                                <a href="{{ route('admin.posts') }}" class="text-sm font-medium text-blue-600 hover:text-blue-800">
                                    View All Posts →
                                </a>
                            </div>
                        @else
                            <p class="text-gray-500">No posts found.</p>
                        @endif
                    </div>
                </div>

                <!-- Recent Users -->
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="mb-4 text-lg font-semibold">Recent Users</h3>
                        
                        @if($users->count() > 0)
                            <ul class="divide-y divide-gray-200">
                                @foreach($users as $user)
                                    <li class="py-4">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="font-medium">{{ $user->name }}</p>
                                                <p class="text-sm text-gray-500">
                                                    {{ $user->email }} ({{ ucfirst($user->role) }})
                                                </p>
                                            </div>
                                            <div>
                                                <a href="{{ route('admin.users') }}" class="text-sm text-gray-500 hover:text-gray-700">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-500">No users found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>