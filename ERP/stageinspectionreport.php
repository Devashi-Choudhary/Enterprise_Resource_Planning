<?php

    $cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'tserp');
//      $_GET[];  - Get Request
//      $_POST[];  - Post Request
//      $_REQUEST[]; - GET / POST
//  print_r($_REQUEST);





if(isset($_REQUEST['submit']))
{//echo"welcome";
    $description = $_REQUEST['description'];
    $qty = $_REQUEST['qty'];
    $cutting = $_REQUEST['cutting'];
    $fitup = $_REQUEST['fitup'];
    $welding = $_REQUEST['welding'];
    $blasting = $_REQUEST['blasting'];
    $inspection = $_REQUEST['inspection'];
    $remark = $_REQUEST['remark'];
    
    $arrlength = count($description);

// for($x = 0; $x < $arrlength; $x++) {
//     echo $description[$x];
//     echo "<br>";
// }
 
    
    for($count = 0; $count < sizeof($description); $count++)
        {
            if(!empty($description[$count]))
            {
            /** $item = mysqli_real_escape_string($cnn,$item[$count]);
                $ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
                // echo $description[0];
                $query = "INSERT INTO stageinspectionreport VALUES('$description[$count]','$qty[$count]','$cutting[$count]','$fitup[$count]', '$welding[$count]', '$blasting[$count]', '$inspection[$count]', '$remark[$count]')";
                
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
