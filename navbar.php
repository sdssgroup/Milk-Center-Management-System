<?php
require_once('connect_db.php');
session_start();
if(isset($_SESSION['user_type']) && $_SESSION['user_type']!=""){
	if($_SESSION['user_type']=="Administrator"){
		header('location: Admin/dashboard.php');
	}elseif($_SESSION['user_type']=="User"){
		header('location:user/dashboard.php');
	}elseif($_SESSION['user_type']=="Management"){
		header('location:Management/dashboard.php');
	}else{
		echo "Invalid User";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Milk Management System, Kadaparthy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/modal.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/modal.css">
</head>

<body style="padding:20px 80px 20px 80px;align:center; ">
<center>
<table width="100%" style=""><tr><td colspan="3"><p style="text-shadow:1px 1px 1px rgba(255,163,240,1);font-weight:bold;color:#2A1FC2;background-color: ;border: 5px groove #f7b3e5;letter-spacing:2pt;word-spacing:4pt;font-size:50px;text-align:center;font-family:georgia, serif;line-height:1;width:100%;">
MILK CO-OPERATION OF TELANGANA STATE
	</p></td></tr>
<tr><td><p style="text-shadow:1px 1px 1px rgba(255,163,240,1);font-weight:bold;color:#2A1FC2;background-color: ;border: 5px groove #f7b3e5;letter-spacing:2pt;word-spacing:4pt;font-size:25px;text-align:center;font-family:georgia, serif;line-height:1;width:100%;">
Village: KADAPARTHY
	</p></td>
<td><p style="text-shadow:1px 1px 1px rgba(255,163,240,1);font-weight:bold;color:#2A1FC2;background-color: ;border: 5px groove #f7b3e5;letter-spacing:2pt;word-spacing:4pt;font-size:25px;text-align:center;font-family:georgia, serif;line-height:1;width:100%;">
Mandal: NAKREKAL
	</p></td>
<td><p style="text-shadow:1px 1px 1px rgba(255,163,240,1);font-weight:bold;color:#2A1FC2;background-color: ;border: 5px groove #f7b3e5;letter-spacing:2pt;word-spacing:4pt;font-size:25px;text-align:center;font-family:georgia, serif;line-height:1;width:100%;">
District: NALGONDA
	</p></td></tr>
	<tr height="20px"></tr>
</table>
</center>
<nav class="navbar navbar-inverse" style="font-size:20px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">About us <span class="caret"></span></a>
          <ul class="dropdown-menu" style="font-size:20px">
            <li><a href="governing_body.php">Governing Body</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="feedback_us.php">Feedback Us</a></li>
          </ul>
        </li>
        <li><a href="ratelist.php">Ratelist</a></li>
        <li><a href="#">Know Us(not in use)</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
 <div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/default.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
     
	 <label for="utype"><b>User type</b></label><br>
      <select name="user_type" style="width:300px; height:50px">
	  <option>Management</option>
	  <option>Administrator</option>
	  <option>User</option>
	  </select>
        
      <button type="submit" name="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?(under construction)</a></span>
    </div>
  </form>
</div>

</body>
</html>
<?php
if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,md5($_POST['password']));
	$user_type=mysqli_real_escape_string($conn,$_POST['user_type']);
	if($user_type=="Administrator"){
		$sql="select * from users where username='$username' and password='$password' and user_type='Administrator' and status='Active'";
		$query=$conn->query($sql);
		$count=mysqli_num_rows($query);
		$row=mysqli_fetch_array($query);
		if($count>0){
			$_SESSION['id']=$row['user_id'];
			$_SESSION['username']=$row['username'];
			$_SESSION['user_type']=$row['user_type'];
			echo "<script>window.location='Admin/dashboard.php'</script>";
		}else{
			echo "<script>alert('Proxy Login. Alert sent to Administrator.')</script>";
			}
	}elseif($user_type=="User"){
		$sql="select * from users where username='$username' and password='$password' and user_type='User'  and status='Active' LIMIT 1";
		$query=$conn->query($sql);
		$count=mysqli_num_rows($query);
		$row=mysqli_fetch_array($query);
		if($count>0){
			$_SESSION['id']=$row['user_id'];
			$_SESSION['username']=$row['username'];
			$_SESSION['user_type']=$row['user_type'];
			echo "<script>window.location='user/dashboard.php'</script>";
		}else{
			echo "<script>alert('Proxy Login. Alert sent to Administrator.')</script>";
			}
	}elseif($user_type=='Management'){
		$sql="select * from users where username='$username' and password='$password' and user_type='Management'  and status='Active' LIMIT 1";
		$query=$conn->query($sql);
		$count=mysqli_num_rows($query);
		$row=mysqli_fetch_array($query);
		if($count>0){
			$_SESSION['id']=$row['user_id'];
			$_SESSION['username']=$row['username'];
			$_SESSION['user_type']=$row['user_type'];
			echo "<script>window.location='Management/dashboard.php'</script>";
		}else{
			echo "<script>alert('Proxy Login. Alert sent to Administrator.')</script>";
			}
	}
}
?>
