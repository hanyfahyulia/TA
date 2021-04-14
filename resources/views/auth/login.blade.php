<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/logincss.css">
       
  </head>
  <body>
  <div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="POST" action="{{ route('loginData') }}">
    {{csrf_field()}}
      <input name="email" type="email" placeholder="Email"/>
      <input name="password" type="password" placeholder="Password"/>
      <button type ="submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
   
<script src="js/login2.js">
</script>

  </body>
</html>




