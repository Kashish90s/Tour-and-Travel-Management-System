<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>adminlogin</title>
  <link rel="stylesheet" href="{{asset('login/login')}}.css">


</head>
<body>
  <div class="bg-image"></div>
  <div class="container">
    <div class="form">
      <h1>Welcome</h1>
      <form action='admin' method='POST' >
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

    </div>

  </div>

</body>
</html>
