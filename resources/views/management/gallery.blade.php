@extends('management.index')

@section('dash-content')
<div class="dash-container">
    <div class="hamburger" id="hamburger">
      <div class="bar" id="bar_1"></div>
      <div class="bar" id="bar_2"></div>
      <div class="bar" id="bar_3"></div>
    </div>
    <div class="side-bar" id="side_bar">
      <div class="logo-holder">
        <img src="../images/logo.png" alt="Logo" />
      </div>
      <div class="links-tab">
        <ul class="links">
          <li class="link-list">
            <a href="{{ route('dashboard') }}" class="link">Books</a>
          </li>
          <li class="link-list">
            <a href="{{ route('gallery') }}" class="link active">Gallery</a>
          </li>
          <li class="link-list">
            <a href="{{ route('articles') }}" class="link">Blogs &amp; Articles</a>
          </li>
          <li class="link-list">
            <a href="{{ route('testimonials') }}" class="link">Testimonials</a>
          </li>
          <li class="link-list">
            <a href="{{ route('messages') }}" class="link">Contact Messages</a>
          </li>
        </ul>

        <ul class="links">
          <li class="link-list">
            <form action="{{ route('logout') }}" method="post" class="form-action">
                @csrf
                <button class="link logout" 
                  style="display: flex;justify-content: flex-start;padding-left: 1rem"
                  >
                  Logout
                </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-content">
      <div class="row">
        <div class="upload-section">
          <h1 class="title">Images Uploads</h1>
          <form action="" method="post" class="form-action" enctype="multipart/form-data">
              @csrf
                <div class="input-holder">
                <label for="book_cover" class="upload_label"
                    >Select book cover</label
                >
                <input
                    type="file"
                    id="book_cover"
                    name="image"
                    class="file-space"
                />
                @error('image')
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
          @if ($gallery->count())
          @foreach ($gallery as $image)
          <div class="image-card">
            <div class="img-card-holder">
                <img src="http://localhost:8000/storage/gallery/{{ $image->image_name }}" alt="" />
            </div>
          </div>
          @endforeach
          @endif
      </div>
    </div>
  </div>
@endsection