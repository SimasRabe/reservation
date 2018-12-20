<?php
	include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">
		<?php
			if ($_SESSION['userRole'] == 'Admin') {

				include_once 'includes/dbh.inc.php';

				echo '<h2>Pridėti rezervaciją</h2>';
				$name =  $_SESSION['userName'];
				$surname = $_SESSION['userSurname'];
				$role = $_SESSION['userRole'];
				echo '<p>Prisijungta kaip '.$name.' '.$surname.'. Rolė: '.$role.'</p>';

				echo '<form class="signup-form" action="includes/adminAddReservation.inc.php" method="POST">
					<input type="text" name="roomName" placeholder="Rezervacijos pavadinimas">
					<input type="number" name="roomSize" placeholder="Rezervacijos dydis">
					<input type="number" name="roomPrice" placeholder="Rezervacijos kaina">
					<input type="text" name="roomPictureURL" placeholder="Rezervacijos paveikslėlio URL">
					<button type="submit" name="submit">Patvirtinti</button>
				</form>';
			} else
				header("Location: index.php");
			//pridedama busena
			if(isset($_GET["add"])){
				if($_GET["add"] == "success"){
					echo'<font color="##000000"><p align="center">Sėkmingai pridėta rezervacija</p></font>';
				}
				if($_GET['add'] == "empty"){
					echo'<font color="##000000"><p align="center">Norint prideti reikia pilnai užpildyti langelius</p></font>';
				}
				if($_GET['add'] == "invalid"){
					echo'<font color="##000000"><p align="center">Blogai užpildyta</p></font>';
				}
			}
		?>
	</div>
</section>
<?php
	include_once 'footer.php';
?>
