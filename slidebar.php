
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>slidenav</title>
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
  
body{
  margin:0;
  padding:0;
  -webkit-box-sizing:border-box;
  box-sizing:border-box;
  color: #fff;
      
    font-family: 'Roboto Condensed', sans-serif;
    
 
  position: relative;
  background:#34495e;
  transform: translateX(0px);
  transition: transform 800ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

html {
  overflow-x: hidden;
    overflow-y: hidden;
}

/*----------------- button ---------*/
.button {
  position: fixed;
  top: 10px;
  left: 10px;
  z-index: 10000;
  background:transparent;
  width:50px;
  height:40px;
  overflow:hidden;
  cursor:pointer;
}

.button:hover{
  cursor:pointer;
}

.button > .line{
  display:block;
  width:80%;
  height:2px;
  background:#fff;
  margin:8px auto;
}

.button .line:nth-child(1), .button .line:nth-child(3){   
  transform:rotate(0deg) translateY(0);     
  transition:all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55); 
}

.button .line:nth-child(2){   
  transform:translateX(0);   
  transition:all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55); 
}
 

.close .line:nth-child(1) {  
  transform:rotate(45deg) translateY(15px);
  
}

.close .line:nth-child(3) {  
  transform:rotate(-45deg) translateY(-15px);
}

.close .line:nth-child(2){   
  transform:translateX(-100px);
}


/*---------------- menu -----------*/
.menu {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 400px;
  height:800px;
  overflow:hidden;
  padding-left: 0;  
  transform: translateX(-150%);
transition: transform 500ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition-delay: .1s;
}

.menu nav ul {
  margin: 0;
  padding: 20px 0;
  list-style: none;
}

.menu nav ul li {
  margin: 0;
  padding: 0;
}

.menu nav ul li a{
  color:#fff;
  text-decoration:none;
  display: block;
  padding: 10px 20px;
  padding-left: 120px;
  -webkit-transform:translateX(0px);
  transform:translateX(0px);     
  transition:all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.menu nav ul li a:hover{
  background: rgba(1,1,1,.3);  
  transform:translateX(20px);
}
 
body.nav_is_visible {
  transform: translateX(300px);
}

body.nav_is_visible .menu {
  transform: translateX(-100%);
}
 
.content {
  position: absolute;
  margin: 0 auto;
  padding: 30px 20%;
  font-size: 18px;
  transform: translateX(100%);
transition: color 1s ease 1s, background 0.5s ease 1s, transform 1000ms cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.3s;
}

.content  h1 {
  font-size: 60px;
 
}

.content  p {
  margin-bottom: 50px;
  line-height: 1.4;
  font-size: 17px;
}

.content .wrapper{
    
  transform:translateX(300%);     
  transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.home_is_visible .home .wrapper,
.aboutus_is_visible .aboutus .wrapper,
.clients_is_visible .clients .wrapper,
.contactus_is_visible .contactus .wrapper{  
  transform:translateX(0);
}

 
.home_is_visible .home, 
.aboutus_is_visible .aboutus, .clients_is_visible .clients, .contactus_is_visible .contactus {   
  transform: translateX(0);
  z-index:5000;
}


.home_is_visible .home {
  color: white;
  background: #ff9800;
}


.aboutus_is_visible .aboutus {
  color: white;
  background: #9c27b0;
}


.clients_is_visible .clients {
  color: white;
  background: #ff5722;
}

.contactus_is_visible .contactus {
  color: white;
  background: #3f51b5;
}


    
    </style>
</head>
<body>
  <!-- button --->
<div class="button">
  <span class="line"></span>
  <span class="line"></span>
  <span class="line"></span>
</div>
<!-- navbar menu -->
<div class='menu'>
  <nav>
    <ul>
      <li>
        <a href='#' data-class='home_is_visible '>Home</a>
      </li>
      <li>
        <a href='#' data-class='aboutus_is_visible'>About</a>
      </li>
      <li>
        <a href='#' data-class='clients_is_visible'>Clients</a>
      </li>
      <li>
        <a href='#' data-class='contactus_is_visible '>Contact Us</a>
      </li>
    </ul>
  </nav>
</div>

<!-- content -->

<div class='content home'>
 
  <div class="wrapper">
  <br>
  <h1>Responsive Sidebar</h1>
   <br><br>
  <p class="text-justify">
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  
  
  
  
  
  
  </p>
   
  </div>
  </div>
<div class='content aboutus'>
  <div class="wrapper">
  <h1>About Us</h1>
   <br><br><br>
  <p class="text-justify">
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  
  
  
  
  
  
  </p>
   
</div>
</div>
<div class='content clients'>
  <div class="wrapper">
  <h1>Clients</h1>
   <br><br><br><br>
  <p class="text-justify">
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  
  
  
  
  
  
  </p>
   
</div>
</div>
<div class='content contactus'>
  <div class="wrapper">
  <h1>Contact Us</h1>
  <br><br><br><br>
  <p class="text-justify">
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leoPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo
  
  
  
  
  
  
  </p>
   
</div>
</div>  
<script>
    
    $(function(){
  /*--------- show and hide the menu  ---*/
  $('.button').on("click", function(){
    if($('body').hasClass('nav_is_visible') == true){
     $('body').removeClass('nav_is_visible');
     $('.button').removeClass('close');
        }
    else{
     $('body').addClass('nav_is_visible');
     $('.button').addClass('close');
       }
   });
  
  $('body').addClass('home_is_visible');

    
 function removeClasses() {
  $(".menu ul li").each(function() {
    var custom_class = $(this).find('a').data('class');
  $('body').removeClass(custom_class);
  });
}
  
  $('.menu a').on('click',function(e){
    e.preventDefault();
    removeClasses();
    var custom_class = $(this).data('class');
    $('body').addClass(custom_class);
  });
});
    
</script>
</body>
</html>