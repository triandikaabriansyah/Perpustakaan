<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Data Buku</title>
  </head>
  <body>

    <div class="container">
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		{{@session('sukses')}}
	</div>
	@endif
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/buku"><h1>Data Buku</h1></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/buku">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item mr-2">
				<a class="nav-link" href="/buku/create">Tambah</a>
			</li>
			<form class="form-inline my-2 my-lg-0" method="GET" action="/buku">
		      <input name="cari" class="form-control ml-auto" type="search" placeholder="Cari Judul Buku" aria-label="Search">
		      <button class="btn btn-primary" type="submit">Cari</button>
		    </form>
			</ul>
		</div>
	</nav>
	<!-- Akhir Navbar -->
  	<div class="row">
		<div class="col-sm">
		      <a type="button" class="btn btn-primary my-3" href="/buku/create">Tambah</a>
		    </div>
    	</div>
    </div>

	<div class="container">
    	<div class="row">
    		@foreach($data_buku as $buku)
    		<div class="col-md-4">    		
			    <div class="card mb-3">
			    	<h5 class="card-title mt-2 ml-2">{{$buku->judul}}</h5>
				  	<img class="card-img-top" src="/img/{{$buku->gambar}}" alt="Card image cap" height="500">
				  <div class="card-body">
				    <p class="card-text">Pengarang : {{$buku->pengarang}}</p>
				    <p class="card-text">Penerbit : {{$buku->penerbit}}</p>
				    <a href="/buku/{{$buku->id_buku}}/edit" class="btn btn-warning mr-2">Edit</a>
					
				    <a href="/buku/{{$buku->id_buku}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus')">Hapus</a>
				  </div>
				</div>	
    		</div>  
		@endforeach
    	</div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>