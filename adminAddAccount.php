<?php
	include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">
		<?php
			if ($_SESSION['userRole'] == 'Admin') {

				include_once 'includes/dbh.inc.php';

				echo '<h2>Pridėti paskyrą</h2>';
				$name =  $_SESSION['userName'];
				$surname = $_SESSION['userSurname'];
				$role = $_SESSION['userRole'];
				echo '<p>Prisijungta kaip '.$name.' '.$surname.'. Rolė: '.$role.'</p>';

				echo '<form class="signup-form" action="includes/adminAddAccount.inc.php" method="POST">
					<input type="text" name="userName" placeholder="Vardas">
					<input type="text" name="userSurname" placeholder="Pavardė">
					<input type="text" name="userEmail" placeholder="Elektroninis paštas">
					<input type="password" name="userPassword" placeholder="Slaptažodis">
					<input type="text" name="userPhoneNumber" placeholder="(+370) 623 12345">
					<select name="userRole">
						<option value="Guest">Svečias</option>
						<option value="Junior">Jaunesnysis</option>
						<option value="Controller">Valdytojas</option>
						<option value="Admin">Administratorius</option>
					</select>
					<button type="submit" name="submit">Patvirtinti</button>
				</form>';
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
				
			} else
				header("Location: index.php");
		?>
	</div>
</section>
<?php
	include_once 'footer.php';
?>
