<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
                <!-- Header Card -->
                <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-green-200 to-blue-200 ">
                    <h3 class="text-lg font-semibold text-gray-900">Create a New Blog Post</h3>
                    <p class="mt-1 text-sm text-gray-600">Share your thoughts with the world</p>
                </div>

                <div class="p-6">
                    <form method="POST" action="{{ route('posts.store') }}" class="space-y-6">
                        @csrf

                        <!-- Title Field -->
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-700">
                                Post Title
                            </label>
                            <input type="text" 
                                   name="title" 
                                   id="title" 
                                   class="w-full px-4 py-3 transition duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 focus:bg-white" 
                                   value="{{ old('title') }}" 
                                   placeholder="Enter an engaging title for your post"
                                   required>
                            @error('title')
                                <p class="flex items-center mt-2 text-sm text-red-500">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Content Field -->
                        <div>
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-700">
                                Post Content
                            </label>
                            <textarea name="content" 
                                      id="content" 
                                      rows="12" 
                                      class="w-full px-4 py-3 transition duration-200 border border-gray-300 rounded-lg resize-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 focus:bg-white" 
                                      placeholder="Write your post content here..."
                                      required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="flex items-center mt-2 text-sm text-red-500">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                            <a href="{{ route('posts.index') }}" 
                               class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 transition duration-200 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-200 hover:text-gray-800">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Cancel
                            </a>
                            <x-primary-button type="submit" class="inline-flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Create Post
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>