<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('signup/style.css')}}" />
    <script src="script.js"></script>
  </head>
  <body>

    <form class="signup-form" method="POST" action="adduser">
        @csrf
      <div class="close-icon">&times;</div>
      <h2>Sign Up</h2>
      <label for="username">FirstName</label>
      <input type="text" id="username" name="fname" required />
      <label for="username">LastName</label>
      <input type="text" id="username" name="lname" required />

      <label for="username">Email</label>
      <input type="text" id="username" name="email" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required />

      <label for="password">Confirm Password</label>
      <input type="password" id="password" name="confirmpassword" required />

      <!-- <button type="submit">Sign Up</button> -->
      <button type="submit" style="margin-bottom: 20px">Sign Up</button>

      <div class="login-link">
        Already have an account? <a href="login.html">Login</a>
      </div>
    </form>
  </body>
</html>
