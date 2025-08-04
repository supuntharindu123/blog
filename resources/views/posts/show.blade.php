<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Post Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Post Header -->
                    <div class="pb-6 mb-6 border-b border-gray-100">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <h1 class="mb-3 text-3xl font-bold text-gray-900">{{ $post->title }}</h1>
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <span class="font-medium">{{ $post->user->name }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>{{ $post->created_at->format('F j, Y') }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>{{ ceil(str_word_count($post->content) / 200) }} min read</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Action Menu -->
                            @if(auth()->check() && (auth()->user()->id === $post->user_id || auth()->user()->isAdmin()))
                                <div class="relative ml-6">
                                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 bg-gray-100 rounded-lg hover:bg-gray-200" onclick="toggleDropdown()">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                        </svg>
                                    </button>
                                    <div id="actionDropdown" class="absolute right-0 z-10 hidden w-48 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg">
                                        <div class="py-1">
                                            <a href="{{ route('posts.edit', $post) }}" class="flex items-center px-4 py-3 text-sm text-gray-700 transition-colors duration-200 hover:bg-blue-50 hover:text-blue-600">
                                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                                Edit Post
                                            </a>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="flex items-center w-full px-4 py-3 text-sm text-left text-red-600 transition-colors duration-200 hover:bg-red-50" onclick="return confirm('Are you sure you want to delete this post?')">
                                                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                    Delete Post
                                                    @if(auth()->user()->isAdmin() && auth()->user()->id !== $post->user_id)
                                                        <span class="ml-1 text-xs opacity-75">(Admin)</span>
                                                    @endif
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Post Content -->
                    <div class="prose prose-lg max-w-none">
                        <div class="leading-relaxed text-gray-700 whitespace-pre-line">{{ $post->content }}</div>
                    </div>

                    <!-- Back Button -->
                    <div class="pt-6 mt-8 border-t border-gray-100">
                        <a href="{{ route('blog.posts') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 transition-colors duration-200 bg-gray-100 rounded-lg hover:bg-gray-200 hover:text-gray-800">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back to Posts
                        </a>
                    </div>
                </div>
                
                <script>
                function toggleDropdown() {
                    const dropdown = document.getElementById('actionDropdown');
                    dropdown.classList.toggle('hidden');
                }

                // Close dropdown when clicking outside
                document.addEventListener('click', function(event) {
                    const dropdown = document.getElementById('actionDropdown');
                    const button = event.target.closest('button');
                    
                    if (!button || !button.onclick) {
                        dropdown.classList.add('hidden');
                    }
                });
                </script>
            </div>
        </div>
    </div>
</x-app-layout>