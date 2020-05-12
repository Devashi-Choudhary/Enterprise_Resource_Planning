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
 
    <?php

$cnn = mysqli_connect("localhost","root","");
        mysqli_select_db($cnn,'tserp');
//		$_GET[];  - Get Request
if(!$cnn)
    {
    echo ("There was an error while connecting to database");
    die("Connection failed: " . mysqli_connect_error());
}

if(!$cnn)
    {
    echo ("There was an error while connecting to database");
    die("Connection failed: " . mysqli_connect_error());
}

$idn = $_REQUEST['submit'];


$query = "Select client.idn, client.title, client.edate, client.client, client.project, item.item, item.ptg from client , item where client.idn = '$idn' AND client.idn=item.idn ";

$result=mysqli_query($cnn,$query);
$row=mysqli_fetch_row($result);
?>
<div class="col-sm-offset-5 col-sm-12">
  <h2><span style="font-family: verdana">ESTIMATE</span></h2>
                </div>
    
  <form role="form" action="estimatemodify.php">
<div class="form-group row">
      <div class="col-md-2 col-md-offset-2">
      <label for="Title">ID</label></div>
      <div class="col-md-2 col-md-offset-right-1">
        <input type="text" class="form-control" id="" placeholder="Enter Title" name="idn" value="<?php echo $row[0]; ?>"></div>
    </div>
      
      <div class="form-group row">
      <div class="col-md-2 col-md-offset-2">
      <label for="Title">Title</label></div>
      <div class="col-md-7 col-md-offset-right-1">
        <input type="text" class="form-control" id="" placeholder="Enter Title" name="title" value="<?php echo $row[1]; ?>"></div>
    </div>
       <div class="form-group row">
      <div class="col-md-2 col-md-offset-2">
      <label for="date">Estimate Dated: </label></div>
      <div class="col-md-7 col-md-offset-right-1">
        <textarea class="form-control" rows="3" id="" placeholder="Enter EST. DATED" name="edate" value=""><?php echo $row[2]; ?></textarea></div>
    </div>
      <div class="form-group row">
      <div class="col-md-2 col-md-offset-2">
      <label for="client">Client</label></div>
      <div class="col-md-7 col-md-offset-right-1">
        <textarea class="form-control" rows="3" id="" placeholder="Enter Client Name" name="client" value=""><?php echo $row[3]; ?></textarea></div>
    </div>
      
      <div class="form-group row">
      <div class="col-md-2 col-md-offset-2">
      <label for="client">Project</label></div>
      <div class="col-md-7 col-md-offset-right-1">
        <textarea class="form-control" rows="3" id="" placeholder="Enter Project" name="project" value=""><?php echo $row[4]; ?></textarea></div>
    </div>
 
        <div class="form-group">
      <label for="Project">Project</label>
     
    </div> 
 
      
   
			<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							Item
						</th>
						<th class="text-center">
				With PTG.(in Rs/- Per Kg.)


						</th>
						

                    </tr>
				</thead>
				<tbody>
                    
<?php
                    $count=1;
if ($result1 = mysqli_query($cnn,$query))
  {
    
  
  while ($row=mysqli_fetch_row($result1))
    {
      ?>
					<tr id='addr0'>
						<td>
                            
      <?php echo $count++ ;?>
						</td>
						<td>
						<input type="text" name='name[]'  placeholder='Name' class="form-control"  value="<?php echo $row[5]; ?>" />
						</td>
						<td>
						<input type="text" name='mail[]' placeholder='' class="form-control"  value="<?php echo $row[6]; ?>" />
						</td>
						

    
        <?php
  }
  mysqli_free_result($result);
}
else
    {
    echo"fetching failed";
}
?>
                    
				</tbody>
			</table>
		<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
      <br>
      <br>
      <br>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
            </div>           
            </div>

    
  
<script type="text/javascript">
      $(document).ready(function(){
      var i=4;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name[]"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='mail[]"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td> </td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
          $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name[]"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='mail[]"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td> </td>");

     $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
     i++; 
          $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name[]"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='mail[]"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td> </td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
         
  });
     $("#delete_row").click(function(){
    	 if(i>5){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});

</script>
  
  
  
  
  <link href="css/font-awesome.min.css" rel="stylesheet">
</body>
</html>