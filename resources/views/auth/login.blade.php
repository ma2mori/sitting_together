@extends('layouts.app')
@section('content')

 <a href="{{ route('register') }}">register</a><br>

 <p>login</p>
 <form method="POST" action="{{ route('login') }}">
  @csrf

  <label for="email">{{ __('E-Mail Address') }}</label>
  <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  @error('email')
   <b>{{ $message }}</b>
  @enderror

  <label for="password">{{ __('Password') }}</label>
  <input id="password" type="password" name="password" required autocomplete="current-password">
  @error('password')
   <b>{{ $message }}</b>
  @enderror

  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  <label for="remember">{{ __('Remember Me') }}</label>

  <button type="submit">{{ __('Login') }}</button>

  <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>

 </form>

@endsection
