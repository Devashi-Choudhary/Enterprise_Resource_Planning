
<html>
<head>
  <title>TSIERP</title>
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
  body {overflow-x: hidden;}
   .navbar
    {
      z-index: 10;
      width: 100%;
      position: fixed;
    }
  </style>
<script> 
    $(function(){
      $("#includedContent").load("header.html"); 
    });
    </script> 
</head>
<body>
 <div id="includedContent"></div>
 
<div class="col-sm-offset-5 col-sm-12">
  <h2><span style="font-family: verdana">viewestimate</span></h2>
                </div>
  <br>
   
<?php
$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'tserp');
//		$_GET[];  - Get Request
if(!$cnn)
    {
    echo ("There was an error while connecting to database");
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select `Customer`,`Supplier`, `pono`, `tsiwono`, `date` from shotsandblastingpaintingreport";

if ($result=mysqli_query($cnn,$sql))
  {
 
 
      ?>
      
       <table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							Customer
						</th>
						<th class="text-center">
				Supplier
						</th>
                        <th class="text-center">
							P.O. No.
						</th>
                        <th class="text-center">
							TSI W.O. No. 
						</th>
                        <th class="text-center">
							Date
						</th>
                        </th>
                        <th class="text-center">
							edit
						</th>
						
						

                    </tr>
				</thead>
          <?php  while ($row=mysqli_fetch_row($result))
    { ?>
           
				<tbody>
					<tr id='addr0'>
						<td>
						<input type="text" name='name[]'  placeholder='' class="form-control" value="<?php echo $row[0]; ?>" />
						</td>
						<td>
						<input type="text" name='name[]'  placeholder='' class="form-control" value="<?php echo $row[1]; ?>"/>
						</td>
						<td>
						<input type="text" name='mail[]' placeholder='' class="form-control"value="<?php echo $row[2]; ?>" />
						</td>
						<td>
						<input type="text" name='mail[]' placeholder='' class="form-control"value="<?php echo $row[3]; ?>" />
						</td>
						<td>
						<input type="text" name='mail[]' placeholder='' class="form-control"value="<?php echo $row[4]; ?>" />
						</td>
                        <td>
                            <form action='editshotsandblastingpaintingreport.php' method='post'>
                                <button type='submit' name='submit' value='<?php  echo $row[0] ?> '>Edit Purchase Order</button> </form>
						</td>
						

                        					</tr>
      
         
      
      <?php
      
    
//      printf("<form action='editestimate.php' method='post'> ");
//      printf("<button type='submit' name='submit' value='$row[0]'>Edit Purchase Order</button>");
//      printf("<input type='text' value='$row[1]'>");
    //  printf("</form>");
//      printf("</body></html>");
      printf("<br>");
    }
  // Free result set
  mysqli_free_result($result);
}
?>
                      </tbody>