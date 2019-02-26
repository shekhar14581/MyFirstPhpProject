<? php
   $cust_name = htmlentities($_POST['cust_name']);
   $cust_email = htmlentities($_POST['cust_email']);
   ?>
   <HTML>
   <HEAD>
   </HEAD>
   <BODY>
	<form method = "post" action = "final.php">
	Address:<input type ="text" size = "40" name ="cust_address"> <br>
	phone:<input type ="text" size="20" name="cust_phone"><br>
	<input type = "hidden" name="cust_name" value="<?php echo $cust_name;?>">
	<input type = "hidden" name="cust_email" value="<?php echo $cust_email;?>">
	<input type = "submit" name="submit2" value="proceed">
</form>


</body>
</html>