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
            <a href="{{ route('home-manage') }}" class="link">Home</a>
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
            <a href="{{ route('messages') }}" class="link active">Contact Messages</a>
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
      <h1
        class="title"
        style="width: 100%; text-align: center; padding-top: 1rem"
      >
        Site Messages
      </h1>
      <div class="row">
        <div class="message-card">
          <h4 class="sender-name">Stephen Muraya</h4>
          <h4 class="sender-email">gathaiya@gmail.com</h4>
          <h4 class="sender-phone">0797923201</h4>
          <p class="sender-message">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
            molestias veniam quasi minus reprehenderit, eius repellat soluta
            incidunt. Provident nesciunt repudiandae nisi voluptates beatae
            deleniti porro quaerat numquam, dicta maiores!
          </p>
          <a href="" class="reply-message">Reply Message</a>
        </div>
        <div class="message-card">
          <h4 class="sender-name">Stephen Muraya</h4>
          <h4 class="sender-email">gathaiya@gmail.com</h4>
          <h4 class="sender-phone">0797923201</h4>
          <p class="sender-message">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
            molestias veniam quasi minus reprehenderit, eius repellat soluta
            incidunt. Provident nesciunt repudiandae nisi voluptates beatae
            deleniti porro quaerat numquam, dicta maiores!
          </p>
          <a href="" class="reply-message">Reply Message</a>
        </div>
      </div>
    </div>
  </div>
@endsection