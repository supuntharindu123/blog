<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
                <!-- Header Card -->
                <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-orange-50 to-yellow-50">
                    <h3 class="text-lg font-semibold text-gray-900">Edit Your Blog Post</h3>
                    <p class="text-sm text-gray-600 mt-1">Update your post content and make it even better</p>
                </div>

                <div class="p-6">
                    <form method="POST" action="{{ route('posts.update', $post) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Title Field -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                                Post Title
                            </label>
                            <input type="text" 
                                   name="title" 
                                   id="title" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-gray-50 focus:bg-white" 
                                   value="{{ old('title', $post->title) }}" 
                                   placeholder="Enter an engaging title for your post"
                                   required>
                            @error('title')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Content Field -->
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                                Post Content
                            </label>
                            <textarea name="content" 
                                      id="content" 
                                      rows="12" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-200 bg-gray-50 focus:bg-white resize-none" 
                                      placeholder="Write your post content here..."
                                      required>{{ old('content', $post->content) }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Post Info -->
                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Originally created: {{ $post->created_at->format('F j, Y \a\t g:i A') }}</span>
                                @if($post->updated_at != $post->created_at)
                                    <span class="mx-2">•</span>
                                    <span>Last updated: {{ $post->updated_at->diffForHumans() }}</span>
                                @endif
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                            <a href="{{ route('posts.index') }}" 
                               class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-200 hover:text-gray-800 transition duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Cancel
                            </a>
                            <div class="flex items-center space-x-3">
                                <a href="{{ route('posts.show', $post) }}" 
                                   class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-blue-100 border border-transparent rounded-lg hover:bg-blue-200 hover:text-blue-800 transition duration-200">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Preview
                                </a>
                                <button type="submit" 
                                        class="inline-flex items-center px-6 py-2 text-sm font-medium text-white bg-gradient-to-r from-orange-500 to-yellow-500 hover:from-orange-600 hover:to-yellow-600 border border-transparent rounded-lg transition duration-200 shadow-lg hover:shadow-xl">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                    </svg>
                                    Update Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>