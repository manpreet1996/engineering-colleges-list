<!DOCTYPE html>
<html>
<head>
<style>
input.button {
width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;
}
input.button:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
* {
    box-sizing: border-box;
}

body {
    background-color: #A3B8F5;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 12px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: #C6C8C7;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body background="pp.jpg">

<!-- MAIN (Center website) -->
<div class="main">

<h1>ENGINEERING COLLEGES</h1>
<hr>

<h2>WELCOME</h2>
<p><b>This website is particularly used for searching differnt different engineerimg colleges present in the different states of India. You can login to a website and search for a college nad then can register to that college also.</b></p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <?php
      echo  "<a  href='search.php'><img src='1.jpg' alt='Mountains' style='width:100%'/></a>";
	?>
	<?php
      echo  "<form action='search.php' method='POST'>
<input type='submit' value='Search' class='button' />
</form>";
  ?>
      <h2>Searching Colleges</h2>
      <p><b>To search for a particular college <b>click on the image</b>.You can search for a college according to the state of India.There are many colleges are present in different states. More details abouth the collges are given in the following pages.You can navigate to those pages also.</b>

</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="4.jpg" alt="Mountains" style="width:100%"></img>
	<?php
      echo  "<form action='login.php' method='POST'>
<input type='submit' value='Login' class='button' />
</form>";
	?>
      <h2>Login Using Phone Number</h2>
      <p><b>You can login using your phone number for further details...
    <br>By using your account you can register for the colleges also.
    <br>So login for further details...</b></p>
    </div>
  </div>
  </div>
  
<!-- END GRID -->
</div>

<div class="content">
  <img src="6.jpg" alt="Bear" style="width:100%">
  <h3>Description about Colleges of India</h3>
  <p><b>WIndia is one of the largest producers of engineers in the world. Yet, more than 70% of engineers are unemployed due to severe competition, and by some estimates only 7-8% of engineering graduates are actually employable.[1]

In India, there are several engineering colleges imparting undergraduate and graduate courses in engineering, applied engineering and sciences.</b></p>
  <p><b>Indian Institutes of Engineering Science and Technology (abbreviated as IIEST) are a group of academic institutions in India for research and education in engineering. These were originally proposed by the Government of India in 2007 to meet the increasing demand for technological and scientific workforce in the industrial and service sectors of India as well as the growing need for qualified personnel in research and development.</b></p>
</div>

<!-- END MAIN -->
</div>

</body>
</html>
