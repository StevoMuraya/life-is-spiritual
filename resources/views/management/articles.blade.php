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
            <a href="{{ route('dashboard') }}" class="link">Books</a>
          </li>
          <li class="link-list">
            <a href="{{ route('gallery') }}" class="link">Gallery</a>
          </li>
          <li class="link-list">
            <a href="{{ route('articles') }}" class="link active"
              >Blogs &amp; Articles</a
            >
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
          <h1 class="title">Blogs &amp; Articles Uploads</h1>
          <form action="" method="post" class="form-action" enctype="multipart/form-data">
              @csrf
            <div class="input-holder">
              <input
                type="text"
                placeholder="Article Title"
                name="title"
                class="input-space"
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
                placeholder="Article Author"
                name="author"
                class="input-space"
              />
              @error('author')
                  <div class="error-message">
                      {{ $message; }}
                  </div>
              @enderror
            </div>
            <div class="input-holder">
              <textarea
                type="text"
                placeholder="Article Text"
                name="article_text"
                class="input-space textarea"
              ></textarea>
              @error('article_text')
                  <div class="error-message">
                      {{ $message; }}
                  </div>
              @enderror
            </div>
            <div class="input-holder">
              <label for="article_cover" class="upload_label"
                >Select article cover</label
              >
              <input
                type="file"
                id="article_cover"
                name="article_cover"
                class="file-space"
              />
              @error('article_cover')
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
          @if ($articles->count())
          @foreach ($articles as $article )
          <div class="book-card">
            <div class="book-img">
                <img src="http://localhost:8000/storage/articles/{{ $article->article_cover }}" alt="" />
            </div>
            <div class="book-info">
              <h5 class="article-date">{{ $article->created_at->format('jS F Y') }}</h5>
              <h2 class="article-title">{{ $article->title }}</h2>
              <h3 class="article-author">{{ $article->author }}</h3>
              <p class="book-desc">
                {{ $article->article_text }}
              </p>
            </div>
          </div>
          @endforeach
          @endif
      </div>
    </div>
  </div>
@endsection