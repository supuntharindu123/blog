<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(session('success'))
                        <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold">My Blog Posts</h3>
                        <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 font-medium text-white transition duration-200 bg-blue-600 rounded-lg shadow-sm hover:bg-blue-700">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Create New Post
                        </a>
                    </div>

                    @forelse ($posts as $post)
                        <div class="mb-6 overflow-hidden transition-all duration-300 bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md">
                            <!-- Card Header -->
                            <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-blue-50">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <a href="{{ route('posts.show', $post) }}" class="text-xl font-bold text-gray-900 transition-colors duration-200 hover:text-blue-600 line-clamp-2">
                                            {{ $post->title }}
                                        </a>
                                        <div class="flex items-center mt-2 text-sm text-gray-500">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <span>Created {{ $post->created_at->format('M d, Y') }}</span>
                                            <span class="mx-2">•</span>
                                            <span>{{ $post->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col min-w-0 gap-2 ml-4 sm:flex-row">
                                        <a href="{{ route('posts.show', $post) }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-blue-700 transition-colors duration-200 bg-blue-100 rounded-lg hover:bg-blue-200 whitespace-nowrap">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                            View Post
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="px-6 py-4">
                                <div class="text-sm leading-relaxed text-gray-600">
                                    {{ Str::limit($post->content, 150) }}
                                </div>
                                
                                <!-- Post Stats -->
                                <div class="flex items-center justify-between pt-4 mt-4 border-t border-gray-100">
                                    <div class="flex items-center space-x-4 text-xs text-gray-500">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-1l-4 4z"></path>
                                            </svg>
                                            <span>{{ str_word_count($post->content) }} words</span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>{{ ceil(str_word_count($post->content) / 200) }} min read</span>
                                        </div>
                                    </div>
                                    @if($post->updated_at != $post->created_at)
                                        <div class="text-xs text-gray-400">
                                            Updated {{ $post->updated_at->diffForHumans() }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="py-16 text-center">
                            <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <h3 class="mb-2 text-lg font-medium text-gray-900">No posts yet</h3>
                            <p class="mb-6 text-gray-500">Start sharing your thoughts with the world!</p>
                            <a href="{{ route('posts.create') }}" class="inline-flex items-center px-6 py-3 text-base font-medium text-white transition-colors duration-200 bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Create your first post
                            </a>
                        </div>
                    @endforelse

                    <div class="mt-4">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>