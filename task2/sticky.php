<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	
	if (empty($firstname) || empty($lastname)){
		echo "sorry,Blank entry not allowed";
	}
	else{
		echo "thank you for submission";
	}
}
?>
<html>
<body>
	  <form action="sticky.php" method="POST">
		 <label>
	<input type="text" name="firstname"  value="<?php if(isset($_POST['fistname'])) 
	      echo $_POST['firstname']; ?>">
			  </label>
			  <label>
			  <input type="text" name="lastname" >
			  </label>
	
		  <input type="submit" name="submit" value="Submit ">
		  </form>
	</body>
</html>