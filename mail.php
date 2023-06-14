<?php
$to="susmitaagarwal1287@gmail.com";
$subject="test";
$msg="hello! 1st test";
$from="From: susmitaagarwal1287@gmail.com";
if(mail($to,$subject,$msg,$from))
{
	echo "email sent.";
}
else{
	echo "Not sent.";
}
?>