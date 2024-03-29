@extends('layouts.app')
@section('menu-login-active', 'active')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body shadow">
                        @include('admin-lte/flash')

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row mt-1">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <label class="form-check-label" for="show">
                                            <input class="form-check-input" type="checkbox" id="show">
                                            {{ __('Show password') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                        <i class="fas fa-sign-in-alt"></i>
                                    </button>
                                    {{-- @if (Route::has('register'))
                                        <a class="btn btn-warning" href="{{ route('register') }}">
                                            {{ __('Register') }}
                                            <i class="fas fa-address-card"></i>
                                        </a>
                                    @endif --}}
                                    <br />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const password = document.getElementById("password");
        const togglePassword = document.getElementById("show");
        togglePassword.addEventListener("click", toggleClicked);

        function toggleClicked() {
            if (this.checked) {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }
    </script>
@endsection
