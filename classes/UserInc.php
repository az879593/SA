<?php

require "Dbh.php";
require "User.php";
require "UserController.php";
$User = new UserController();
echo $User->outputUserList();

?>