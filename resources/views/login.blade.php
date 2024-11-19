<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-900">
        <!-- Container -->
        <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-center text-white mb-6">Login</h2>
    
            @if ($errors->any())
                <div class="bg-red-500 text-white p-3 rounded mb-4">
                    {{ $errors->first() }}
                </div>
            @endif
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Email</label>
                    <input type="email" id="email" name="email" 
                        placeholder="Enter your email" 
                        class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-orange-500" 
                        required>
                </div>
    
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-400 mb-2">Password</label>
                    <input type="password" id="password" name="password" 
                        placeholder="Enter your password" 
                        class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-orange-500" 
                        required>
                </div>
    
                <!-- Submit Button -->
                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 rounded">Sign In</button>
            </form>
    
            <!-- Register Link -->
            <p class="text-center mt-4 text-gray-400">
                Don't have an account? <a href="{{ route('register') }}" class="text-orange-500 hover:underline">Register</a>
            </p>
        </div>
    </div>
</body>
</html>