@extends('index')

@section('content')
<div class="site-container">
    <div class="hero-landing smaller">
      <nav class="navbar">
        <div class="top-nav">
          <div class="top-left">
            <a href="" class="contact">+254-797-923-201</a>
            <a href="" class="contact">info@lifespiritual.org</a>
          </div>
          <div class="top-right">
            <a href="" class="contact">Login</a>
            <a href="" class="contact">Signup</a>
          </div>
        </div>
        <div class="mid-navbar" id="navbar">
          <div class="logo-holder">
            <img src="./images/logo.png" alt="Logo" class="logo" />
          </div>
          <div class="nav-options" id="nav_options">
            <ul class="nav-links">
              <li class="nav-list">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
              </li>
              <li class="nav-list">
                <a href="{{ route('about') }}" class="nav-link">About Us</a>
              </li>
              <li class="nav-list">
                <a href="{{ route('book') }}" class="nav-link active">Books</a>
              </li>
              <li class="nav-list">
                <a href="{{ route('gallery-images') }}" class="nav-link">Gallery</a>
              </li>
              <li class="nav-list">
                <a href="books.html" class="nav-link">Videos</a>
              </li>
              <li class="nav-list">
                <a href="{{ route('blogs') }}" class="nav-link">Blog</a>
              </li>
              <li class="nav-list">
                <a href="contact.html" class="nav-link">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="hamburger" id="hamburger">
            <div class="hamburger-bar top" id="burger_top"></div>
            <div class="hamburger-bar middle" id="burger_middle"></div>
            <div class="hamburger-bar bottom" id="burger_bottom"></div>
          </div>
        </div>
      </nav>

      <section class="landing-page others">
        <div class="page-welcome-text">
          <h1 class="welcome-text">Books</h1>
          <h4 class="welcome-desc">
            Get some publications to enrich and enlighten your life...
          </h4>
        </div>
      </section>
    </div>
    
    <div class="books-section2">
      <h2 class="title2">Our E-Book Publications</h2>
      <div class="book-containers">
        @if ($books->count())
        @foreach ($books as $book)
        <div class="book-card_new">
          <div class="book-image-holder-new">
            <img
              src="http://localhost:8000/storage/books/{{ $book->book_cover }}"
              class="book-card-img-new"
              alt=""
            />
          </div>
          <div class="book-text-new">
            <div class="text-title-holder">
              <h4 class="book-new-title">
                {{ $book->title }}
              </h4>
            </div>
            <div class="other-book-text-new">
              <p class="book-new-desc">
                {{ Str::limit($book->description,160) }}
              </p>
              <a href="{{ route('book.view',$book->id) }}" class="get-book-link"
                >Get book ></a
              >
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>

  </div>
  <section class="footer">
    <div class="row">
      <div class="data-col">
        <h2 class="footer-title">LIFE IS SPIRITUAL MINISTRIES</h2>
        <p class="footer-text">
          Life Is Spiritual Ministries (LIS) is a non
          denominationalchristian discipleship ministry with a goal to see
          the gospel of the Kingdom of God spread to the entire world. This
          ministry was founded by Apostle Timsimon "Bamboo" Kimani and Erica
          Kimani.
        </p>
      </div>
      <div class="data-col">
        <h2 class="footer-title">Reach us on</h2>
        <div class="contact-links">
          <a href="" class="fab fa-facebook-f icon"></a>
          <a href="" class="fab fa-twitter icon"></a>
          <a href="" class="fab fa-instagram icon"></a>
        </div>
        <div class="newsletter-info">
          <h2 class="footer-title">Subscribe to out newsletter</h2>
          <input
            type="text"
            name=""
            id=""
            placeholder="Email Address"
            class="newsletter"
          />
          <button class="btn">Subscribe</button>
        </div>
      </div>
      <div class="data-col">
        <h2 class="footer-title">Quick Links</h2>
        <a href="" class="footer-link">Watch Videos</a>
        <a href="" class="footer-link">Read Articles</a>
        <a href="" class="footer-link">Contact us</a>
      </div>
    </div>
  </section>
  </div>
  <script src="./js/nav.js"></script>
@endsection