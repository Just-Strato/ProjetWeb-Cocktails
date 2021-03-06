<?php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}

?>
<style>
	body {background-color: #212529; color: white;}
</style>

<section id="inscription">
    <div class="container">
	<form method="POST" action="controleur.php">
	  <div class="form-group row">
		<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
		  <small id="emailHelp" class="form-text text-muted">Nous ne comuniquerons pas votre adresse. <span style="color: red;">Ce champ est requis.</span></small>
		</div>
	  </div>
	  <div class="form-group row">
		<label for="inputPseudo" class="col-sm-2 col-form-label">Pseudo</label>
		<div class="col-sm-10">
		  <input type="email" class="form-control" id="inputPseudo" placeholder="Pseudonyme">
		  <small id="pseudoHelp" class="form-text text-muted"><span style="color: red;">Ce champ est requis.</span></small>
		</div>
	  </div>
	  <div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
		<div class="col-sm-10">
		  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
		  <small id="passwordHelp" class="form-text text-muted"><span style="color: red;">Ce champ est requis.</span></small>
		</div>
	  </div>
	  
	  <div class="form-group row" style="height: 1px; background-color: white;"></div>
	  
	  <div class="form-group row">
		<label class="col-sm-2 col-form-label">Informations Personnelles</label>
	  </div>
	  <div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Identité</label>
		<div class="col">
		  <input type="text" class="form-control" placeholder="Nom">
		</div>
		<div class="col">
		  <input type="text" class="form-control" placeholder="Prénom">
		</div>
	  </div>
	  <div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Date de naissance</label>
		<div class="col">
		  <input type="text" class="form-control" placeholder="Jour" maxlength="2">
		</div>
		<div class="col">
		  <input type="text" class="form-control" placeholder="Mois" maxlength="2">
		</div>
		<div class="col">
		  <input type="text" class="form-control" placeholder="Année" maxlength="4">
		</div>
	  </div>
	  <div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Contact</label>
		<div class="col">
		  <input type="text" class="form-control" placeholder="Code Postal" maxlength="5">
		</div>
		<div class="col">
		  <input type="text" class="form-control" placeholder="Téléphone" maxlength="10">
		</div>
	  </div>
	  <fieldset class="form-group">
		<div class="row">
		  <legend class="col-form-label col-sm-2 pt-0">Sexe</legend>
		  <div class="col-sm-10">
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="sexe" id="gridRadios1" value="homme" checked>
			  <label class="form-check-label" for="gridRadios1">
				Homme
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="sexe" id="gridRadios2" value="femme">
			  <label class="form-check-label" for="gridRadios2">
				Femme
			  </label>
		  </div>
		</div>
	  </fieldset>
	  <div class="form-group row">
		<div class="col-sm-10">
		  <button type="submit" class="btn btn-primary">Inscription</button>
		</div>
	  </div>
	</form>
	</div>
</section>