<?php   function deleteTodoItem($user_id,$todo_text){
	  global $db;
	  $query = ' delete from todos where id = :todo_id and user_id =
	  :user_id';
	  $statement = $db->prepare($query);
	               $statement->bindValue(':userid',$user_id);
		                     $statement = $db->prepare($query);
        function add TodoItem($user_id,$todo_text){
	   global $db;
	   $query = 'insert into todos(user_id, todo_item) values
	   (:userid,:todo_text)';
	    $statement = $db->prepare($query);
	     $statement->bindValue(':userid',$user_id);
	      $statement = $db->prepare($query);
	       $statement->bindValue(':name' ,$username $statement->execute();
							                                          $result=
  										  $statement->fetchAll():
 												                                                $statement->closeCursor()i;


}


	function getTodoItems($user_id, $todo_text){
	global $db;
	$query = 'insert into todos(user_id, todo_item) values (:userid,

	function getTodoItems($user_id)

	global $db;
	$query = 'select * from todos where user_id= :userid";
	  $statement = $db->prepare($query);
	           $statement->bindValue(':name' ,$username);
		            $statement->execute();
			             $result= $statement->fetchAll():
				              $statement->closeCursor()i;

	function isUserValid($username,$password){
         global $db;
	 $query = 'select * from users where username = :name ';
	 $statement = $db->prepare($query);
	 $statement->bindValue(':name' ,$username);
	 $statement->execute();
	 $result= $statement->fetchAll():
	 $statement->closeCursor();

	 $count = $statement>rowCount();

	             if($count == 1)
		     setcookie('login', $username);
		     setcookie(my_id', $result [0] ['id']);
		     setcookie('islogged',true);
		     {
		     return true;
		     }else{
		     unset($_COOKIE['login']);
		     setcookie('login',false);
		     setcookie('islogged', false);
		     setcookie('id', false);
		     return false;


		     $query = 'insert into users (username, passwordHash)
		     values
		        (:name, :pass)';

			$statement = $db->prepare($query);
			         $statement->bindValue(':name' ,$username);
				  $statement->bindValue(':pass' ,$password);
				          $statement->execute();
					  $statement->closeCursor();
					  return false;

		



		{



}
	function createUser($username, $password){
	

	   global $db;
	   $query = 'select * from users where username = :name and
	   passwordHash = :pass';
	   $statement = $db->prepare($query);
	   $statement->bindValue(':name' ,$username);
	    $statement->bindValue(':passwordHash' ,$username);
	    $statement->execute();
	    $result= $statement->fetchAll():
	    $statement->closeCursor();

	    $count = $statement>rowCount();
	    if($count == 1){
	    return true;
	    }elese{
	    return false;
	    }

}

?>
