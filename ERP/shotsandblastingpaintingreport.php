<?php

    $cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'tserp');
//      $_GET[];  - Get Request
//      $_POST[];  - Post Request
//      $_REQUEST[]; - GET / POST
//  print_r($_REQUEST);





if(isset($_REQUEST['submit']))
{//echo"welcome";
    $customer = $_REQUEST['customer'];
    $supplier = $_REQUEST['supplier'];
    $pono = $_REQUEST['pono'];
    $wono = $_REQUEST['wono'];
    $date = $_REQUEST['date'];
    $desc = $_REQUEST['desc'];
    $amendmentno = $_REQUEST['amendmentno'];
    $dragno = $_REQUEST['dragno'];
    $date1 = $_REQUEST['date1'];
    $inspecdate = $_REQUEST['inspecdate'];
    $desc1 = $_REQUEST['desc1'];
    $qty = $_REQUEST['qty'];    
    $dragno1 = $_REQUEST['dragno1'];
    $page = $_REQUEST['page'];

    $arrlength = count($customer);

// for($x = 0; $x < $arrlength; $x++) {
//     echo $description[$x];
//     echo "<br>";
// }
 
    
    for($count = 0; $count < sizeof($customer); $count++)
        {
            if(!empty($customer[$count]))
            {
            /** $item = mysqli_real_escape_string($cnn,$item[$count]);
                $ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
                // echo $description[0];
                $query = "INSERT INTO shotsandblastingpaintingreport VALUES('$customer[$count]','$supplier[$count]','$pono[$count]','$wono[$count]','$date[$count]','$desc[$count]','$amendmentno[$count]','$dragno[$count]','$date1[$count]','$inspecdate[$count]','$desc1[$count]','$qty[$count]','$dragno1[$count]','$page[$count]')";
                
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
