<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Pagrindinis</h2>
		<?php
			if (isset($_SESSION['userID'])) {
				$name =  $_SESSION['userName'];
				$surname = $_SESSION['userSurname'];
				$role = $_SESSION['userRole'];
				echo '<p>Prisijungta kaip '.$name.' '.$surname.'. Rolė: '.$role.'</p>';
			}
			// checking if the prace where you enter your usser name and password is empty
			if(isset($_GET['login'])=='empty' AND ($_GET['login']) != "success"){
				echo'<font color="#FF0000"><p align="center">Norint prisijungti irašykite savo Elektroninį paštą ir slaptažodį</p></font>';
				// checking if there is an error that can be because of username or password
				if($_GET['login'] == "error"){
					echo'<font color="#FF0000"><p align="center">Blogas E.Paštas arba slaptažodis</p></font>';
			}
			}
		?>
	</div>
</section>
<?php
	include_once 'footer.php';
?>
