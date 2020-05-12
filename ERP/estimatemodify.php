
<?php
$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'tserp');
//		$_GET[];  - Get Request
if(!$cnn)
    {
    echo ("There was an error while connecting to database");
    die("Connection failed: " . mysqli_connect_error());
}

if(!$cnn)
    {
    echo ("There was an error while connecting to database");
    die("Connection failed: " . mysqli_connect_error());
}



if(isset($_REQUEST['submit']))
{//echo"welcome";
    $idn = $_REQUEST['idn'];
    $title = $_REQUEST['title'];
    echo $idn;
    $sqli = "DELETE FROM `client` WHERE idn='$idn'";
    $sqli1 = "DELETE FROM `item` WHERE idn='$idn'";
    $retval = mysqli_query( $cnn,$sqli);
if(! $retval )
{
  echo "inserted data successfully\n";
}
echo "Deleted data successfully\n";
$retval = mysqli_query( $cnn,$sqli1);
if(! $retval )
{
  echo "inserted data successfully\n";
}
echo "Deleted data from table 2 successfully\n";




    $title = $_REQUEST['title'];
	$edate= $_REQUEST['edate'];
    $client= $_REQUEST['client'];
    $project= $_REQUEST['project'];
  $item =  $_REQUEST['name'];
     $ptg= $_REQUEST['mail'];
     $sql =" INSERT INTO `Client` (`idn`,`title`, `edate`, `client`, `project`) VALUES ('$idn','$title','$edate','$client','$project')";
       if (mysqli_query($cnn, $sql)) {
    echo "Table 1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($cnn);

}
    
     for($count = 0; $count < sizeof($item); $count++)
		{
			if(!empty($item[$count]))
			{
			/**	$item = mysqli_real_escape_string($cnn,$item[$count]);
				$ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
				
				$query = "INSERT INTO item (`idn`, `item`,`ptg`) VALUES('$idn','$item[$count]','$ptg[$count]')";
				if(!mysqli_query($cnn,$query))
				{
					$my_errors[] = $item[$count];
                  
				}
  echo "table 2 created";
			}
		}
    
    
    
    
}
?>