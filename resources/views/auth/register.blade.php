<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-[#8B0000] font-semibold" />
            <x-text-input id="name" class="block mt-1 w-full border-[#8B0000] focus:ring-[#FFD700]" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-700 text-sm" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-[#8B0000] font-semibold" />
            <x-text-input id="email" class="block mt-1 w-full border-[#8B0000] focus:ring-[#FFD700]" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-700 text-sm" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-[#8B0000] font-semibold" />
            <x-text-input id="password" class="block mt-1 w-full border-[#8B0000] focus:ring-[#FFD700]" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-700 text-sm" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-[#8B0000] font-semibold" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border-[#8B0000] focus:ring-[#FFD700]" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-700 text-sm" />
        </div>

        <!-- Role Dropdown -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Select Role')" class="text-[#8B0000] font-semibold" />
            <select name="role" id="role" required
                    class="block mt-1 w-full px-4 py-2 border border-[#8B0000] rounded focus:outline-none focus:ring-2 focus:ring-[#FFD700]">
                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2 text-red-700 text-sm" />
        </div>

        <!-- Submit -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-[#8B0000] hover:text-[#FFD700] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FFD700]" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 bg-[#8B0000] hover:bg-[#a90000] focus:ring-[#FFD700]">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
