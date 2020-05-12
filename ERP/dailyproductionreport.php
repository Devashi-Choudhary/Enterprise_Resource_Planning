<?php

    $cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'tserp');
//      $_GET[];  - Get Request
//      $_POST[];  - Post Request
//      $_REQUEST[]; - GET / POST
//  print_r($_REQUEST);





if(isset($_REQUEST['submit']))
{//echo"welcome";
    $name = $_REQUEST['name'];
    $wno = $_REQUEST['wno'];
    $allocation = $_REQUEST['allocation'];
   
    $arrlength = count($name);

// for($x = 0; $x < $arrlength; $x++) {
//     echo $description[$x];
//     echo "<br>";
// }
 
    
    for($count = 0; $count < sizeof($name); $count++)
        {
            if(!empty($name[$count]))
            {
            /** $item = mysqli_real_escape_string($cnn,$item[$count]);
                $ptg = mysqli_real_escape_string($cnn,$ptg[$count]);**/
                // echo $description[0];
                $query = "INSERT INTO dailyproductionreport VALUES('$name[$count]','$wno[$count]','$allocation[$count]')";
                
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
