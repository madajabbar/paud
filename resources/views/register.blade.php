@extends('layouts.main')

@section('container')
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-5">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Sign up with</p>
            </div>
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="name-input" name="name" class="form-control form-control-lg"
                placeholder="Enter your name" :value="old('name')" required autofocus />
              <label class="form-label" for="name-input">Name</label>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email-input" name="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" :value="old('email')" required autofocus />
              <label class="form-label" for="email-input">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="password-input" class="form-control form-control-lg"
                placeholder="Enter password" required autocomplete="current-password"  name="password"/>
              <label class="form-label" for="password-input">Password</label>
            </div>
            <div class="form-outline mb-3">
              <input type="password" id="password_confirmation-input" class="form-control form-control-lg"
                placeholder="Enter password" required autocomplete="current-password"  name="password_confirmation"/>
              <label class="form-label" for="password_confirmation-input">Password</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" id="remember_me" type="checkbox" name="remember" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                  class="link-danger">Register</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
