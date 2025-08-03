<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <h1 class="text-2xl font-bold text-gray-800">{{ $post->title }}</h1>
                        <p class="text-sm text-gray-500 mt-1">
                            Posted by {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}
                        </p>
                    </div>

                    <div class="prose max-w-none">
                        <p class="whitespace-pre-line">{{ $post->content }}</p>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('posts.edit', $post) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this post?')">
                                Delete
                            </button>
                        </form>
                        <a href="{{ route('posts.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to Posts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>