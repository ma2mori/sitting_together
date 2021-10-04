@extends('layouts.app')
@section('content')

 <p>{{ __('Reset Password') }}</p><br>

 <div class="form-wrap">
  <form method="POST" action="{{ route('password.update') }}">
   @csrf

   <input type="hidden" name="token" value="{{ $token }}">

   <label for="email">{{ __('E-Mail Address') }}</label>
   <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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

   <button type="submit">{{ __('Reset Password') }}</button>

  </form>

 </div>

 @endsection
