<x-layouts.app title="Login" meta-description="Home meta description">
    <br>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400" style="width: 400px; margin:auto;">
        {{ __('¿Olvidaste tu contraseña? ¡No hay problema! Solo dejanos saber tu dirección de correo electrónico y te enviaremos un correo con la liga que te permitira escoger uno nuevo.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" style="width: 400px; margin:auto;">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
    </x-layouts.app>
