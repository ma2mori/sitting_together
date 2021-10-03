@extends('layouts.app')
@section('content')

 <p>{{ __('Reset Password') }}</p>

 <div class="form-wrap">

  @if (session('status'))
   <b>{{ session('status') }}</b>
  @endif

  <form method="POST" action="{{ route('password.email') }}">
   @csrf

   <label for="email">{{ __('E-Mail Address') }}</label>
   <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
   @error('email')
   <b>{{ $message }}</b>
   @enderror

   <button type="submit">{{ __('Send Password Reset Link') }}</button>

  </form>

 </div>

@endsection
