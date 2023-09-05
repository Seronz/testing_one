@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Register Now</h1>
      <form method="post" action="/register">
        @csrf
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name')
            is-invalid @enderror" id="name" placeholder="name" required value="{{old('name')}}">
            <label for="name">Name</label>
            @error('name')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="text" name="username" class="form-control  @error('username')
            is-invalid @enderror" id="username" placeholder="username" required value="{{old('username')}}">
            <label for="username">User Name</label>
            @error('username')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control  @error('email')
          is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{old('email')}}">
          <label for="floatingInput">Email address</label>
          @error('email')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password')
          is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
          @error('password')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">register</button>
      </form>
      <small>Have an account? <a href="/login" class="text-decoration-none">Login</a></small>
    </main>
  </div>
</div>




@endsection