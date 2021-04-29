<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Edit Buku</title>
  </head>
  <body>
    <div class="container">
    <!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/buku"><h1>Edit Buku</h1></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
	<!-- Akhir Navbar -->
  <div class="row">
		<div class="col-sm">
		      <a type="button" class="btn btn-primary my-3" href="/buku">Home</a>
		    </div>
    	</div>
    <form action="/buku/{{$buku->id_buku}}/update" method="POST" class="border p-3">
    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul" value="{{$buku->judul}}" Required>    
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Pengarang</label>
        <input name="pengarang" type="text" class="form-control" id="exampleInputPassword1" placeholder="Pengarang" value="{{$buku->pengarang}}" Required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Penerbit</label>
        <input name="penerbit" type="text" class="form-control" id="exampleInputPassword1" placeholder="Penerbit" value="{{$buku->penerbit}}" Required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Masukkan gambar</label>
        <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1" value="{{$buku->gambar}}" Required>        
        <i style="float: left;font-size: 11px;color: red">Gambar harus di isi terlebih dahulu</i>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>