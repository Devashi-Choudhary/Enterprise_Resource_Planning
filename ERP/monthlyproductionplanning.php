<?php
$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'priyank');



if(isset($_REQUEST['submit']))
{//echo"welcome";
    $custnm = $_REQUEST['custnm'];
    $desc = $_REQUEST['desc'];
	
    $quant= $_REQUEST['quant'];
    $wono= $_REQUEST['wono'];
  $exdate=  $_REQUEST['exdate'];
     
 
   
   
    for($count = 0; $count < sizeof($desc); $count++)
        {
            if(!empty($desc[$count]))
            {
            /** $item = mysqli_real_escape_string($cnn,$item[$count]);
                $ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
                // echo $description[0];
                $query = "INSERT INTO `mthprodplan` VALUES('$custnm[$count]','$desc[$count]','$quant[$count]','$wono[$count]','$exdate[$count]')";
                
              if (mysqli_query($cnn, $query)) {
    echo "Table MyGuests created successfully";
                  // echo $description[0];
              }
                else
                {
                    echo "Data could not be inserted";
                }

            }
     
        }

}
?>
 