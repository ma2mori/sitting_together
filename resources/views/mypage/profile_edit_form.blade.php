@extends('layouts.app')
@section('content')

<br>
<br>

<div class="form-wrap">

 <form method="POST" action="{{ route('mypage.edit-profile') }}" enctype="multipart/form-data">

  @csrf
 
  <img class="user-icon" src="/img/user-shape.png">
  <input type="file" name="avatar" id="avatar" accept="image/png,image/jpeg,image/gif">

  <label for="name">nickname</label>
  <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
 
  @error('name')
   <b>{{ $message }}</b>
  @enderror
 
  <button type="submit">submit</button>
 
 </form>

</div>

@endsection