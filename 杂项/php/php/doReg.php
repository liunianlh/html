<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$userInfo=compact('username','password','email');
print_r($userInfo);