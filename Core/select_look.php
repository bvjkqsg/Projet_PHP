<?php
	include("../Core/header.html");
?>

	<title>Sélection de Table pour Consultation</title>

	<h1 style='font-variant:small-caps;text-align:center'>Choix de la Table à Consulter</h1>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" style="text-align:center">
			<select id="table" name="table">
				<option value"none">Non Selectionné</option>
				<option value="TDF_COUREUR">TDF_COUREUR</option>
				<option value="TDF_ANNEE">TDF_ANNEE</option>
				<option value="TDF_EPREUVE">TDF EPREUVE</option>
			</select>
			</br></br>
			<input type="submit" name="valider" value="valider"/>

		</form>



		<?php
			if(isset($_POST['table'])){
				$table=$_POST['table'];
				switch($table){
					case "TDF_COUREUR":	header("location:../Coureur/form_coureur_look.php");
										break;
					case "TDF_ANNEE" : 	header("location:../Annee/form_annee_look.php");
										break;
					case "TDF_EPREUVE" : header("location:../Epreuve/form_epreuve_look.php");
										break;
				}
			}

		include("footer.html");