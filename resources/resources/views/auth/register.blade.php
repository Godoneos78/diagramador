<x-authentication-layout>
    <h1 class="text-3xl text-slate-800 font-bold mb-6 text-center">{{ __('Crea tu cuenta') }} ✨</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4 mb-4">
            <div>
                <x-label for="name" class="block text-white">{{ __('Full Name') }} <span class="text-rose-500">*</span></x-label>
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
                    class="block w-full px-4 py-2 mt-2 bg-gray-800 text-white border border-gray-700 rounded-md focus:ring focus:ring-blue-300 focus:outline-none" />
            </div>

            <div>
                <x-label for="email" class="block text-white">{{ __('Email Address') }} <span class="text-rose-500">*</span></x-label>
                <x-input id="email" type="email" name="email" :value="old('email')" required 
                    class="block w-full px-4 py-2 mt-2 bg-gray-800 text-white border border-gray-700 rounded-md focus:ring focus:ring-blue-300 focus:outline-none" />
            </div>

            <div>
                <x-label for="password" class="block text-white">{{ __('Password') }}</x-label>
                <x-input id="password" type="password" name="password" required autocomplete="new-password" 
                    class="block w-full px-4 py-2 mt-2 bg-gray-800 text-white border border-gray-700 rounded-md focus:ring focus:ring-blue-300 focus:outline-none" />
            </div>

            <div>
                <x-label for="password_confirmation" class="block text-white">{{ __('Confirm Password') }}</x-label>
                <x-input id="password_confirmation" type="password" name="password_confirmation" required 
                    class="block w-full px-4 py-2 mt-2 bg-gray-800 text-white border border-gray-700 rounded-md focus:ring focus:ring-blue-300 focus:outline-none" />
            </div>

        </div>

        <x-button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-300">
            {{ __('Registrarse') }}
        </x-button>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-6 text-sm text-white">
                <label class="flex items-start">
                    <input type="checkbox" class="form-checkbox mt-1" name="terms" id="terms" />
                    <span class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' =>
                                '<a target="_blank" href="' .
                                route('terms.show') .
                                '" class="text-blue-400 underline hover:no-underline">' .
                                __('Terms of Service') .
                                '</a>',
                            'privacy_policy' =>
                                '<a target="_blank" href="' .
                                route('policy.show') .
                                '" class="text-blue-400 underline hover:no-underline">' .
                                __('Privacy Policy') .
                                '</a>',
                        ]) !!}
                    </span>
                </label>
            </div>
        @endif
    </form>
    <x-validation-errors class="mt-4 text-white" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-600">
        <div class="text-sm text-center text-white">
            {{ __('¿Tienes una cuenta?') }} <a class="font-medium text-blue-400 hover:text-blue-500"
                href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
        </div>
    </div>
</x-authentication-layout>
