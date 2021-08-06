@extends('index')

@section('content')
<div class="login-container">
    <div class="login-overlay"></div>
    <div class="panel-holder">
      <div class="panel-header">
        <h1>LIFE IS SPIRITUAL ADMIN REGISTRATION</h1>
        <div class="back-to">
          <a href="../index.html">Back to website</a>
        </div>
      </div>
      <div class="panel-body">
        <h3>Fill in the spaces to register user to the management page</h3>
        <form action="{{ route('registerAdmin') }}" method="post" class="form-action">
        @csrf
          <div class="login-input-holder">
            <input
              type="text"
              name="name"
              value="{{ old('name') }}"
              placeholder="Full name"
              class="login-input-space @error('name')
              error
          @enderror"
            />
            @error('name')
            <div class="error-message">
                {{ $message; }}
              </div>
            @enderror
          </div>
          <div class="login-input-holder">
            <input
              type="text"
              name="email"
              value="{{ old('email') }}"
              placeholder="Email"
              class="login-input-space @error('email')
              error
          @enderror"
            />
            @error('email')
            <div class="error-message">
                {{ $message; }}
              </div>
            @enderror
          </div>
          <div class="login-input-holder">
            <input
              type="password"
              name="password"
              placeholder="Password"
              class="login-input-space @error('password')
              error
          @enderror"
            />
            @error('password')
            <div class="error-message">
                {{ $message; }}
              </div>
            @enderror
          </div>
          <div class="login-input-holder">
            <input
              type="password"
              name="password_confirmation"
              placeholder="Confirm password"
              class="login-input-space @error('password')
              error
          @enderror"
            />
            @error('password')
            <div class="error-message">
                {{ $message; }}
              </div>
            @enderror
          </div>
          <div class="login-input-holder btns">
            <button class="btn-login">Register</button>
          </div>
        </form>
        <div class="other-links">
          <div class="create-acc">
            <p>
              Already have an accout?
              <a href="login">Click Here</a> login
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection