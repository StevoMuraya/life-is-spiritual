@extends('index')

@section('content')
<div class="site-container">
    <div class="hero-landing">
      <div class="image-slider" id="image_slider">
        <img src="./images/give1-new.jpg" alt="" class="image-in-slider" />
        <img src="./images/give2-new.jpg" alt="" class="image-in-slider" />
      </div>
      <div class="slider-indicator" id="dot_incicators">
      </div>
      <div class="curosel-buttons">
        <div class="indicator" id="prev_indicator" onclick="plusSlides(-1)">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div class="indicator" onclick="plusSlides(1)">
          <i class="fas fa-chevron-right" id="next_indicator"></i>
        </div>
      </div>
      <nav class="navbar">
        <div class="top-nav">
          <div class="top-left">
            <a href="" class="contact">+254-797-923-201</a>
            <a href="" class="contact">info@lifespiritual.org</a>
          </div>
          <div class="top-right">
            <a href="./management/login.html" class="contact">Login</a>
            <a href="./management/registration.html" class="contact"
              >Signup</a
            >
          </div>
        </div>
        <div class="mid-navbar" id="navbar">
          <div class="logo-holder">
            <img src="./images/logo.png" alt="Logo" class="logo" />
          </div>
          <div class="nav-options" id="nav_options">
            <ul class="nav-links">
              <li class="nav-list">
                <a href="{{ route('home') }}" class="nav-link active">Home</a>
              </li>
              <li class="nav-list">
                <a href="{{ route('about') }}" class="nav-link">About Us</a>
              </li>
              <li class="nav-list">
                <a href="{{ route('book') }}" class="nav-link">Books</a>
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
      <section class="landing-page">
        <div class="sliding-title-text">
          <h1 class="landing-title active">
            We are dedicated to helping<br />the poor in Uganda.
          </h1>
          <h1 class="landing-title">Help us help those<br />who need it.</h1>
        </div>
        
        <div class="sliding-land-text">
          <h3 class="landing-text">
            Partner with us by donating through Paypal Address:<br />info@lifespiritual.org
            or click the button below.
          </h3>
          <h3 class="landing-text">
            Partner with us by donating through Paypal Address:<br />info@lifespiritual.org
            or click the button below.
          </h3>
        </div>
        <a href="" class="btn donate">Donate</a>
      </section>
    </div>
    <section class="content-holder">
      <div class="site-info">
        <h2 class="title">Life is Spiritual Ministries</h2>
        <p class="short-desc">
          Life Is Spiritual Ministries (LIS) is a non denominational christian
          discipleship ministry with a goal to see the gospel of the Kingdom
          of God spread to the entire world.
        </p>
        <div class="row">
          <div class="data-col">
            <div class="img-holder">
              <img src="./images/logo_new.png" alt="" />
            </div>
          </div>
          <div class="data-col">
            <p class="other-desc">
              This ministry was founded by Apostle Timsimon "Bamboo" Kimani
              and Erica Kimani. Tim is married to Erica Kimani and is a family
              man and a man of God. We believe that there are many deep and
              wonderful truths hidden in the bible which God's children need
              to know. Unfortunately, many of these truths are not revealed by
              the mainstream christian church through televangelists because
              of the level of compromise and infiltration of the enemy into
              positions of media leadership.
            </p>
          </div>
        </div>
      </div>
      <div class="books-section">
        <h2 class="title2">E-BOOKS</h2>
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
        <a href="books.html" class="view-more-books">View More</a>
      </div>
      <div class="blogs-section">
        <h2 class="title">Blogs &amp; Articles</h2>
        <div class="blog-holder">
          <div class="row special">
            <div class="data-col">
              @if ($main_article->count())
                @foreach ($main_article as $main)
                <div class="main-blog">
                  <div class="main-blog-img">
                    <img src="http://localhost:8000/storage/articles/{{ $main->article_cover }}" alt="" />
                  </div>
                  <div class="main-blog-info">
                    <p class="blog-date">{{ $main->created_at->format('jS F Y') }}</p>
                    <a href=""
                      ><h3 class="blog-title title">
                        {{ $main->title }}
                      </h3></a
                    >
                    {{ Str::limit($main->article_text,500) }}
                    <a href="" class="read-more">Read Article</a>
                  </div>
                </div>                  
                @endforeach
                
              @endif
            </div>
            <div class="data-col">
              @if ($articles->count())
              @foreach ($articles as $article)
              <div class="other-blog">
                <div class="other-blog-img">
                  <img src="http://localhost:8000/storage/articles/{{ $article->article_cover }}" alt="" />
                </div>
                <div class="other-blog-info">
                  <p class="blog-date">{{ $article->created_at->format('jS F Y') }}</p>
                  <a href=""
                    ><h3 class="other-blog-title title">
                      {{ $article->title }}
                    </h3></a
                  >
                  <p class="blog-desc" style="padding: 0 1rem">
                    {{ Str::limit($article->article_text,100) }}
                  </p>
                  <div class="read-div">
                    <a href="" class="read-more">Read Article</a>
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="testimonoals-section"></div>
    </section>
    <section class="video-section">
      <div class="row">
        <div class="data-col">
          <h2 class="videos-title">Youtube Videos</h2>
          <p class="video-text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Accusamus quaerat dignissimos dolores neque ut pariatur eius
            perspiciatis, modi quam quis non fugit, eveniet tenetur nam
            numquam est illo distinctio nesciunt.
          </p>
          <p class="video-text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Accusamus quaerat dignissimos dolores neque ut pariatur eius
            perspiciatis, modi quam quis non fugit, eveniet tenetur nam
            numquam est illo distinctio nesciunt.
          </p>
        </div>
        <div class="data-col">
          <div class="videos-holder">
            <div class="video-card">
              <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/Rq8NNOqTuaU"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-card">
              <iframe
                width="1060"
                height="596"
                src="https://www.youtube.com/embed/cPAYOBFGZh8"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-card">
              <iframe
                width="1060"
                height="596"
                src="https://www.youtube.com/embed/mdQnnhktunk"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-card">
              <iframe
                width="1060"
                height="596"
                src="https://www.youtube.com/embed/fsQWZ3uFslE"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-card">
              <iframe
                width="1060"
                height="596"
                src="https://www.youtube.com/embed/UAG7ytoR9ZQ"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-card">
              <iframe
                width="1060"
                height="596"
                src="https://www.youtube.com/embed/ekfcxxHLz-E"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-card">
              <iframe
                width="1060"
                height="596"
                src="https://www.youtube.com/embed/W2UfrQNzHlI"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-card">
              <iframe
                width="1060"
                height="596"
                src="https://www.youtube.com/embed/1_9DuT2tv5g"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-card">
              <iframe
                width="1060"
                height="596"
                src="https://www.youtube.com/embed/zCkgkjL65ok"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="testimonials">
      <h2 class="testimonials-title">Testimonials</h2>
      <div class="testimonials-holder">
        @if ($testimonials->count())
          @foreach ($testimonials as $testimonial)
          <div class="testimonial-card">
            <div class="testimony-message">
              <div class="quotes">
                <img src="./images/opening.png" alt="" />
              </div>
              <p class="testimony">
                {{ $testimonial->created_at->format('jS F Y') }} <br />
                {{$testimonial->testimony}}
              </p>
              <div class="quotes left">
                <img src="./images/closing.png" alt="" />
              </div>
            </div>
            <div class="person-name">--{{ $testimonial->name }}--</div>
          </div>
          @endforeach
        @endif
      </div>
      <div class="testimony-indicators" id="testimony_indicators">
        <!-- <div class="test-dot active"></div>
        <div class="test-dot"></div>
        <div class="test-dot"></div> -->
      </div>
    </section>
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
<script src="./js/slider.js"></script>
<script src="./js/testimony-slider.js"></script>
@endsection