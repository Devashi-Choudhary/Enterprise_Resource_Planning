<?php

	$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'tserp');

if(isset($_REQUEST['submit']))
{//echo"welcome";
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
	$contact= $_REQUEST['contact'];
	$qid= $_REQUEST['qid'];
    
   
     $item= $_REQUEST['item'];
    $project= $_REQUEST['project']; 
     $delivery= $_REQUEST['delivery'];
     $unit= $_REQUEST['unit'];
     $rate= $_REQUEST['rate'];
     $total	= $_REQUEST['total'];
     
   
    $sql =" INSERT INTO `quotation` VALUES ('$name','$address','$contact','$qid')";
       if (mysqli_query($cnn, $sql)) {
    echo "Table 1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($cnn);

}    
   for($count = 0; $count < sizeof($item); $count++)
		{
			if(!empty($item[$count]))
			{
				$query = "INSERT INTO `quotation1` VALUES('$qid','$item[$count]','$project[$count]','$delivery[$count]','$unit[$count]','$rate[$count]','$total[$count]')";
				if(!mysqli_query($cnn,$query))
				{
					$my_errors[] = $item[$count];
				} 

			
		
            }
 



    
  




}
}

?>
