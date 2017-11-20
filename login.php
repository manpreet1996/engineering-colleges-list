<html>
<head>
<style>
input[type=password], select, textarea, {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #B3B0B0;
    padding: 20px;
    margin: 20px;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style
</head>
<body bgcolor="nnn.jpg">
<div class="container">
<h1><center>LOGIN/SIGN UP FORM</center></h1>
</div>



<div class="container">
  <form action="login.php" method = "post">
  <label for="id"><b>U ID:</b></label> <input type="text" id="id" name="id"><br /><br />
  <label for="username"><b>Username</b></label> <input type="username" id="username" name="username"><br /><br />
  <label for="username"><b>Phone No.</b></label> <input type="phone no" id="phoneno" name="phoneno"><br /><br />
  <label for="password"><b>Password:</b></label> <input type="text" id="password" name="password"><br /><br />
  <button type = "submit"><b>Sign Up</b></button>
</form>
</div>

<div>
<div class="container">
<?php
$con = mysqli_connect("127.0.0.1","root","");
echo "<b>" . "connection created". "</b>" . "<br>";
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
if(mysqli_query($con,"CREATE DATABASE state"))
{
echo "<b>"."Database created"."</b>"."<br>";
}
else
{
//echo "Error creating database: " . mysqli_connect_error();
mysqli_select_db( $con,"state");
//return $db;
}



echo "<div class='container'>";
$username1=$id1=$password1=$phoneno1="";
if (isset($_POST['submit'])) {
      $username1=$_POST['username'];
      $id1=$_POST['id'];
      $password1=$_POST['password'];
      $phoneno1=$_POST['phoneno'];

}
$sql="UPDATE login SET id='$id1',username= '$username1',password='$password1',phoneno='$phoneno1' WHERE 1";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
else{
echo "values inserted";
}
echo "</div>";
?>
</div>
</div>
</body>
</html>