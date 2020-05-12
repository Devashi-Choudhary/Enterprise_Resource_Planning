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
    $suppnm = $_REQUEST['suppnm'];
	$date1= $_REQUEST['date1'];
    $chln= $_REQUEST['chln'];
    $pono= $_REQUEST['pono'];
    $date2= $_REQUEST['date2'];
    $date3= $_REQUEST['date3'];
    $inspecdate= $_REQUEST['inspecdate'];
    $wono= $_REQUEST['wono'];
    
    
    
  
     $descsize= $_REQUEST['descsize'];
    $spec= $_REQUEST['spec']; 

     $obdescsize= $_REQUEST['obdescsize'];
     $obspec= $_REQUEST['obspec'];
     $recqty= $_REQUEST['recqty'];
     $accqty= $_REQUEST['accqty'];
     $remark	= $_REQUEST['remark'];
     
    
 // $item =  $_REQUEST['name'];
    // $ptg= $_REQUEST['mail'];
    
    /**$arrlength = count($item);

for($x = 0; $x < $arrlength; $x++) {
    echo $item[$x];
    echo "<br>";
}**/
   
    $sql =" INSERT INTO `incinspection` (`irno`,`suppnm`, `date1`, `chln`, `pono`,`date2`, `date3`, `inspecdate`, `wono`) VALUES ('$irno','$suppnm','$date1','$chln','$pono','$date2','$date3','$inspecdate','$wono')";
       if (mysqli_query($cnn, $sql)) {
    echo "Table 1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($cnn);

}
    
    
    
    
 /**  $sql1 = "SELECT idn FROM Client";
$result = mysqli_query($cnn, $sql1);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($idn==$row['idn'])
         echo "already present";
    }
} else {
    echo "0 results";
}**/
 
    
   for($count = 0; $count < sizeof($spec); $count++)
		{
			if(!empty($spec[$count]))
			{
			/**	$item = mysqli_real_escape_string($cnn,$item[$count]);
				$ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
				
				$query = "INSERT INTO `incinspection2`(`descsize`, `spec`,`obdescsize`,`obspec`,`recqty`,`accqty`,`remark`) VALUES('$descsize[$count]','$spec[$count]','$obdescsize[$count]','$obspec[$count]','$recqty[$count]','$accqty[$count]','$remark[$count]')";
				if(!mysqli_query($cnn,$query))
				{
					$my_errors[] = $spec[$count];
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
