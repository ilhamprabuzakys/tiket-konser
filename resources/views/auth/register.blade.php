@extends('layouts.auth.auth')
@section('description')
   <div class="description mb-3">
      <span class="text-muted">Enter your credentials and start using our service to manage your data.</span>
   </div>
@endsection
@section('container')
   <form action="{{ route('register') }}" method="POST">
      @csrf
      {{-- Username/Email --}}
      <div class="form-floating">
         <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" required autofocus value="{{ old('name') }}">
         @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
         <label for="name">Nama lengkap</label>
      </div>

      <div class="form-floating">
         <input id="login" type="text" class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="email"
            value="{{ old('username') ?: old('email') }}"
            required autofocus>

         @if ($errors->has('username') || $errors->has('email'))
            <span class="invalid-feedback">
               <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
            </span>
         @endif
         <label for="username">Email</label>
      </div>

      <div class="form-floating">
         <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autofocus value="{{ old('password') }}">
         @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
         <label for="password">Password</label>
      </div>

      <div class="form-floating">
         <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Password"
            required autofocus value="{{ old('password_confirmation') }}">
         @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
         <label for="password_confirmation">Password confirmation</label>
      </div>


      <div class="row mb-3">
         <div class="col-lg-12 text-center d-flex justify-content-center">
            <span class="text-secondary">Sudah punya akun? Login
               <a href="{{ route('login') }}" class="text-decoration-none">
                  disini!</a></span>
         </div>
      </div>

      <button class="w-100 btn btn-lg btn-primary btn-auth" type="submit">Register</button>
   </form>
@endsection
