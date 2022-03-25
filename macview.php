
<!DOCTYPE html>
<html>
<title>HOSTNAME MAC Address submission</title>

<style>

header { 
	position:fixed;
	width:100%;	
	background-color:#53554E;
	color:#0E0F19;
	left:0px;
	right:0px;
	top:0px;
	height:100px;
}
table, td, th {
Border: 1px solid black;
}

tr:nth-child(even) {
  background-color: #c8c8c8;
}
tr:hover {background-color: #D6EEEE;}




footer { 
   position:fixed;
   background-color:#53554E;
   left:0px;
   color:black;
   bottom:0px;
   height:40px;
   width:100%;	
   
   
}
body {
	padding:220px;
	background-color:#f1f1f1;
	
	
}
.button {
  border: solid 1px;
  padding: 10px 18px;
  text-decoration: none;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin-left: auto;
  margin-right: auto;
  font-family: Garamond, serif;
  cursor: pointer;
  }

.button1 {
background-color: #9b9d95;

color: #white;
  opacity: 0.6;
  transition: .3s;
   display: inline-block;
   text-decoration: none;
}
.button1:hover {opacity:1}

</style>


 <header>
 <h1 style="text-align:left; font-family: Garamond, serif;text-decoration:none;color:black;">Marker 1</h1>


<div style="position:fixed; right:10px; top:6px; font-size: 12px; color:grey;">
<tr>
<td><a href="index.html"><button class="button button1">Submit</button></td></a>
<td><a href="macview.php"><button class="button button1">View</button></td></a>
</div>

</tr>
</header>
<body>
<?php
$host    = "localhost";
$user    = "webserver";
$pass    = "password";
$db_name = "main";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = mysqli_connect($host, $user, $pass, $db_name);


$result = mysqli_query($connection, "SELECT * FROM MAC ORDER BY hostname");
$all_property = array();  


echo '<table class="data-table">
        <tr class="data-heading">';  
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  
    $all_property[] = $property->name;  
}
echo '</tr>'; 


while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; 
    }
    echo '</tr>';
}
echo "</table>";
?>



</div>
</p>

</div>
</body>

<footer>

<span> <p style="padding:-65px;text-align:right;font-family:Garamond, serif;">HOSTNAME</p> </span>




</footer>
</html>











