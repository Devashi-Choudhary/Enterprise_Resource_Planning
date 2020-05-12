<?php

	$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'erp');
//		$_GET[];  - Get Request
//		$_POST[];  - Post Request
//		$_REQUEST[]; - GET / POST
//	print_r($_REQUEST);




if(isset($_REQUEST['submit']))
{//echo"welcome";
    $date = $_REQUEST['Date'];
    $porderno = $_REQUEST['CustomerName&PurchaseOrderNo'];
	$pdetails= $_REQUEST['ProductDetails&DrawingNo'];
    $wono= $_REQUEST['TSIWorkOrderNo'];
    $nature= $_REQUEST['NatureofComplaints'];
  $qty =  $_REQUEST['Qty'];
     $cause= $_REQUEST['ActualCause'];
   $proposedaction=  $_REQUEST['ProposedCorrectiveaction/preventiveaction'];
     $review= $_REQUEST['Reviewoftheeffectivenessofthecorrective/preventiveaction'];
    
    $arrlength = count($porderno);

for($x = 0; $x < $arrlength; $x++) {
    echo $porderno[$x];
    echo "<br>";
}
   
    $sql =" INSERT INTO `customercomplaintanalysisregister` (`Date`,`Customer Name & Purchase Order No.`, `Product Details & Drawing No.`, `TSI Work Order No.`, `Nature of Complaints`,`Qty.`, `Actual Cause`, `Proposed Corrective action / preventive action`, `Review of the effectiveness of the corrective / preventive action`) VALUES (`$date`,`$porderno`, `$pdetails`, `$wono`, `$nature`,`$qty`, `$cause`, `$proposedaction`, `$review`)";
       if (mysqli_query($cnn, $sql)) {
    echo "Table 1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($cnn);

}
    
    
    
    
    $sql1 = "SELECT idn FROM customercomplaintanalysisregister";
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
				
				$query = "INSERT INTO `customercomplaintanalysisregister` (`Date`,`Customer Name & Purchase Order No.`, `Product Details & Drawing No.`, `TSI Work Order No.`, `Nature of Complaints`,`Qty.`, `Actual Cause`, `Proposed Corrective action / preventive action`, `Review of the effectiveness of the corrective / preventive action`) VALUES (`$date[$count]`,`$porderno[$count]`, `$pdetails[$count]`, `$wono[$count]`, `$nature[$count]`,`$qty[$count]`, `$cause[$count]`, `$proposedaction[$count]`, `$review[$count]`)";
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
