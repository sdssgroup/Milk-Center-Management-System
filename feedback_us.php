<?php
require_once('connect_db.php');
if(isset($_SESSION['user_type']) && $_SESSION['user_type']!=""){
	if($_SESSION['user_type']=="Administrator"){
		header('location: ../Admin/dashboard.php');
	}elseif($_SESSION['user_type']=="User"){
		header('location:../user/dashboard.php');
	}elseif($_SESSION['user_type']=="Management"){
		header('location:../Management/dashboard.php');
	}else{
		echo "Invalid User";
	}
}
?>
<?php include("navbar.php" );?>
<div class="container">
<center>
<h1 size="12">Login to Continue</h1>
<a href="index.php">Home</a>
</div>
</div>
</div>
</html>
<?php
include("footer.php");
?>