{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('logUser/css/style.css') }}">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(logUser/images/bg-1.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                            </div>

                            <form method="POST" action="{{ route('register') }}" class="signin-form">
                                @csrf

                                <!-- Name -->
                                <div class="form-group mt-3">
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        required autofocus autocomplete="name" value="{{ old('name') }}">
                                    <label class="form-control-placeholder" for="name">Name</label>

                                    @if ($errors->has('name'))
                                        <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>

                                <!-- Email Address -->
                                <div class="form-group mt-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        required autocomplete="username" value="{{ old('email') }}">
                                    <label class="form-control-placeholder" for="email">Email</label>

                                    @if ($errors->has('email'))
                                        <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>

                                <!-- Password -->
                                <div class="form-group mt-3">
                                    <input id="password-field" type="password" name="password" class="form-control"
                                        required autocomplete="new-password">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                    @if ($errors->has('password'))
                                        <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group mt-3">
                                    <input id="password_confirmation" type="password" name="password_confirmation"
                                        class="form-control" required autocomplete="new-password">
                                    <label class="form-control-placeholder" for="password_confirmation">Confirm
                                        Password</label>

                                    @if ($errors->has('password_confirmation'))
                                        <div class="text-danger mt-2">{{ $errors->first('password_confirmation') }}
                                        </div>
                                    @endif
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        Up</button>
                                </div>
                            </form>

                            <p class="text-center">Already registered? <a href="{{ route('login') }}">Log In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('logUser/js/jquery.min.js') }}"></script>
    <script src="{{ asset('logUser/js/popper.js') }}"></script>
    <script src="{{ asset('logUser/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('logUser/js/main.js') }}"></script>
</body>

</html>
