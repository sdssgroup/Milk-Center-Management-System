<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
</style>
</head>
<body>


  <h3>Management's talk</h3><hr>
  <div class="slideshow-container">
  <div class="mySlides1">
  <table style="width:100%; padding:0px 100px 0px 100px">
  <tr><td><h2><q>Education begins the gentleman, but reading, good company and reflection must finish him.</q></h2></td>
  <td rowspan="2"><img src="images/founder.jpg" width="150px" height="200px"></td></tr>
  <tr><td align="right"><h3>- PABBATHI YADAGIRI<br> Founder (MMS) </h3></td></tr>
  </table>
  </div>

  <div class="mySlides1">
  <table style="width:100%; padding:0px 100px 0px 100px">
  <tr><td><h2><q>My idea of good company is the company of clever, well-informed people who have a great deal of conversation.</q></h2></td>
  <td rowspan="2"><img src="images/default.png" width="200px" height="auto"></td></tr>
  <tr><td align="right"><h3>- PABBATHI SREESHAILAM<br> CEO (MMS) </h3></td></tr>
  </table>
  </div>
  
  <div class="mySlides1">
  <table style="width:100%; padding:0px 100px 0px 100px">
  <tr><td><h2><q>The feelings of my smallness and my nothingness always kept me good company.</q></h2></td>
  <td rowspan="2"><img src="images/img_avatar2.png" width="200px" height="auto"></td></tr>
  <tr><td align="right"><h3>- PABBATHI DHANALAXMI<br> Treasurer (MMS) </h3></td></tr>
  </table>
  </div>
  
  <div class="mySlides1">
  <table style="width:100%; padding:0px 100px 0px 100px">
  <tr><td><h2><q>I'm the most gregarious of men and love good company, but never less alone when alone.</q></h2></td>
  <td rowspan="2"><img src="images/default.png" width="200px" height="auto"></td></tr>
  <tr><td align="right"><h3>- PABBATHI SAI GIRISH<br> Developer (MMS) </h3></td></tr>
  </table>
  </div>

  <div class="mySlides1">
  <table style="width:100%; padding:0px 100px 0px 100px">
  <tr><td><h2><q>The harder you work for something, the greater you’ll feel when you achieve it.</q></h2></td>
  <td rowspan="2"><img src="images/default.png" width="200px" height="auto"></td></tr>
  <tr><td align="right"><h3>- PABBATHI SHIVA SAI<br> Secretary (MMS) </h3></td></tr>
  </table>
  </div>

  <a style="color:black" class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a style="color:black" class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<hr>
<h3>Customer's talk</h3><hr>
<div class="slideshow-container">
  <div class="mySlides2">
  <table style="width:100%; padding:0px 100px 0px 100px">
  <tr><td><h2><q>Milk Management System was great idea to increase the transparency between company and us.</q></h2></td>
  <td rowspan="2"><img src="images/default.png" width="200px" height="auto"></td></tr>
  <tr><td align="right"><h3>- Someone<br> Customer (MMS) </h3></td></tr>
  </table>
  </div>

  <div class="mySlides2">
  <table style="width:100%; padding:0px 100px 0px 100px">
  <tr><td><h2><q>MMS made our work simple, it credits amount directly in our bank accounts.</q></h2></td>
  <td rowspan="2"><img src="images/default.png" width="200px" height="auto"></td></tr>
  <tr><td align="right"><h3>- Someone<br> Customer (MMS) </h3></td></tr>
  </table>
  </div>

  <div class="mySlides2">
  <table style="width:100%; padding:0px 100px 0px 100px">
  <tr><td><h2><q>MMS saves my time after intoducing it. We won't sit for a long time.</q></h2></td>
  <td rowspan="2"><img src="images/default.png" width="200px" height="auto"></td></tr>
  <tr><td align="right"><h3>- Someone<br> Customer (MMS) </h3></td></tr>
  </table>
  </div>

  <a style="color:black" class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a style="color:black" class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div><hr>
<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

</body>
</html> 
