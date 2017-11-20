<html>
<head>
<style>
.alert {
    padding: 20px;
    background-color: #008000;
    color: white;
}
.container {
    border-radius: 5px;
    background-color: #E1DADC;
    padding: 20px;
    margin: 20px;
}
</style>
</head>
<body background="mm.jpg">
<div class="container">
<h1><center>SEARCH COLLEGES</center></h>
</div>
<div class="container">
  <form action="search.php" method="POST">
    <label for="sname"><b>States Name</b></label>
    <select id="sname" name="sname">
      <option value="delhi"><b>Delhi</b></option>
      <option value="punjab"><b>Punjab</b></option>
      <option value="harayana"><b>harayana</b></option>
      <option value="ap"><b>Arunachal Pradesh</b></option>
      <option value="jk"><b>jammu & kashmir</b></option>
    </select>
    <button class="button" name="submit"><b>Search</b></button>
</div>
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
echo "<b>"."Table created"."</b>"."<br>";

echo "</div>";
echo "<div class='container'>";
$sname1="";
if (isset($_POST['submit'])) {
      $sname1=$_POST['sname'];

}

echo "<div class='alert'>
  <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
  Successful!!<b>... Indicates a successfull submission of state details..</b>
</div>";

$sql = "select cname from state1 where sname='$sname1'";
$solution=array();
$result=mysqli_query($con,$sql);

$check_num_rows=mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result))
{

$solution[]=$row['cname'];
}
echo "<div>";

foreach($solution as $value){
    echo "<a href='college.php' target='_self'>" . "<b>" . $value . "</b>" . "</a>" . "<br>";}
  echo "</div>";
mysqli_close($con);
echo "</div>";


?>

</div>

</body>
</html>
