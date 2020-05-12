<?php

    $cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'priyank');
//      $_GET[];  - Get Request
//      $_POST[];  - Post Request
//      $_REQUEST[]; - GET / POST
//  print_r($_REQUEST);



echo"welcome";

if(isset($_REQUEST['submit']))
{echo"welcome";
    $customer = $_REQUEST['customer'];
    $wono = $_REQUEST['wono'];
     $pono = $_REQUEST['pono'];
    $inspection = $_REQUEST['inspection'];
    $page = $_REQUEST['page'];
    $drgno = $_REQUEST['drgno'];
    $date = $_REQUEST['date'];
    $description = $_REQUEST['description'];
    $supplier = $_REQUEST['supplier'];
    $desc = $_REQUEST['desc'];
    $size = $_REQUEST['size'];
    $orderqty = $_REQUEST['orderqty'];    
    $spec = $_REQUEST['spec'];
    $heatno = $_REQUEST['heatno'];
    $manufac = $_REQUEST['manufac'];    
    $testno = $_REQUEST['testno'];
    $remarks = $_REQUEST['remarks'];
    


 
     $sql =" INSERT INTO `materialidentificationreport` VALUES ('$customer',' $wono','$pono','$inspection','$page','$drgno','$date','$description','$supplier')";
       if (mysqli_query($cnn, $sql)) {
    echo "Table 1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($cnn);

}
    for($count = 0; $count < sizeof($desc); $count++)
        {
            if(!empty($desc[$count]))
            {
            /** $item = mysqli_real_escape_string($cnn,$item[$count]);
                $ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
                // echo $description[0];
                $query = "INSERT INTO `materialidentificationreport1` VALUES('$wono','$desc[$count]','$size[$count]','$orderqty[$count]','$spec[$count]','$heatno[$count]','$manufac[$count]','$testno[$count]','$remarks[$count]')";
                
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
