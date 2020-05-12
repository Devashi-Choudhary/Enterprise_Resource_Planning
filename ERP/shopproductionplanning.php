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
    $raw_material_p = $_REQUEST['raw_material_p'];
    $raw_material_a = $_REQUEST['raw_material_a'];
    $cutting_p = $_REQUEST['cutting_p'];
    $cutting_a = $_REQUEST['cutting_a'];
    $fitup_p = $_REQUEST['fitup_p'];
    $fitup_a = $_REQUEST['fitup_a'];
    $welding_p = $_REQUEST['welding_p'];
    $welding_a = $_REQUEST['welding_a'];
    $blasting_p = $_REQUEST['blasting_p'];
    $blasting_a = $_REQUEST['blasting_a'];
    $inspection_p = $_REQUEST['inspection_p'];
    $inspection_a = $_REQUEST['inspection_a'];
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
                $query = "INSERT INTO shopproductionplanning VALUES('$description[$count]','$qty[$count]','$raw_material_p[$count]','$raw_material_a[$count]','$cutting_p[$count]','$cutting_a[$count]','$fitup_p[$count]','$fitup_a[$count]','$welding_p[$count]','$welding_a[$count]','$blasting_p[$count]','$blasting_a[$count]','$inspection_p[$count]','$inspection_a[$count]','$remark[$count]')";
                
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
