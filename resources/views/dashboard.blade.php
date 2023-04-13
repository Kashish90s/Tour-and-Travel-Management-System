@routes
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project-Ghumfhir</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />

    <!-- custom css file link -->

    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
  </head>
  <body>
    <!-- header section starts -->

    <header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="#" class="logo"><span>Ghum</span>Fhir</a>

      <nav class="navbar">
        <a href="#home">home</a>
        <!-- <a href="booking.html">book</a> -->
        <a href="#packages">packages</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>

        @if (!session()->has('userType'))
        <i class="fas fa-user" id="login-btn"></i>
        @endif

        @if (session()->has('userType'))
        <div class="dropdown">
          <i class="fas fa-cog" id="setting-btn"></i>
          <div id="setting-menu" class="dropdown-menu">
            <!-- <a href="#">Profile </a> -->

            @if(session('userType')=='user')
            <a href="/profile">Profile</a>
            @endif

            <a href="#">Notification </a>

            @if(session('userType')=='admin')
            <a href="#">Admin Dashboard </a>
            @endif


            <a onclick="showLogoutConfirmation()">Logout</a>
          </div>
        </div>
        @endif

        <div id="logout-confirmation" class="dialog-box">
          <p>Are you sure you want to logout?</p>

          <div class="button-container">
            <a class="btn-confirm" href="/logout">Yes</a>
            <button class="btn-cancel" onclick="hideLogoutConfirmation()">
              Cancel
            </button>
          </div>
        </div>
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here..." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>

    </header>
    <!-- header section ends -->

    <!-- login form container -->

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <form action="user" method="POST"  class="main_form">
        @csrf
        <h3>login</h3>

        <input type="email" name="email" class="box" placeholder="enter your email" />

        <input type="password" name="password" class="box" placeholder="enter your password" />
        <span style="color: rgb(232, 38, 38" class="error-text"> </span>
        <input type="submit" value="login now" class="btn" />

        {{-- <input type="checkbox" id="remember" /> --}}

        {{-- <label for="remember">remember me</label> --}}

        <p>forgot password? <a href="{{route('forgot')}}">click here</a></p>

        <p>don't have an account? <a href="{{route('signup')}}">Register now</a></p>
      </form>
    </div>

    <!-- login form container ends here -->

    <!-- home section starts here -->

    <section class="home" id="home">
      <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>discover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
      </div>

      <div class="controls">
        <span class="vid-btn active" data-src="{{asset('images/vid-1.mp4')}}"> </span>
        <span class="vid-btn" data-src="{{asset('images/vid-2.mp4')}}"> </span>
        <span class="vid-btn" data-src="{{asset('images/vid-3.mp4')}}"> </span>
        <span class="vid-btn" data-src="{{asset('images/vid-4.mp4')}}"> </span>
        <span class="vid-btn" data-src="{{asset('images/vid-5.mp4')}}"> </span>
      </div>

      <div class="video-container">
        <video
          src="{{asset('images/vid-1.mp4')}}"
          id="video-slider"
          loop
          autoplay
          muted
        ></video>
      </div>
    </section>

    <!-- home section ends here -->

    <!-- booking section starts -->

    <!-- <section class="book" id="book">
      <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/book-img.jpg" alt="" />
        </div>

        <form action="">
          <div class="inputBox">
            <h3>where to</h3>
            <input type="text" placeholder="place name" />
          </div>

          <div class="inputBox">
            <h3>how many</h3>
            <input type="number" placeholder="number of guests" />
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" />
          </div>

          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" />
          </div>

          <input type="submit" class="btn" value="book now" />
        </form>
      </div>
    </section> -->

    <!-- booking section ends -->

    <!-- packages section starts -->

    <section class="packages" id="packages">
      <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="{{asset('images/p-1.jpg')}}" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a href="{{route('booking')}}" class="btn">explore more</a>
          </div>
        </div>

        <div class="box">
          <img src="{{asset('images/p-2.jpg')}}" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">price<span>ranges:</span></div>
            <a href="booking.html" class="btn">explore more</a>
          </div>
        </div>

        <div class="box">
          <img src="{{asset('images/p-3.jpg')}}" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">price <span>ranges</span></div>
            <a href="booking.html" class="btn">explore more</a>
          </div>
        </div>

        <div class="box">
          <img src="{{asset('images/p-4.jpg')}}" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">price<span>ranges:</span></div>
            <a href="booking.html" class="btn">explore more</a>
          </div>
        </div>

        <div class="box">
          <img src="{{asset('images/p-4.jpg')}}" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">price <span>ranges:</span></div>
            <a href="booking.html" class="btn">explore more</a>
          </div>
        </div>

        <div class="box">
          <img src="{{asset('images/p-4.jpg')}}" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">price <span>ranges:</span></div>
            <a href="booking.html" class="btn">explore more</a>
          </div>
        </div>

        <div class="box">
          <img src="{{asset('images/p-4.jpg')}}" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">price <span>ranges:</span></div>
            <a href="booking.html" class="btn">explore more</a>
          </div>
        </div>

        <div class="box">
          <img src="{{asset('images/p-4.jpg')}}" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">price<span>Ranges:</span></div>
            <a href="booking.html" class="btn">explore more</a>
          </div>
        </div>

        <div class="box">
          <img src="{{asset('images/p-4.jpg')}}" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">price <span>ranges:</span></div>
            <a href="booking.html" class="btn">explore more</a>
          </div>
        </div>
      </div>
    </section>

    <!-- packages section ends -->

    <!-- custom js link file -->
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"> </script>
    <script src="{{asset('js/main.js')}}"> </script>
  </body>
</html>