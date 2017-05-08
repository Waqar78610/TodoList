<?php

include ("tod1.php")
$dbh = mysql_connect ( $hostname, $username, $password )
	or die ("Unable to connect to MySQL database");
print "Connected to MySQL<br>";
mysql_select_db( $project );

$user = $_GET [ "user" ] ;
$password = $_GET ["password"] ;
$user = mysql_real_escape_string($password);
$password = mysql_real_escape_string($password);

	$data="select * from credentials where username like '%($user)%' ";
	$result = mysql_query ( $data ) ;
	(mysql_num_rows ($result)>0) or die ("Invalid password");

	$pass_ret=mysql_fetch_array($result);
	$testpas=$pass_ret['password'];
	($testpas == $password) or die("Invalid password") ;

	$email = mysql_real_escape_string($email);
	$email check="select * from authorization where email like '%{$email)%'
	";
	$email_result = mysql_query ( $email_check );
	(mysql_num_rows (email_result)>0) or die("Invalid email address.");
$priority = $_GET [ "priority"] ;
$catagory = $_GET [ "catagory"] ;
$descpt = $_GET [descpt"] ;
$date = date("l dS \of F Y h:i:s A") ;

$s="insert into incident values (NULL, '$user', '$priority', '$catagory',
'$descpt', CURDATE (), CURTIME())";

mysql_query ( $s ) or die ( mysql_error() );
$reports ="update credentials Set num reported = (num_reported + 1) where
username = '$user'";
mysql_query($reports) or die ( mysql_error() );

if( $current < $limit)
{
$reg = "An email copy was mailed to $email as you requested " ;
$email_from = 'bwaqar78610@outlook.com';
$email_subject = $Incident submission Report ";
$email_body = "

Username:
priority:
Category:
Descreption:
Incident number:
Date
$to = $email;
$headers = "From: $email_from \r\n";
mail($to,$email_subject, $email_body,$headers);
$cur_update = "update authorization Set current = (current + 1) where email =
'$email'";
mysql_query($cur_update) or die ( mysql_error() );
}
else
{
print "<strong You have reached your email limit. Therefore, you are not
authorized to send any more emails</strong>
}
}
else if ($choice == "no") {$req = "No email copy was mailed to you" ;}

$sql = "SELECT max(number) from incident";
$inc_num = mysql_query($sql) or die ("Error in query: $query. "
.mysql_error());
$array = mysql_fetch_array($inc_num);
$in=$array[0];

?>
<html>
<head> <title> Submission Report </title></head>
<body>

	<table>
<tr><th> colspan = 2> Submission Report </th></tr>
<tr><td> Dear:
			<?php print "$user"?> Your Incident <?php print"
Number $in "?> reported on <?php print" $date"?> is as follows: </td></tr>
	<tr> <td> </td> </tr>	
	<?php print"--------$priority" ?></td> </tr>
	<tr> <td> Priority:		<?php print"------$priority" ?>/td></tr>
	<tr> <td> Category:	<?php print"---------------$catagory" ?> </td></tr>
	<tr> <td> Descreption:	<?php print"---------------$descpt" ?></td></tr>
	<tr> <td> Email request status: <?php print"------------$req" ?> </td></tr>
	<FORM><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return
	true;"></FORM>
	</table>
	</body>
</html>
