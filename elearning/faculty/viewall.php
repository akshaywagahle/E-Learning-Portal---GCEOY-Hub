<?php 

$lid = $_GET['id'];

echo $lid;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Lesson</title>
</head>
<body>

	<?php

              $con = mysqli_connect("localhost","root","","elearning");

      $sql = "SELECT * from lessons where id='$lid'";

      $query = mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array($query)){
        $id = $row['id'];
        $des = $row['description'];

        ?>
          
              <div class="col-sm-4" style="padding: 20px;">

                <?php echo $des ?>


              </div>



          <?php } ?>

</body>
</html>