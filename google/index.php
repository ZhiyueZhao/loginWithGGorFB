<html>
  <head>
    <title>google sign in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js-login.js"></script>
    <meta name="google-signin-client_id" content="546397416259-jiqe6lhmg3tp6ff6dc5e4gefigh8l3js.apps.googleusercontent.com">
    <style>
      .g-signin2{
        margin-left: 500px;
        margin-top: 200px;
      }
      .data{
        display: none;
      }
    </style>
  </head>
  <body>

    <div class="g-signin2" data-onsuccess="onSignIn"></div>

    <div class="data">
      <p>Profile Details</p>
      <img id="pic" class="img-circle">
      <p>Email Address</p>
      <p id="email" class="alert alert-danger"></p>
      <button onclick="signOut()" class="btn btn-danger">SignOut</button>
    </div>
  </body>
</html>