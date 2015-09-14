<?php
$ichbineinname=$_POST['username'];
$ichbineinpasswort=$_POST['password'];

if($ichbineinname=='Konny' AND
$ichbineinpasswort=='123'){
  echo 'Hallo!';
}else {
  echo 'Falscher Name, du Schmock!';
}


 ?>
