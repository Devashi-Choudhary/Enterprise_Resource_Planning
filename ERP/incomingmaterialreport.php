<?php

	$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'priyank');
//		$_GET[];  - Get Request
//		$_POST[];  - Post Request
//		$_REQUEST[]; - GET / POST
//	print_r($_REQUEST);




if(isset($_REQUEST['submit']))
{//echo"welcome";
    $irno = $_REQUEST['irno'];
    $irda = $_REQUEST['irda'];
	$supnm= $_REQUEST['supnm'];
    $billno= $_REQUEST['billno'];
    $date1= $_REQUEST['date1'];
  $chlno =  $_REQUEST['chlnno'];
     $date2= $_REQUEST['date2'];
     $decp= $_REQUEST['decp'];
    $rqty= $_REQUEST['rqty'];
    $amt= $_REQUEST['amt'];
    
     for($count = 0; $count < sizeof($irno); $count++)
		{
			if(!empty($irno[$count]))
			{
			/**	$item = mysqli_real_escape_string($cnn,$item[$count]);
				$ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
				
				$query = " INSERT INTO `imr` (`irno`,`irda`,`supnm`,`billno`, `date1`, `chinno`, `date2`, `decp`,`rqty`,`amt`) VALUES ('$irno[$count]','$irda[$count]','$supnm[$count]','$billno[$count]','$date1[$count]','$chlno[$count]','$date2[$count]','$decp[$count]','$rqty[$count]','$amt[$count]')";
				if(!mysqli_query($cnn,$query))
				{
					$my_errors[] = $irno[$count];
				}

			}
		}

 



    
}




?>