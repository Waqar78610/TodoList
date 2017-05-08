<?php
$dsn = 'mysql:host = sql1.njit.edu;dbname=wk6';
$username = 'wk6';
$password = 'dryden49'
try{
$db = name PDO($dsn,$username,$password);
}catch (PDOException $e){
$error_message = $e->getMessage();
echo $error_message;
exit();

}
?>
