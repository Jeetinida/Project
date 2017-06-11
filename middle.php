<?php
session_start();


if(!isset($_SESSION['fav8']))
{
header('Location: welcome.php?id=loginfirst');


}
else
{
	$kk=rand();
	$kkk=$kk;
	
	header('Location: first.php?id='.$kkk.'');
		
}



?>