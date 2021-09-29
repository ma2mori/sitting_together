@extends('layouts.app')
@section('content')

 <a href="{{ route('login') }}">login</a><br>

 <p>register</p>
 <form method="POST" action="{{ route('register') }}">
  @csrf

  <label for="name">{{ __('Name') }}</label>
  <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  @error('name')
   <b>{{ $message }}</b>
  @enderror


  <label for="email">{{ __('E-Mail Address') }}</label>
  <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  @error('email')
   <b>{{ $message }}</b>
  @enderror

  <label for="password">{{ __('Password') }}</label>
  <input id="password" type="password" name="password" required autocomplete="new-password">
  @error('password')
   <b>{{ $message }}</b>
  @enderror

  <label for="password-confirm">{{ __('Confirm Password') }}</label>
  <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  <label for="remember">{{ __('Remember Me') }}</label>

  <button type="submit">{{ __('Register') }}</button>

 </form>

@endsection
