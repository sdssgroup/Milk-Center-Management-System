<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("navbar.php" );?>
<style>
body {
  background-color: white;
  font-family: cursive;
}

.glow {
  font-size: 60px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 250px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>
<br>
<h1 class="glow">Governing Body</h1>
  <br><br><br>
  <table style="width:100%;"><tr><td style="align:center; padding:50px;">
<div class="card">
  <img src="images/founder.jpg" alt="Yadagiri" style="width:250px; height:250px;">
  <div class="container">
    <h4><b>Pabbathi Yadagiri</b></h4> 
    <p>Founder, MMS</p> 
    <p>Kadaparthy</p> 
    <p>founder@mms.co.in</p> 
  </div>
</div> </td>
<td  style="align:center; padding:50px;">
<div class="card">
  <img src="images/default.png" alt="Sreeshailam" style="width:250px; height:250px;">
  <div class="container">
    <h4><b>Pabbathi Sreeshailam</b></h4> 
    <p>CEO, MMS</p> 
    <p>Kadaparthy</p> 
    <p>ceo@mms.co.in</p> 
  </div>
</div> </td>
<td  style="align:center; padding:50px;">
<div class="card">
  <img src="images/img_avatar2.png" alt="Dhanamma" style="width:250px; height:250px;">
  <div class="container">
    <h4><b>Pabbathi Dhanamma</b></h4> 
    <p>Treasurer, MMS</p> 
    <p>Kadaparthy</p> 
    <p>treasurer@mms.co.in</p> 
  </div>
</div> </td></tr>
<tr><td  style="align:center; padding:50px;">
<div class="card">
  <img src="images/default.png" alt="Sai Girish" style="width:250px; height:250px;">
  <div class="container">
    <h4><b>Pabbathi Sai Girish</b></h4> 
    <p>Developer, MMS</p> 
    <p>Kadaparthy</p> 
    <p>developer@mms.co.in</p> 
  </div>
</div> </td>
<td  style="align:center; padding:50px;">
<div class="card">
  <img src="images/default.png" alt="Shiva Sai" style="width:250px; height:250;">
  <div class="container">
    <h4><b>Pabbathi Shiva Sai</b></h4> 
    <p>Secretary, MMS</p> 
    <p>Kadaparthy</p> 
    <p>ceo@mms.co.in</p> 
  </div>
</div> </td>
<td  style="align:center; padding:50px;">
<div class="card">
  <img src="images/img_avatar2.png" alt="Dhanamma" style="width:250px; height:250;">
  <div class="container">
    <h4><b>Pabbathi Dhanamma</b></h4> 
    <p>Founder, MMS</p> 
    <p>Kadaparthy</p> 
    <p>treasurer@gmail.com</p> 
  </div>
</div> </td></tr></table>

<br><br>
</body>
<?php include("footer.php");?>
</html> 
