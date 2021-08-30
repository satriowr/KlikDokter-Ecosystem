<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="" rel="stylesheet">
  </head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/member">
      <img src="https://i.im.ge/2021/08/25/BUPzJ.png" alt="" width="100" height="20">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mt-2">
      <li class="nav-item">
        <a class="nav-link" href="/member">Database Member<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/hcp">Database HCP</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/komunitas">Database Komunitas</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="/broadcast">Broadcast</a>
      </li>
    </ul>
      <a href="{{ route('logout') }}" class="btn btn-outline-danger" style="margin-left:auto;">Sign Out</a>
    </div>
  </nav>

	<div class="send">
		<h1>Testing Broadcast</h1>
		<form class="testing" method="POST">
			{{ csrf_field() }}
			<b>No Tujuan</b><br>
			<input type="text" name="nomor" placeholder="62" required maxlength="14">
			<!-- <textarea class="form-control" required="" rows="10" spellcheck="false" name="pesan" id="pesan" placeholder="Format:
Country code + Mobile digit + Phone number

Example:
62812345678
62812345678901
62812345678
62812345678901"></textarea> -->
			<br>

			<b>Pesan</b>
			<br>
			<input type="text" name="pesan" placeholder="Tuliskan Pesan" required maxlength="160" >
			<br><br>
			<input type="submit" value="Kirim">
		</form>
	</div>

  <a>
    <h1 class="h3 mt-5 mb-3 font-weight-normal">
      Hello World :D
    </h1>
  </a>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
	
</script>
</html>




