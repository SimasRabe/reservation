<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<?php
			if (isset($_SESSION['userID']))
				echo '<h2>Jus jau turite paskyrą</h2>';
			else {
				echo '<h2>Registruotis</h2>';
				echo '<form class="signup-form" action="includes/signup.inc.php" method="POST">
					<input type="text" name="userName" placeholder="Vardas">
					<input type="text" name="userSurname" placeholder="Pavardė">
					<input type="text" name="userEmail" placeholder="Elektroninis paštas">
					<input type="password" name="userPassword" placeholder="Slaptažodis">
					<input type="text" name="userPhoneNumber" placeholder="(+370) 623 12345">
					<button type="submit" name="submit">Patvirtinti</button>
				</form>';
				
				// ismeta kokia yra registracijos busena
				if(isset($_GET["signup"])){
					if($_GET["signup"] == "success"){
						echo'<font color="##000000"><p align="center">Sėkmingai užsiregistravote!</p></font>';
					}
					if($_GET['signup'] == "empty"){
						echo'<font color="##000000"><p align="center">Tam kad užsiregistruotumėte turite užpildyti visus langelius</p></font>';
					}
					if($_GET['signup'] == "invalid"){
						echo'<font color="##000000"><p align="center">Blogai užpildėte langelius, mėginkite vėl!</p></font>';
					}
				}
			}
		?>
	</div>
</section>
<?php
	include_once 'footer.php';
?>
