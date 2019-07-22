<?php
$conn=mysqli_connect('localhost','root','','software_house');
	if(isset(['submit']))
	{
		$name=$_POST['userName'];
		$email=$_POST['userEmail'];
		$phone=$_POST['userPhone'];
		$subject=$_POST['userMsg'];
	$qry="INSERT into form_data(name,email,phone,subject) VALUES("$name","$email","$phone","$subject")";
	$run=mysqli_query($conn,$qry);
	if($run==TRUE)
	{
		echo"Data Inserted";
	}
	else{
		echo"error":
	}
	}
?>

  <form method="POST" >
					    	<div>
						    	<span><label>FULL NAME</label></span>
						    	<span><input name="userName" type="text" id="input" placeholder="FUUL NAME" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL ID</label></span>
						    	<span><input name="userEmail" type="text" id="input"placeholder="EMAIL ID" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>MOBILE NUMBER</label></span>
						    	<span><input name="userPhone" type="text" id="input" placeholder="PHONE NUMBER" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg" required > </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"  required></span>
						  </div>
					    </form>