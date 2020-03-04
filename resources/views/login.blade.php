<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion de Cahier de texte</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		.container1{
	width: 500px;
	height: 400px;
	margin: 0px auto;
	margin-top: 100px;
	text-align: center;
}
	</style>
</head>
<body>
<div class="container">
    <div class="row">
          <div class="col-sm-3">
               <img src="logo UCAD png.png" alt="" width="80px">
		  </div>
		  <div class="col-sm-9">
			   <span style="font-size: 30px"><b>Ecole Supérieure Polytechnique</b> </span><br>
			   <span style="font-size: 30px"><b>Département Génie Informatique</b> </span>
		  </div>

	</div>
</div> 
<div class="container1">
     
	<form class="border border-light p-5" method="POST" action="/absence">
	    {{ csrf_field() }}
		<p class="h4 mb-4 text-center" style="font-size: 30px">Gestion du Cahier de Texte</p>

		<input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Nom d'utilisateur" name="username">

		<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Mot de passe" name="password">

		<button class="btn btn-info btn-block my-4" type="submit">SE CONNECTER</button>

		<div class="d-flex justify-content-between">
				<div>
				<a href="">Mot de passe oublié ?</a>
			</div>
		</div>
    </form>
	

</div>
	
</body>
</html>