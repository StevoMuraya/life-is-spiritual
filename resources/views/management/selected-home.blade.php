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
      <img src="{{ asset('images/logo.png') }}" alt="Logo" />
    </div>
    <div class="links-tab">
      <ul class="links">
        <li class="link-list">
          <a href="{{ route('home-manage') }}" class="link active">Home</a>
        </li>
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
          <a href="{{ route('testimonials') }}" class="link">Testimonials</a>
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
    <div class="home-page-slider">
      <h1 class="title">Home Page Management</h1>
      <div class="row">
        @if (session('status'))
          <div class="error-display">
            {{ session('status') }}
          </div>
        @endif
        <div class="data-col">
            <form action="{{ route('home.view',$slider->id) }}" method="POST" class="form-action"  enctype="multipart/form-data">
                @csrf
                <div class="input-holder">
                    <label for="slider_image" class="upload_label"
                      >Select Page slider</label
                    >
                  <input
                    type="file"
                    id="slider_image"
                    name="slider_image"
                    class="file-space"
                  />
                  @error('slider_image')
                  <div class="error-message">
                      {{ $message; }}
                    </div>
                  @enderror
                </div>
                <div class="input-holder">
                  <input
                    type="text"
                    placeholder="Title"
                    name="title"
                    value="{{ $slider->title}}"
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
                    placeholder="Sub-title"
                    name="sub_title"
                    value="{{ $slider->sub_title}}"
                    value="{{ old('sub_title') }}"
                    class="input-space @error('sub_title')
                    error
                @enderror"
                  />
                  @error('sub_title')
                  <div class="error-message">
                      {{ $message; }}
                    </div>
                  @enderror
                </div>
    
              <div class="input-holder">
                <button class="btn-upload">Update</button>
              </div>
            </form>
        </div>
        
        <div class="data-col">
            <div class="cover-holder">
              <img src="http://localhost:8000/storage/sliders/{{ $slider->slider_image }}" alt="" class="slider-img" />
            </div>
          </div>
      </div>
      <div class="row">
      </div>
    </div>
  </div>
</div>
@endsection