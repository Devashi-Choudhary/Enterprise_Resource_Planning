<?php

	$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'priyank');
//		$_GET[];  - Get Request
//		$_POST[];  - Post Request
//		$_REQUEST[]; - GET / POST
//	print_r($_REQUEST);




if(isset($_REQUEST['submit']))
{//echo"welcome";
    $idn = $_REQUEST['idn'];
    $title = $_REQUEST['title'];
	$edate= $_REQUEST['edate'];
    $client= $_REQUEST['client'];
    $project= $_REQUEST['project'];
  $item =  $_REQUEST['name'];
     $ptg= $_REQUEST['mail'];
    
    $arrlength = count($item);

for($x = 0; $x < $arrlength; $x++) {
    echo $item[$x];
    echo "<br>";
}
   
    $sql =" INSERT INTO `Client` (`idn`,`title`, `edate`, `client`, `project`) VALUES ('$idn','$title','$edate','$client','$project')";
       if (mysqli_query($cnn, $sql)) {
    echo "Table 1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($cnn);

}
    
    
    
    
    $sql1 = "SELECT idn FROM Client";
$result = mysqli_query($cnn, $sql1);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($idn==$row['idn'])
         echo "already present";
    }
} else {
    echo "0 results";
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

			}
		}

 



    
  




}
/**$sql = "CREATE TABLE Client
(
ID int NOT NULL AUTO_INCREMENT,
title varchar(255) NOT NULL,
edate varchar(255),
client varchar(255),
project varchar(255),
PRIMARY KEY (ID)
)";
if (mysqli_query($cnn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($cnn);

mysqli_close($cnn);

}
}**/

?>
