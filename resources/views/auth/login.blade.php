@extends('layouts.auth')

@section('content')
    <div class="layui-container">
    <div class="login__wrapper">
        <form class="layui-form form-signin" method="POST" action="{{ route('login') }}" lay-filter="example">
            @csrf
            <div class="layui-form-item">
                <label class="layui-form-label">{{ __('E-Mail Address') }}</label>
                <div class="layui-input-block">
                    <input id="email" type="email"
                           class="layui-input @error('email') layui-form-danger @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">{{ __('Password') }}</label>
                <div class="layui-input-block">
                    <input id="password" type="password"
                           class="layui-input @error('password') layui-form-danger @enderror" name="password"
                           required autocomplete="current-password">
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection
