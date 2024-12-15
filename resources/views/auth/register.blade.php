<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-6 text-xl" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="space-y-8 p-8 bg-white shadow-2xl rounded-xl max-w-xl mx-auto">
            @csrf

            <!-- Name -->
            <div class="space-y-4">
                <label for="name" class="block text-gray-800 text-lg font-semibold">Name</label>
                <input id="name" class="w-full px-6 py-4 text-lg border border-gray-400 rounded-md shadow-md focus:ring-2 focus:ring-indigo-600 focus:outline-none" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="space-y-4">
                <label for="email" class="block text-gray-800 text-lg font-semibold">Email</label>
                <input id="email" class="w-full px-6 py-4 text-lg border border-gray-400 rounded-md shadow-md focus:ring-2 focus:ring-indigo-600 focus:outline-none" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="space-y-4">
                <label for="password" class="block text-gray-800 text-lg font-semibold">Password</label>
                <input id="password" class="w-full px-6 py-4 text-lg border border-gray-400 rounded-md shadow-md focus:ring-2 focus:ring-indigo-600 focus:outline-none" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="space-y-4">
                <label for="password_confirmation" class="block text-gray-800 text-lg font-semibold">Confirm Password</label>
                <input id="password_confirmation" class="w-full px-6 py-4 text-lg border border-gray-400 rounded-md shadow-md focus:ring-2 focus:ring-indigo-600 focus:outline-none" type="password" name="password_confirmation" required />
            </div>

            <!-- Register Button -->
            <div class="flex items-center justify-between">
                <a href="{{ route('login') }}" class="text-lg text-indigo-600 hover:text-indigo-900">Already registered?</a>
                <x-button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-4 px-6 text-lg rounded-md focus:outline-none">
                    Register
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
