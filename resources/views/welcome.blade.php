<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Blog - Share Your Stories</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- TailwindCSS (if not using Laravel Mix/Vite yet) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .bg-gradient-overlay {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(30, 64, 175, 0.6));
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        .animate-slide-up {
            animation: slideUp 0.8s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="antialiased min-h-screen bg-no-repeat bg-cover bg-center" style="background-image: url('{{ asset('images/image.png') }}');">

    <div class="min-h-screen flex items-center justify-center bg-gradient-overlay animate-fade-in">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-8xl font-extrabold mb-6 animate-slide-up text-gray-200">
                Welcome to <br>
                <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent text-6xl">
                     Blog
                </span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-200 animate-slide-up" style="animation-delay: 0.2s;">
                Share your stories, connect with readers, and build your online presence with our modern blogging platform.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-slide-up" style="animation-delay: 0.4s;">
                @auth
                    <a href="{{ route('posts.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-4 rounded-full text-lg transition duration-300 hover-scale shadow-lg">
                        View My Posts
                    </a>
                    <a href="{{ route('posts.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-4 rounded-full text-lg transition duration-300 hover-scale shadow-lg">
                        Create New Post
                    </a>
                    <a href="{{ route('dashboard') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold px-8 py-4 rounded-full text-lg transition duration-300 hover-scale shadow-lg">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('register') }}" class="bg-white text-gray-900 font-semibold px-8 py-4 rounded-full text-lg hover:bg-gray-100 transition duration-300 hover-scale shadow-lg">
                        Get Started Free
                    </a>
                    <a href="{{ route('login') }}" class="bg-transparent border-2 border-white text-white font-semibold px-8 py-4 rounded-full text-lg hover:bg-white hover:text-gray-900 transition duration-300 hover-scale">
                        Sign In
                    </a>
                @endauth
            </div>
            
          
        </div>
    </div>

   
{{-- 
    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 py-16">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Start Your Blogging Journey?</h2>
            <p class="text-xl text-blue-100 mb-8">Join thousands of writers who have already discovered the power of our platform.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="bg-white text-blue-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-100 transition duration-300 hover-scale shadow-lg">
                    Start Writing Today
                </a>
                <a href="{{ route('login') }}" class="bg-transparent border-2 border-white text-white font-semibold px-8 py-4 rounded-full text-lg hover:bg-white hover:text-blue-600 transition duration-300 hover-scale">
                    I Already Have an Account
                </a>
            </div>
        </div>
    </div>
    @endguest --}}

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">
                &copy; {{ date('Y') }} Laravel Blog. Built with ❤️ using Laravel v{{ Illuminate\Foundation\Application::VERSION }}
            </p>
        </div>
    </footer>

</body>
</html>
