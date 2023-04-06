<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification Form</title>
    <link rel="stylesheet" href="{{asset('css/otp.css')}}">
</head>
<body>
    <div id="container">
        <h2>Sign Up</h2>
        <p>It's quick and easy.</p>
        <div id="line"></div>
        <form>
            <input type="number" name="otp" placeholder="Verification Code" required><br>
            <input type="submit" name="verify" value="Verify">
        </form>
    </div>
</body>
</html>
