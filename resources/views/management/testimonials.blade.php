@extends('management.index')

@section('dash-content')
<div class="dash-container">
    <div class="side-bar">
      <div class="logo-holder">
        <img src="../images/logo.png" alt="Logo" />
      </div>
      <div class="links-tab">
        <ul class="links">
          <li class="link-list">
            <a href="{{ route('dashboard') }}" class="link">Books</a>
          </li>
          <li class="link-list">
            <a href="{{ route('gallery') }}" class="link">Gallery</a>
          </li>
          <li class="link-list">
            <a href="{{ route('articles') }}" class="link">Blogs &amp; Articles</a>
          </li>
          <li class="link-list">
            <a href="{{ route('testimonials') }}" class="link active">Testimonials</a>
          </li>
          <li class="link-list">
            <a href="{{ route('messages') }}" class="link">Contact Messages</a>
          </li>
        </ul>

        <ul class="links">
          <li class="link-list">
            <a href="" class="link logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-content">
        <div class="row">
          <div class="upload-section">
            <h1 class="title">Testimonials Uploads</h1>
            <form action="{{ route('testimonials') }}" method="post" class="form-action">
                @csrf
              <div class="input-holder">
                <input
                  type="text"
                  placeholder="Full name"
                  name="name"
                  class="input-space @error('name')
                  error
              @enderror"
                />
                @error('name')
                <div class="error-message">
                    {{ $message; }}
                  </div>
                @enderror
              </div>
              <div class="input-holder">
                <textarea
                  type="text"
                  placeholder="Testimonial text"
                  name="testimony"
                  class="input-space textarea @error('testimony')
                  error
              @enderror"
                ></textarea>
                @error('testimony')
                <div class="error-message">
                    {{ $message; }}
                  </div>
                @enderror
              </div>
              <div class="input-holder">
                <button class="btn-upload">Upload</button>
              </div>
            </form>
          </div>
        </div>
      <div class="row">
          @if ($testimonies->count())
          @foreach ($testimonies as $testimony)
          <div class="testimonial-card">
            <div class="testimonial-info">
              <h4 class="testimony-date">{{ $testimony->created_at->format('jS F Y') }}</h4>
              <h4 class="person-name">{{ $testimony->name }}</h4>
              <p class="book-desc">
                {{ $testimony->testimony }}
              </p>
            </div>
          </div>
          @endforeach
          @endif
      </div>
    </div>
  </div>
@endsection