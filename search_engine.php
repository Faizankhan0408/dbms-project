
<?php
$linked=mysqli_connect('localhost','root','','jk');
$name=$_POST['search'];
$terms=explode(" ",$name);
$query="Select link from search where ";
if(!$linked){ 
  die('Failed to connect to server'); 
  }
$query="SELECT * FROM search WHERE keyword LIKE '%$name%'";
    

$results = mysqli_query($linked,$query); 
while ($row = mysqli_fetch_assoc($results))
{$col=$row['link'];
  header("Location:$col");
  break;
}
?>
