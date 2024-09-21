<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex items-center justify-center h-screen">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
            <h2 class="text-3xl font-bold text-center mb-6 text-yellow-500">Welcome Back</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"
                        placeholder="example@example.com">
                    @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"
                        placeholder="••••••••">
                    @error('password')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox"
                            class="h-4 w-4 text-yellow-500 focus:ring-yellow-400 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>

                    <div>
                        <a href="#" class="text-sm text-yellow-500 hover:underline">Forgot your password?</a>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full px-4 py-2 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 transition duration-150 ease-in-out">
                    Login
                </button>
            </form>

            <!-- Sign-up Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-700">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-yellow-500 hover:underline">Sign up</a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>