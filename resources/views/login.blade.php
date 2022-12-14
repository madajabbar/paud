@extends('layouts.main')

@section('container')
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" :value="old('email')" required autofocus />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" required autocomplete="current-password"  name="password"/>
              <label class="form-label" for="form3Example4">Password</label>
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
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{route('register')}}"
                  class="link-danger">Register</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
