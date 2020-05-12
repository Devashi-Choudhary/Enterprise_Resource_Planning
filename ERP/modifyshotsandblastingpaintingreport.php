
<?php
$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'tserp');
//		$_GET[];  - Get Request
if(!$cnn)
    {
    echo ("There was an error while connecting to database");
    die("Connection failed: " . mysqli_connect_error());
}

// if(!$cnn)
//     {
//     echo ("There was an error while connecting to database");
//     die("Connection failed: " . mysqli_connect_error());
// }



if(isset($_REQUEST['submit']))
{//echo"welcome";
    $Customer = $_REQUEST['customer'];  
    $Supplier = $_REQUEST['supplier'];
    echo $Customer;
    $sqli = "DELETE FROM `shotsandblastingpaintingreport` WHERE Customer='$Customer'";
 //   $sqli1 = "DELETE FROM `item` WHERE idn='$idn'";
    $retval = mysqli_query( $cnn,$sqli);
if(! $retval )
{
  echo "inserted data successfully\n";
}
echo "Deleted data successfully\n";
// $retval = mysqli_query( $cnn,$sqli1);
// if(! $retval )
// {
//   echo "inserted data successfully\n";
// }
// echo "Deleted data from table 2 successfully\n";




    $pono = $_REQUEST['pono'];
	$tsiwono= $_REQUEST['wono'];
    $date= $_REQUEST['date'];
    $desc = $_REQUEST['desc'];
    $amendmentno = $_REQUEST['amendmentno'];
    $dragno = $_REQUEST['dragno'];
    $date1 = $_REQUEST['date1'];
    $inspecdate = $_REQUEST['inspecdate'];
    $desc1 = $_REQUEST['desc1'];
    $qty = $_REQUEST['qty'];    
    $dragno1 = $_REQUEST['dragno1'];
    $page = $_REQUEST['page'];
     $sql =" INSERT INTO `shotsandblastingpaintingreport` VALUES (`$Customer`,`$Supplier`, `$pono`, `$tsiwono`, `$date`,'$desc','$amendmentno','$dragno','$date1','$inspecdate','$desc1','$qty','$dragno1','$page')";
       if (mysqli_query($cnn, $sql)) {
    echo "Table 1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($cnn);

}
    
  //    for($count = 0; $count < sizeof($item); $count++)
		// {
		// 	if(!empty($item[$count]))
		// 	{
		// 	/**	$item = mysqli_real_escape_string($cnn,$item[$count]);
		// 		$ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
				
		// 		$query = "INSERT INTO item (`idn`, `item`,`ptg`) VALUES('$idn','$item[$count]','$ptg[$count]')";
		// 		if(!mysqli_query($cnn,$query))
		// 		{
		// 			$my_errors[] = $item[$count];
                  
		// 		}
  // echo "table 2 created";
		// 	}
		// }
    
    
    
    
}
?>