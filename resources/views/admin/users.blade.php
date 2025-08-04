<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
                <!-- Header -->
                <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-blue-50 to-indigo-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">User Management</h3>
                            <p class="text-sm text-gray-600 mt-1">Manage all registered users</p>
                        </div>
                        <div class="text-sm text-gray-500">
                            Total Users: {{ $users->total() }}
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    @forelse ($users as $user)
                        <div class="mb-6 overflow-hidden transition-all duration-300 bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md">
                            <!-- User Card -->
                            <div class="px-6 py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center flex-1">
                                        <!-- Avatar -->
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-lg">
                                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- User Info -->
                                        <div class="ml-4 flex-1">
                                            <div class="flex items-center">
                                                <h4 class="text-lg font-semibold text-gray-900">{{ $user->name }}</h4>
                                                <span class="ml-3 px-3 py-1 text-xs leading-5 font-semibold rounded-full {{ $user->isAdmin() ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                                    {{ ucfirst($user->role) }}
                                                </span>
                                            </div>
                                            <p class="text-sm text-gray-600 mt-1">{{ $user->email }}</p>
                                            <div class="flex items-center mt-2 text-xs text-gray-500">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                <span>Joined {{ $user->created_at->format('M d, Y') }}</span>
                                                <span class="mx-2">•</span>
                                                <span>{{ $user->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex items-center space-x-2 ml-4">
                                        @if($user->isAdmin())
                                            <div class="flex items-center px-3 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                Admin
                                            </div>
                                        @else
                                            <div class="flex items-center px-3 py-1 text-xs font-medium text-blue-700 bg-blue-100 rounded-full">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                                </svg>
                                                User
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="py-16 text-center">
                            <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                            <h3 class="mb-2 text-lg font-medium text-gray-900">No users found</h3>
                            <p class="text-gray-500">There are no registered users at the moment.</p>
                        </div>
                    @endforelse

                    <!-- Pagination -->
                    <div class="mt-6 border-t border-gray-100 pt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>