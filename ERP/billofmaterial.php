<?php

	$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'tserp');

if(isset($_REQUEST['submit']))
{//echo"welcome";
    $wno = $_REQUEST['wno'];
    $drawing = $_REQUEST['drawing'];
     $desc= $_REQUEST['desc'];
    $spec= $_REQUEST['spec']; 
     $qty= $_REQUEST['qty'];
     $wt= $_REQUEST['wt'];
   
   for($count = 0; $count < sizeof($desc); $count++)
		{
			if(!empty($desc[$count]))
			{
				$query = "INSERT INTO `billofmaterial1` VALUES('$wno','$drawing','$desc[$count]','$spec[$count]','$qty[$count]','$wt[$count]')";
				if(!mysqli_query($cnn,$query))
				{
					$my_errors[] = $item[$count];
				} 

			
		
            }

}
}

?>
