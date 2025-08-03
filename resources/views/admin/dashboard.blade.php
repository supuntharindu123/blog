<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Recent Posts -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Recent Posts</h3>
                            <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Create New Post
                            </a>
                        </div>
                        
                        @if($posts->count() > 0)
                            <ul class="divide-y divide-gray-200">
                                @foreach($posts as $post)
                                    <li class="py-4">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:text-blue-800">
                                                    {{ $post->title }}
                                                </a>
                                                <p class="text-sm text-gray-500">
                                                    By {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}
                                                </p>
                                            </div>
                                            <div>
                                                <a href="{{ route('admin.posts') }}" class="text-sm text-gray-500 hover:text-gray-700">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-500">No posts found.</p>
                        @endif
                    </div>
                </div>

                <!-- Recent Users -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">Recent Users</h3>
                        
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