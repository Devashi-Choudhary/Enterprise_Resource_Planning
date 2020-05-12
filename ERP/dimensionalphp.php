<?php

	$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'priyank');
//		$_GET[];  - Get Request
//		$_POST[];  - Post Request
//		$_REQUEST[]; - GET / POST
//	print_r($_REQUEST);




if(isset($_REQUEST['submit']))
{//echo"welcome";
    $cust = $_REQUEST['cust'];
    $supp = $_REQUEST['supp'];
	$pono= $_REQUEST['pono'];
    $wono= $_REQUEST['wono'];
    $date1= $_REQUEST['date1'];
    $desc= $_REQUEST['desc'];
    $amd= $_REQUEST['amd'];
    $tsidrgno= $_REQUEST['tsidrgno'];
    $date2= $_REQUEST['date2'];
    $qty= $_REQUEST['qty'];
    $desc2= $_REQUEST['desc2'];
    $pgno= $_REQUEST['pgno'];
    $drgno= $_REQUEST['drgno'];
     $dimndg= $_REQUEST['dimn/dg'];
    $sno2= $_REQUEST['sno2']; 
    $sno3= $_REQUEST['sno3'];
     $sno4= $_REQUEST['sno4'];
     $sno5= $_REQUEST['sno5'];
     $sno6= $_REQUEST['sno6'];
     $sno7= $_REQUEST['sno7'];
     $sno8= $_REQUEST['sno8'];
     $sno9= $_REQUEST['sno9'];
     $sno10= $_REQUEST['sno10'];
     $sno11= $_REQUEST['sno11'];
     $remark= $_REQUEST['remark'];
        
    
 // $item =  $_REQUEST['name'];
    // $ptg= $_REQUEST['mail'];
    
    /**$arrlength = count($item);

for($x = 0; $x < $arrlength; $x++) {
    echo $item[$x];
    echo "<br>";
}**/
   
    $sql =" INSERT INTO `dimensionalrpt1` (`cust`,`supp`, `pono`, `wono`, `date1`,`desc`, `amd`, `tsidrgno`, `date2`, `qty`, `desc2`, `pgno`, `drgno`) VALUES ('$cust','$supp','$pono','$wono','$date1','$desc','$amd','$tsidrgno','$date2','$qty','$desc2','$pgno','$drgno')";
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
 
    
   for($count = 0; $count < sizeof($sno2); $count++)
		{
			if(!empty($sno2  [$count]))
			{
			/**	$item = mysqli_real_escape_string($cnn,$item[$count]);
				$ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
				
				$query = "INSERT INTO dimensionalrpt2 (`wono`,`dimn/dg`, `sno2`,`sno3`,`sno4`,`sno5`,`sno6`,`sno7`,`sno8`,`sno9`,`sno10`,`sno11`,`remark`) VALUES('$wono','$dimndg[$count]','$sno2[$count]','$sno3[$count]','$sno4[$count]','$sno5[$count]','$sno6[$count]','$sno7[$count]','$sno8[$count]','$sno9[$count]','$sno10[$count]','$sno11[$count]','$remark[$count]')";
				if(!mysqli_query($cnn,$query))
				{
					$my_errors[] = $sno2[$count];
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
