<?php

	$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'priyank');
//		$_GET[];  - Get Request
//		$_POST[];  - Post Request
//		$_REQUEST[]; - GET / POST
//	print_r($_REQUEST);




if(isset($_REQUEST['submit']))
{//echo"welcome";
    $date = $_REQUEST['date'];
    $reqno = $_REQUEST['reqno'];
	$item= $_REQUEST['item'];
    $qtyreq= $_REQUEST['qtyreq'];
    $appqty= $_REQUEST['appqty'];
  $remarks =  $_REQUEST['remarks'];
    
    
     for($count = 0; $count < sizeof($item); $count++)
		{
			if(!empty($item[$count]))
			{
			/**	$item = mysqli_real_escape_string($cnn,$item[$count]);
				$ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
				
				$query = " INSERT INTO `reqstr` (`date`,`reqno`,`item`,`qtyreq`, `appqty`, `remarks`) VALUES ('$date','$reqno','$item[$count]','$qtyreq[$count]','$appqty[$count]','remarks[$count]')";
				if(!mysqli_query($cnn,$query))
				{
					$my_errors[] = $item[$count];
				}

			}
		}

 



    
}


