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
              <a href="{{ route('about') }}" class="nav-link active">About Us</a>
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
              <a href="{{ route('about') }}" class="nav-link">Contact Us</a>
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
        <h1 class="welcome-text">About Us</h1>
        <h4 class="welcome-desc">Learn what we do...</h4>
      </div>
    </section>
  </div>

  <section class="content-holder" style="text-align: justify">
    <div class="about-us-container">
      <h1 class="page-titles">Life Is Spiritual Publishing Ministry</h1>
      <div class="row">
        <div class="data-col">
          <div class="logo-holder-about">
            <img src="./images/logo_new.png" alt="" class="logo-about" />
          </div>
        </div>
        <div class="data-col">
          <p>
            Life Is Spiritual Publishing Company LTD (LIS) is a publishing
            company working with a non-denominational christian discipleship
            youth ministry under Faith Christian Fellowship Kenya
            www.fcfkenya.com. FCF-Kenya has a goal to see the gospel of the
            Kingdom of God spread to the entire world. This ministry was
            founded by Apostle Timsimon "Bamboo" Kimani and prophetess Erica
            Kimani.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="data-col">
          <p>
            Tim is married to Erica Mukisa Kimani and is a family man and a
            man of God. We believe that there are many deep and wonderful
            truths hidden in the bible which God's children need to know.
            Unfortunately, many of these truths are not revealed by the
            mainstream christian church through televangelists because of
            the level of compromise and infiltration of the enemy into
            positions of media leadership.
          </p>
        </div>
        <div class="data-col">
          <div class="img-holder">
            <img src="./images/wedding1.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="data-col">
          <p>
            Therefore the enemy is able to conceal many of his deceptions to
            the world because his agents are some of the popular ministers
            with access to the world through the media. Now there are many
            men of God who have not been compromised however, these men seem
            to have no voice or have been silenced before they could reach
            many souls in the world with the truth.
          </p>
        </div>
      </div>
      <h1 class="page-titles">Photo Gallery</h1>
      <div class="about-galery">
          @if ($images->count())
            @foreach ($images as $image)
            <div class="image-holder-about">
              <img
                src="http://localhost:8000/storage/gallery/{{ $image->image_name }}"
                alt=""
                class="gallery-img"
              />
            </div>
            @endforeach
            <a href="{{ route('gallery-images') }}" 
            style="width: 100%;text-align: center;" class="link">View More</a>
          @endif
      </div>
    </div>

    <section class="the-call">
      <h1 class="our-call">OUR CALL</h1>
      <div class="row">
        <div class="data-col">
          <p>
            The body of Christ needs their own platforms where the evil arms
            of censorship and/or infiltration cannot reach. Satan's kingdom
            is a kingdom of darkness. Darkness is ignorance, therefore
            Satan's kingdom thrives on the ignorance of humanity. The more a
            born again human being declares the light of God's word, the
            less space the devil has to move around. Matthew 5:14 "Ye are
            the light of the world, a city that is set on a hill cannot be
            hid." These were Yeshuah's (Jesus) words to his disciples. A
            light must reveal truth. The kind of truth that makes one
            dangerous to the kingdom of darkness is the truth which reveals
            and exposes their secrets, their plans and their purposes.
          </p>
        </div>
      </div>
    </section>

    <section class="ending-call">
      <div class="row">
        <div class="data-col">
          <p>
            Light is what will destroy Satan's kingdom. Yeshuah is that
            light. The light of God's word and the revealing of Satan's
            operations is a key which the body of Christ must use to our
            advantage. If this generation knew what they were up against,
            they would be more loyal to God than they were to the devil.
            This ministry exists to reveal truth, dangerous truth. The kind
            of truth which Satan and his minions do NOT want God's children
            to know.
          </p>
        </div>
        <div class="data-col">
          <p>
            This ministry will continue to release various publications such
            as the "Erica" series with a view to feed God's children with as
            much information as possible so as to equip them for the days
            ahead. We are in the last of the last days. We are the
            circumcision, who worship God in spirit, we rejoice in Christ
            Jesus and have no confidence in the flesh (Phil 3:3). May God
            bless your journey, and thank you for stopping by and remember,
            Life is Spiritual.<br />
            <br />
            God bless you.
          </p>
        </div>
      </div>
    </section>
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
@endsection