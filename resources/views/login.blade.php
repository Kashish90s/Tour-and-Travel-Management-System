<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="{{asset('login/login')}}.css">
</head>
<body>
  <div class="bg-image"></div>
  <div class="container">
    <div class="form">
      <h1>Welcome</h1>
      <form action='user' method='POST' >
        @csrf
        <input type="text" id="username" name="email" placeholder="Email">

        <input type="password" id="password" name="password" placeholder="Password">
        @if (session()->has('error'))
        <div class="text-red">{{session('error')}}</div>

      @endif
        <!-- check box -->

        <div class="btn">
            <button type="submit" class="button-8">Login</button>
        </div>


        </form>

        <div class="inside">
            <label>
                <input type="checkbox" name="remember-me"> Remember me
              </label>

              <a href="#" id="forgotPassword">Forgot password?</a><br>
        </div>

        <div class="signup">
          Don't have an account?<a href="{{route('signup')}}">create account</a><br>
        </div>
    </div>

  </div>
  <script src="{{asset('login/login.js')}}"></script>
</body>
</html>
