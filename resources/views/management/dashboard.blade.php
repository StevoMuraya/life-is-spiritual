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
            <a href="{{ route('home-manage') }}" class="link">Home</a>
          </li>
          <li class="link-list">
            <a href="{{ route('dashboard') }}" class="link active">Books</a>
          </li>
          <li class="link-list">
            <a href="{{ route('gallery') }}" class="link">Gallery</a>
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
          <h1 class="title">Book Uploads</h1>
          @if (session('status'))
            <div class="error-display">
              {{ session('status') }}
            </div>
          @endif
          <form action="{{ route('dashboard') }}" method="post" class="form-action" enctype="multipart/form-data">
            @csrf
            <div class="input-holder">
              <input
                type="text"
                placeholder="Book Title"
                name="title"
                value="{{ old('title') }}"
                class="input-space @error('title')
                error
            @enderror"
              />
              @error('title')
              <div class="error-message">
                  {{ $message; }}
                </div>
              @enderror
            </div>
            <div class="input-holder">
              <input
                type="text"
                placeholder="Book Author"
                name="author"
                value="{{ old('author') }}"
                class="input-space @error('author')
                error
            @enderror"
              />
              @error('author')
              <div class="error-message">
                  {{ $message; }}
                </div>
              @enderror
            </div>
            <div class="input-holder">
              <input
                type="Number"
                placeholder="Book Price"
                name="price"
                value="{{ old('price') }}"
                class="input-space @error('price')
                error
            @enderror"
              />
              @error('price')
              <div class="error-message">
                  {{ $message; }}
                </div>
              @enderror
            </div>
            <div class="input-holder">
              <textarea
                type="text"
                placeholder="Book Description"
                name="description"
                value="{{ old('description') }}"
                class="input-space textarea @error('description')
                error
            @enderror"
              ></textarea>
              @error('description')
              <div class="error-message">
                  {{ $message; }}
                </div>
              @enderror
            </div>
            <div class="input-holder">
              <label for="book_cover" class="upload_label"
                >Select book cover</label
              >
              <input
                type="file"
                id="book_cover"
                name="book_cover"
                class="file-space"
              />
            </div>
            <div class="input-holder">
              <button class="btn-upload">Upload</button>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        
      @if ($books->count())
        @foreach ($books as $book)
        <div class="book-card">
          <div class="book-img">
            <img src="http://localhost:8000/storage/books/{{ $book->book_cover }}" alt="" />
          </div>
          <div class="book-info">
            <h2 class="book-title">{{ $book->title }}</h2>
            <h2 class="book-price">Kshs {{ number_format($book->price) }}</h2>
            <h3 class="book-author">{{ $book->author }}</h3>
            <p class="book-desc">
              {{ $book->description }}
            </p>
          </div>
        </div>
        @endforeach
        @endif

      </div>
    </div>
  </div>
@endsection