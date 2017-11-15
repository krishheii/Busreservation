<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<?php
$con=mysqli_connect("localhost","id3287709_bus","12345","id3287709_bus");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT name,adminno,branch,dfrom FROM bus2"; 

if ($result=mysqli_query($con,$sql))
  {
    echo"<table class='table'  > <thead><tr>
     <th>ID</th>
    <th>Name</th>
    <th>Admino</th> 
    <th>branch</th>
     <th>From</th>
  </tr> </thead> <tbody>  ";
  // Fetch one and one row
  $id=1;
  while ($row=mysqli_fetch_row($result))
    {
      
    echo" <tr> " ;
    echo" <td>$id</td>";
    echo" <td>$row[0]</td>";
    echo"<td>$row[1]</td> ";
    echo"<td>$row[2]</td>";
    echo"<td>$row[3]</td>";
    echo"</tr>";
    $id++; 
    echo"</n>";
  

    }
 echo "</tbody> </table> " ;   
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>