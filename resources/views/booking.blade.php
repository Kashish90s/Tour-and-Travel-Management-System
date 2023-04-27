<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>booking</title>

    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
    {{-- <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script> --}}
  </head>
  <body>
    <section class="book" id="book">
      <h1 class="heading">
        <span>e</span>
        <span>x</span>
        <span>p</span>
        <span>l</span>
        <span>o</span>
        <span>r</span>
        <span>e</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="{{asset('images/p-1.jpg')}}" alt="" />
        </div>

        <div class="description">
          <h2>Destination Name</h2>
          <p>Description of the destination goes here...</p>
        </div>

        <form action="{{ route('destination') }}" method="POST" name="add-blog-post-form" >
            @csrf
            <div class="inputBox">
                <h3>Destination</h3>
                <input type="text" name="destination" placeholder="Destination name" />
              </div>
          <div class="inputBox">
            <h3>how many</h3>
            <input type="number" name="guest" placeholder="number of guests" />
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" name="arrival" />
          </div>

          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" name="leaving" />
          </div>

          {{-- <input type="submit" class="btn" value="book now" /> --}}
          <button type="submit" class="btn" style="margin-bottom: 20px">book now</button>
        </form>
      </div>
    </section>
  </body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Booking - Destination Name</title>
    <link rel="stylesheet" href="booking.css" />
  </head>
  <body>
    <div class="destination">
      <img src="images/p-1.jpg" alt="" />
      <div class="description">
        <h3><i class="fas fa-map-marker-alt"></i>Boudhanath Stupa</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae
          dolore rem repellat quam, dolor esse laudantium vel quaerat earum
          labore nobis fuga, fugit unde vero quis? Ab, laudantium perspiciatis..
        </p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <div class="price">$90.00 <span>$120.00</span></div>
      </div>
      <div class="form">
        <h3>Book Now - Destination Name</h3>
        <form>

          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
          <label for="date">Date:</label>
          <input type="date" id="date" name="date" required />
          <label for="num-people">Number of People:</label>
          <input type="number" id="num-people" name="num-people" required />
          <button type="submit">Book Now</button>
        </form>
      </div>
    </div>
  </body>
</html> -->
