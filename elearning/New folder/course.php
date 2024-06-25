<?php

$cid = $_GET['c'];

      $con = mysqli_connect("localhost","root","","elearning");

      $sql = "SELECT * from department where id='$cid'";

      $query = mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array($query)){

       $d = $row['department'];
   }
   ?>


   <center><h1 style="color:brown;"><?php echo $d ?></h1></center>

	<div class="container" style="border:0px solid red">

		<?php

              $con = mysqli_connect("localhost","root","","elearning");

      $sql = "SELECT * from lessons";

      $query = mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array($query)){
        $id = $row['id'];
        $ppt = $row['ppt_path'];
        $title = $row['title'];
        $images = $row['images'];
        $links = $row['links'];
        $types = $row['types'];
        ?>
              <div class="col-sm-3" style="padding: 10px; margin-left: 20px; box-shadow: 2px 2px 3px gray;border:1px solid gray;width: 20%;float: left;">

                

               <?php if($types =="Pdf"){ ?>

                <a href="<?php echo $links ?>">

                <?php }else { ?>
                
                <a href="video.php?id=<?php echo $id ?>">

                <?php } ?>
                  <img src="<?php echo $images ?>" width="100%"><br><br> <h5 style="text-align: center;"><?php echo $title ?></h5>
                  <h6 style="text-align: center; text-decoration: none;color:gray"><?php echo $types ?></h6></a>


              </div>



          <?php } ?>
            

             

              
         
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
           


</body>
</html>