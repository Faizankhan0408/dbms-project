
<?php
$linked=mysqli_connect('localhost','root','','jk');
$name=$_POST['search'];
$terms=explode(" ",$name);
$query="Select link from search where ";
if(!$linked){ 
  die('Failed to connect to server'); 
  }
$i=0;
foreach($terms as $each){
    $i++;
    if($i==1) 
    $query.="keyword like '$each%' ";
    else
    $query.="OR keyword like '$each%' ";
}
$results = mysqli_query($linked,$query); 
while ($row = mysqli_fetch_assoc($results))
{
  include $row['link'];
}
?>

