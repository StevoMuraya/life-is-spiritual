@extends('index')

@section('content')
<div class="login-container">
    <div class="login-overlay"></div>
    <div class="panel-holder">
      <div class="panel-header">
        <h1>LIFE IS SPIRITUAL ADMIN LOGIN</h1>
        <div class="back-to">
          <a href="../index.html">Back to website</a>
        </div>
      </div>
      <div class="panel-body">
        <h3>Fill in the spaces to login to the management page</h3>
        @if (session('status'))
          <div class="error-display">
            {{ session('status') }}
          </div>
        @endif
        <form action="{{ route('login') }}" method="POST" class="form-action">
          @csrf
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
          <div class="login-input-holder remember">
            <input
              type="checkbox"
              id="remember_me"
              name="remember"
              placeholder="Password"
              class="login-input-check"
            />
            <label for="remember_me" class="input-labels">Remember me</label>
          </div>
          <div class="login-input-holder btns">
            <button class="btn-login">Login</button>
          </div>
        </form>

        <div class="other-links">
          <div class="create-acc">
            <p>
              Don't have an accout?
              <a href="registration">Click Here</a> to create one
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection