<?php
echo "<h1> To do list system</h1></ br>";
echo "Welcome, ".$_COOKIE['login] .'< br/>';
echo "Below you may find your to-do items: ";
echo "</ br> </br>";



?>

<html>
<body>
<table.
<tr>
<?php foreach($result as $res):?>
<tr>
  <td> <?php echo $res ['todo_item']; ?> <br> </td>
  </tr>
<?php endforeach;?>
</br>
</table>
<form method = 'list action = 'index.php'>
	<strong> Description: </strong> <input type='text'
	name='description'/><br>
	<input type = 'hidden' name = 'action' value='add'><br>
	<input type="submit" value="Add"/>
</body>
</html>
