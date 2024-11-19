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
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-[500px] bg-white rounded-xl p-10 shadow-lg">
            @if ($errors->any())
                <div class="text-red-500 text-center mb-4">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="text-4xl font-bold text-center text-blue-500 mb-6">Register</h1>
                <div class="mb-4">
                    <input type="text" name="username" placeholder="Username" required
                           class="w-full h-12 px-4 border-2 rounded-lg focus:outline-none">
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email" required
                           class="w-full h-12 px-4 border-2 rounded-lg focus:outline-none">
                </div>
                <div class="mb-4">
                    <input type="text" name="full_name" placeholder="Full Name" required
                           class="w-full h-12 px-4 border-2 rounded-lg focus:outline-none">
                </div>
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password" required
                           class="w-full h-12 px-4 border-2 rounded-lg focus:outline-none">
                </div>
                <div class="mb-4">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                           class="w-full h-12 px-4 border-2 rounded-lg focus:outline-none">
                </div>
                <button type="submit" class="w-full bg-blue-500  text-black py-2 rounded-lg">
                    Register
                </button>
                <p class="mt-4 text-center">
                    Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>