@extends('layouts.auth.auth')
@section('description')
   <div class="description mb-3">
      <span class="text-muted">Enter your credentials and start using our service to manage your data.</span>
   </div>
@endsection
@section('container')
   <form action="/login" method="POST">
      @csrf
      {{-- Username/Email --}}
      <div class="form-floating">
         <input id="email" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
            value="{{ old('email') }}"
            required autofocus>

         @if ($errors->has('email'))
            <span class="invalid-feedback">
               <strong>{{ $errors->first('email') }}</strong>
            </span>
         @endif
         <label for="email">Email</label>

      </div>



      <div class="form-floating">
         <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autofocus value="{{ old('password') }}">
         @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
         <label for="password">Password</label>
      </div>


      <div class="row mb-3">
         <div class="col-lg-12 text-center d-flex justify-content-center">
            <span class="text-secondary">Belum punya akun? Register
               <a href="{{ route('register') }}" class="text-decoration-none">
                  disini!</a></span>
         </div>
      </div>

      <button class="w-100 btn btn-lg btn-primary btn-auth" type="submit">Sign in</button>
   </form>
@endsection
