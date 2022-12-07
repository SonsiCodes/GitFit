<?php
include 'includes/connect.php';

	if($_SESSION['customerSID']==session_id())
	{
		?>


<?php
	}
	else
	{
		if($_SESSION['adminSID']==session_id())
		{
			header("location:admin-page.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>
    

