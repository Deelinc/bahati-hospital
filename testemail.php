<?php
//the message
$msg="First line of text\nSecond line of  text";

//use wordwrap() if lines are longer than characters
$msg= wordwrap($msg,70);

//send mail
mail("ogonda10715@gmail.com","Test",$msg);
?>