{{-- <x-guest-layout>
    <form method="POST" action="{{ route('admin.register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('admin.layouts.log')
@section('form')
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ route('admin.dashboard') }}" class="">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN</h3>
                        </a>
                        <h3>Daftar</h3>
                    </div>

                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe"
                                value="{{ old('name') }}" required autofocus autocomplete="name">
                            <label for="name">Name</label>

                            @if ($errors->has('name'))
                                <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <!-- Email Address -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="username">
                            <label for="email">Email address</label>

                            @if ($errors->has('email'))
                                <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <!-- Password -->
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required autocomplete="new-password">
                            <label for="password">Password</label>

                            @if ($errors->has('password'))
                                <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                            @endif
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm Password" required
                                autocomplete="new-password">
                            <label for="password_confirmation">Confirm Password</label>

                            @if ($errors->has('password_confirmation'))
                                <div class="text-danger mt-2">{{ $errors->first('password_confirmation') }}</div>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>

                        <p class="text-center mb-0">Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
