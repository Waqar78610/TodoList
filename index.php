<?php
require('db_connection.php')
require('db.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
	$action = "view_login_page";
	}
	if($action == "view_login_page")
{

	include('login.php');
	else if($action == 'test_user')
}

	$username = $_POST['reg_uname'];
	$password = $_POST['reg_password' ];
	$suc = isUserValid($username,$password);
	if($suc == true)
	{
	echo ' you are in right now!';
          include('list.php');
	}else{
header( "Location: badInfo.php");

  }
}else if ($action == 'registrar')
{

// echo "we want to create a new account";
$name = filter_input(INPUT_POST, 'reg_uname');
if(isset($name))
{
 	$pass = filter_input(INPUT_POST, 'reg_password');
	$exit = createUser($name, $pass);
	if($exit == true)
	{
		echo " the user name exits in the system, pls input a new one":
		}else {
			header("location: login.php");

	
include('user_exist.php');
}else {
  header("Location: login.php");
 }

         }

           }else if ($action == 'add')

{

	IF(isset($_POST['description'] and $_POST['description']=' ')
	{
		addTodoItem($_COOKIE['my_id'],$_POST['description']);
		}
		$result = getTodoItems($_COOKIE['my_id']);
		include('List.php');

	}
?>
