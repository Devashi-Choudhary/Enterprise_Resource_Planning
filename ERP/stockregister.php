<?php

	$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'priyank');
//		$_GET[];  - Get Request
//		$_POST[];  - Post Request
//		$_REQUEST[]; - GET / POST
//	print_r($_REQUEST);




if(isset($_REQUEST['submit']))
{//echo"welcome";
    $atid = $_REQUEST['aid'];
    $date = $_REQUEST['date'];
	$particular= $_REQUEST['particular'];
    $billno= $_REQUEST['billno'];
    $receipt= $_REQUEST['receipt'];
  $issue =  $_REQUEST['issue'];
     $balance= $_REQUEST['balance'];
     $remark= $_REQUEST['remark'];
    
     for($count = 0; $count < sizeof($date); $count++)
		{
			if(!empty($date[$count]))
			{
			/**	$item = mysqli_real_escape_string($cnn,$item[$count]);
				$ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
				
				$query = " INSERT INTO `stkreg` (`atid`,`date`,`particular`,`billno.`, `receipt`, `issue`, `balnce`, `remark`) VALUES ('$atid','$date[$count]','$particular[$count]','$billno[$count]','$receipt[$count]','$issue[$count]','$balance[$count]','$remark[$count]')";
				if(!mysqli_query($cnn,$query))
				{
					$my_errors[] = $date[$count];
				}

			}
		}

 



    
}




?>