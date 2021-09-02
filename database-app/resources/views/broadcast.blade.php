
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

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Broadcast
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/broadcast">Broadcast Nomor</a></li>
            <li><a class="dropdown-item" href="/broadcastdb">Broadcast Database</a></li>
          </ul>
        </li>
    <br>
    </ul>
      <a href="{{ route('logout') }}" class="btn btn-outline-danger" style="margin-left:auto;">Sign Out</a>
    </div>
  </nav>

	<div class="send">
		<h1 class=mt-4 style='margin-left:14px; font-size: 28px;'>
      Broadcast Nomor
    </h1>

		<form class="testing" method="POST">
			{{ csrf_field() }}

      <a style='margin-left:14px; color:red; font-size: 14px;'>
      Tulis atau copy/paste nomor (one per row) :*</a>

			<textarea class="form-control mt-4" required rows="8" name="nomor" placeholder="Format:
Kode negara + Nomor Whatsapp

Contoh:
62812345678
62812345678901
62812345678
62812345678901" style="margin-left:14px; width: 700px;"></textarea>

      <textarea class="form-control mt-5 mb-3" rows="2" name="pesan" placeholder="Tuliskan pesan disini" style="margin-left:14px; width: 700px;"></textarea>

			<button type="submit" class="btn btn-primary" style='margin-left:14px; background-color: #FFB319; border: none; padding: 8px 32px;'>Kirim</button>
		</form>
	</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
	
</script>
</html>




