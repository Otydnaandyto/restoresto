<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-6 text-xl" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-6 text-xl" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="space-y-8 p-8 bg-white shadow-2xl rounded-xl max-w-xl mx-auto">
            @csrf

            <!-- Email Address -->
            <div class="space-y-4">
                <label for="email" class="block text-gray-800 text-lg font-semibold">Email</label>
                <input id="email" class="w-full px-6 py-4 text-lg border border-gray-400 rounded-md shadow-md focus:ring-2 focus:ring-indigo-600 focus:outline-none" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="space-y-4">
                <label for="password" class="block text-gray-800 text-lg font-semibold">Password</label>
                <input id="password" class="w-full px-6 py-4 text-lg border border-gray-400 rounded-md shadow-md focus:ring-2 focus:ring-indigo-600 focus:outline-none" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 focus:ring-indigo-500 rounded border-gray-400 shadow-md" name="remember">
                <label for="remember_me" class="ml-3 text-lg text-gray-700">Remember me</label>
            </div>

            <!-- Forgot Password & Login Button -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-lg text-indigo-600 hover:text-indigo-900">Forgot your password?</a>
                @endif
                <x-button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-4 px-6 text-lg rounded-md focus:outline-none">
                    Log in
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
