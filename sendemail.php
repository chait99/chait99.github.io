<?php


if($_POST['message']) {


mail("emailchait@gmail.com", "Here is the subject line",


$_POST['message']. "From: " + $_POST['email']);


}


?>