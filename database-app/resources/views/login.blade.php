
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Klik Dokter Database App</title>

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
        {{ csrf_field() }}
      <img class="mb-4" src="https://i.im.ge/2021/08/25/BUPzJ.png" alt="" width="300" height="50">
      <br>
      <br>
      <br>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" style="background-color:#61A745; border-color:#61A745" type="submit">Sign in</button>

      <p class="mt-5 mb-3 text-muted">
          Klik Dokter Database App 2021
      </p>
    </form>
  </body>
</html>
