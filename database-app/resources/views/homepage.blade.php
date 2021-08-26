
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>HomePage</title>

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="logout" action="{{ route('logout') }}">
      {{ csrf_field() }}
      <h1 class="h3 mb-3 font-weight-normal">Hello World :D</h1>
      <br>
      <button class="btn btn-lg btn-primary btn-block" style="background-color:red; border-color:red" type="submit">Sign Out</button>
      </p>
    </form>
  </body>
</html>
