{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('admin.layouts.log')
@section('form')
    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ route('admin.dashboard') }}" class="">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN</h3>
                        </a>
                        <h3>Sign In</h3>
                    </div>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success mb-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com" value="{{ old('email') }}" required autofocus
                                autocomplete="username">
                            <label for="email">Email address</label>

                            @if ($errors->has('email'))
                                <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <!-- Password -->
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required autocomplete="current-password">
                            <label for="password">Password</label>

                            @if ($errors->has('password'))
                                <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                            @endif
                        </div>

                        <!-- Remember Me -->
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me">Remember me</label>
                            </div>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                    </form>

                    <p class="text-center mb-0">Don't have an Account? <a href="{{ route('admin.register') }}">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign In End -->
@endsection
