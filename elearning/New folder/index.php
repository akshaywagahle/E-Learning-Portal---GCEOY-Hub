<!DOCTYPE html>
<style type="text/css">
 .s1:hover{
  background-color: #E32C69;
  color: white;o
  }
  .btnn:hover{
    background-color: #4CFF4C;
    color: white;
  }
</style>
<html lang="en" class="" style="height: auto;">
<?php require_once('config.php'); ?>
 <?php require_once('inc/header.php') ?>
  <body class="hold-transition layout-top-nav" style="background-color: #FFFFFF;">
    <div class="wrapper">
     <?php require_once('inc/topBarNav.php') ?>

              
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'portal';  ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 567.854px;">
        <!-- Content Header (Page header) -->
         <div style="border:0px solid red; width: 100%; height:500px; background-color: #FFFFFF; float:left;">
             <div class="div1" style="border: 0px solid black; width: 45%; height:400px; margin-top: 60px; margin-left:45px;float:left;margin-left: 10%;">
               <span style="font-size: 45px;"><b>The beautiful thing about learning is that nobody can take it away from you</b></span>

<br><br><p style="color:#C9C7C4; font-size:14px">Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, <br>beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research!</p>
             </div>
             <div class="div1" style="border: 0px solid black; width: 30%; height:400px; margin-top: 30px; float: left; margin-left: 100px;">
              <img class="svg" style="width:70%" src="image\unnamed.jpg"></img>
             </div>
             <!-- <div class="div3" style="border: 0px solid black; width: 4%; height:38px; margin-top:380px; margin-left: 35px;"><img class="play" style="width:100%; margin-top: -140px; " src="image\play.png"></img></div><span class="wat" style="font-size:22px; margin-left:100px; margin-top:-72px; float: left; "><b>Watch Now</b></span> -->
             
           </div> 
        <div class="content-header" style="margin-top:0px; background-color:#FFFFFF">..

          <div class="container" style="margin-top: 0%;">
            <div class="row mb-2">

              <div class="col-sm-1"></div>

              <?php

              $con = mysqli_connect("localhost","root","","elearning");

      $sql = "SELECT * from lessons limit 3";

      $query = mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array($query)){
        $id = $row['id'];
        $ppt = $row['ppt_path'];
        $title = $row['title'];
        $images = $row['images'];
        $links = $row['links'];
        $types = $row['types'];
        ?>
              <div class="col-sm-3" style="padding: 10px; margin-left: 20px; box-shadow: 2px 2px 3px gray;border:1px solid gray">


               <?php if($types =="Pdf"){ ?>

                <a href="<?php echo $links ?>">

                <?php }else { ?>
                
                <a href="video.php?id=<?php echo $id ?>">

                <?php } ?>
                  <img src="<?php echo $images ?>" width="100%"><br><br> <h5 style="text-align: center;"><?php echo $title ?></h5>
                  <h6 style="text-align: center; text-decoration: none;color:gray"><?php echo $types ?></h6></a>


              </div>



          <?php } ?>
         



             <!-- <div style="clear:both;"></div>
              <div class="col-sm-6">
                <br><br>
                <h1 class="m-0"><?php echo ucwords(str_replace("_", " ",$page)) ?></h1>
              </div>
              /.col -->
              <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="./admin?<?php echo $page ?>"><?php echo ucwords(str_replace("_", " ",$page)) ?></a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
              </div> -->
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
           

       <br><br><br><br><br><br><br><br><center><b class="f" style="font-size:30px">Popular Subjects on LearnEd</b></center> 
        <br><br><br><div class="s1" style="border:1px solid red; width:18%; height:90px; border-radius:20px; float: left;margin-left: 150px; margin-top:14px">
           <div class="im"  style="border: 0px solid black; width: 10%; height:20px; margin-left:20px;margin-top: 30px; float:left;">
             <img src="image/book.png" class="book" style="width:100%;"></img>
            <span class="jee" style="float: left; font-size:15px;margin-top: -25px;margin-left: 50px;">JEE Preparation</span> 
           </div>
        </div>
          <!-- /.container-fluid -->
        </div>
        <div class="s1" style="border:1px solid red; width:18%; height:90px; border-radius:20px; float:left; margin-left: 30px;">
          <div class="im"  style="border: 0px solid black; width: 10%; height:20px; margin-left:20px;margin-top: 30px; float:left;">
             <img src="image/d1.png" class="book" style="width:100%;"></img>
            <span class="jee" style="float: left; font-size:15px;margin-top: -25px;margin-left: 50px;">GATE Preparation</span> 
           </div>
        </div>

        <div class="s1" style="border:1px solid red; width:18%; height:90px; border-radius:20px; float:left; margin-left: 30px;">
          <div class="im"  style="border: 0px solid black; width: 10%; height:20px; margin-left:20px;margin-top: 30px; float:left;">
             <img src="image/paper.png" class="book" style="width:100%;"></img>
            <span class="jee" style="float: left; font-size:15px;margin-top: -25px;margin-left: 50px;">Sample Papers</span> 
           </div>
        </div>

        <div class="s1" style="border:1px solid red; width:18%; height:90px; border-radius:20px; float:left; margin-left: 30px;">
          <div class="im"  style="border: 0px solid black; width: 10%; height:20px; margin-left:20px;margin-top: 30px; float:left;">
             <img src="image/d1.png" class="book" style="width:100%;"></img>
            <span class="jee" style="float: left; font-size:15px;margin-top: -25px;margin-left: 50px;">Daily Quiz</span> 
           </div>
        </div>

        <!-- <div class="s1" style="border:1px solid red; width:18%; height:90px; border-radius:20px; float: left;margin-left: 155px; margin-top:20px">
          <div class="im"  style="border: 0px solid black; width: 10%; height:20px; margin-left:20px;margin-top: 30px; float:left;">
             <img src="image/computer.png" class="book" style="width:100%;"></img>
            <span class="jee" style="float: left; font-size:15px;margin-top: -25px;margin-left: 50px;">Computer Courses</span> 
           </div>
        </div>
          
        <div class="s1" style="border:1px solid red; width:18%; height:90px; border-radius:20px; float:left; margin-left: 30px;  margin-top: 20px;">
          <div class="im"  style="border: 0px solid black; width: 10%; height:20px; margin-left:20px;margin-top: 30px; float:left;">
             <img src="image/data.png" class="book" style="width:100%;"></img>
            <span class="jee" style="float: left; font-size:15px;margin-top: -25px;margin-left: 50px;">Data Structure</span> 
           </div>
        </div>

        <div class="s1" style="border:1px solid red; width:18%; height:90px; border-radius:20px; float:left; margin-left: 30px;  margin-top: 20px;">
          <div class="im"  style="border: 0px solid black; width: 10%; height:20px; margin-left:20px;margin-top: 30px; float:left;">
             <img src="image/algo.png" class="book" style="width:100%;"></img>
            <span class="jee" style="float: left; font-size:15px;margin-top: -25px;margin-left: 50px;">Algorithm </span> 
           </div>
        </div>

        <div class="s1" style="border:1px solid red; width:18%; height:90px; border-radius:20px; float:left; margin-left: 30px;  margin-top: 20px;">
          <div class="im"  style="border: 0px solid black; width: 10%; height:20px; margin-left:20px;margin-top: 30px; float:left;">
             <img src="image/projects.png" class="book" style="width:100%;"></img>
            <span class="jee" style="float: left; font-size:15px;margin-top: -25px;margin-left: 50px;">Projects</span> 
           </div>
        </div> -->

        </div> 
          
        </div>
        <div style="clear:both"></div>

         <!-- <br><br><br><br><br><center><b class="f" style="font-size:45px">About</b></center> 
        <br><br><br><div class="abot" style="border:0px solid black; width:100%;height: 450px; float: left;">
          <div class="imm" style="border:0px solid black; width:45%;height: 400px;">
            <img src="image/e3.jpg" style="width:90%; margin-left: 40px;"></img>
          </div>
          <div class="text" style="border:0px solid black; width:46%;height: 400px; float: left; margin-left:700px;margin-top: -380px;">
            <span class="what" style="font-size:25px"><b>What you think about us ?</b></span>
<center><br><br><p class="edu" style="font-size:20px">Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research.
Educational website can include websites that have games, videos or topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age.
Using HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript, we can make learning more easier and in a interesting way.</p></center>
          </div>
        </div> -->

        <br><br><br><br><br><center><b class="f" style="font-size:50px">Portfolio</b></center> 

        <center><br><br><p class="para" style="font-size: 20px;">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will <br>determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has <br>learned how to learn …and change.”</p></center>


        <div class="back" style="border:1px solid black; width:100%;height: 280px; background-color:black; color: white; font-size: 55px;">
         <center> <br>We're increasing this data every year</center>
        </div>
        <div class="en" style="border:1px solid black; width:18%;height: 160px; border-radius:20px;margin-left: 110px; color:#FA6146;font-size: 40px;margin-top: -50px; background-color: white;float: left;"><center><b>154</b></center>
        <span class="enn" style="color:black; font-size: 20px;"><center><b>Enrolled Students<b></center><span></div>

        <div class="rn" style="border:1px solid black; width:18%;height: 160px; border-radius:20px;margin-left: 50px; color:#FA6146;font-size: 40px;margin-top: -50px; background-color: white; float: left;"><center><b>62</b></center>
        <span class="enn" style="color:black; font-size: 20px;"><center><b>Total Course<b></center><span></div>
        
        <div class="en" style="border:1px solid black; width:18%;height: 160px; border-radius:20px;margin-left: 50px; color:#FA6146;font-size: 40px;margin-top: -50px; background-color: white; float:left;"><center><b>56</b></center>
        <span class="enn" style="color:black; font-size: 20px;"><center><b>Placed Students<b></center><span></div>

          <div class="en" style="border:1px solid black; width:18%;height: 160px; border-radius:20px;margin-left: 50px; color:#FA6146;font-size: 40px;margin-top: -50px; background-color: white; float:left;"><center><b>27</b></center>
        <span class="enn" style="color:black; font-size: 20px;"><center><b>Total Project<b></center><span></div>

        <div style="clear:both"></div>

        <!-- <br><br><br><br><br><br><br><br><br><center><h1 style="font-size:50px">We're the Creators</h1></center>
        <br><br><div class="pro" style="border:1px solid black; width:22%;height: 400px; border-radius:20px;margin-left: 330px; float:left;"><center><br><div class="photo" style="border:0px solid black; width:35%;height: 100px; border-radius:50px; font-size:14spx"><img class="pi" src="image/roshan.jpeg" style="width:100% ;height: 100px; border-radius:50px;"></img>
        <br><p>Roshan Kumar</p></center>
<center><p class="p" style="font-size:15px;margin-top:70px ">“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p></center>
<center><button class="btnn" type="button" style=" border:1px solid black;width:40%;padding: 10px; border-radius:20px;">Follow +</button></center>

        </div>
      </div>
        <br><br><div class="pro" style="border:1px solid black; width:22%;height: 400px; border-radius:20px;margin-left: 100px;margin-top: -52px; float:left;">
          <center><br><div class="photo" style="border:0px solid black; width:35%;height: 100px; border-radius:50px; font-size:14spx"><img class="pi" src="image/roshan2.jpeg" style="width:100% ;height: 100px; border-radius:50px;"></img>
        <br><p>Roshan Kumar</p></center>
<center><p class="p" style="font-size:15px;margin-top:70px ">“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p></center>
<center><button class="btnn" type="button" style=" border:1px solid black;width:40%;padding: 10px; border-radius:20px;">Follow +</button></center>

        </div>
        </div> -->



        <div style="clear:both"></div>
        
      <div class="backk" style="border:0px solid black;width:100%;height:800px;margin-top: 150px;font-size: 50px;color:white;background-image: url('image/hd.jpg');background-size:100% 100%; background-repeat: no-repeat;"><br><center>Services</center>

      <br> <div class="kk" style="border:0px solid green; width:23%;height:180px;border-radius:20px;margin-left: 170px;background-color: #9AA2AC;float: left;" >
         <div class="images" style="border:0px solid green; width:25%;height:60px;margin-left: 30px;margin-top: 50px;margin-left: 30px;" ><img src="image/com.png" style="width:100%"></img></div>
         <p class="free" style="font-size:15px;color:#EDEDEE;margin-top:-32px;margin-left:127px;">Free Online Computer Courses</p>
       </div>

       <div class="kk" style="border:0px solid green; width:23%;height:180px;border-radius:20px;margin-left: 30px;background-color: #9AA2AC;float: left;" >
         <div class="images" style="border:0px solid green; width:25%;height:60px;margin-left: 30px;margin-top: 50px;margin-left: 30px;" ><img src="image/brain.png" style="width:100%"></img></div>
         <p class="free" style="font-size:15px;color:#EDEDEE;margin-top:-32px;margin-left:127px;">Building concepts for Competative Exam</p>
       </div>

       <div class="kk" style="border:0px solid green; width:23%;height:180px;border-radius:20px;margin-left: 30px;background-color: #9AA2AC;float: left;" >
         <div class="images" style="border:0px solid green; width:25%;height:60px;margin-left: 30px;margin-top: 50px;margin-left: 30px;" ><img src="image/tuto.png" style="width:100%"></img></div>
         <p class="free" style="font-size:15px;color:#EDEDEE;margin-top:-32px;margin-left:127px;">Online Vedio Lectures</p>
       </div>

      <div class="kk" style="border:0px solid green; width:23%;height:180px;border-radius:20px;margin-left:170px;background-color: #9AA2AC;float: left; margin-top: 40px;" >
         <div class="images" style="border:0px solid green; width:25%;height:60px;margin-left: 30px;margin-top: 50px;margin-left: 30px;" ><img src="image/papers.jpg" style="width:100%"></img></div>
         <p class="free" style="font-size:15px;color:#EDEDEE;margin-top:-32px;margin-left:127px;">Sample Paper of various Competative exam</p>
       </div>

       <div class="kk" style="border:0px solid green; width:23%;height:180px;border-radius:20px;margin-left: 30px;background-color: #9AA2AC;float: left; margin-top: 40px;" >
         <div class="images" style="border:0px solid green; width:25%;height:60px;margin-left: 30px;margin-top: 50px;margin-left: 30px;" ><img src="image/p3.png" style="width:100%"></img></div>
         <p class="free" style="font-size:15px;color:#EDEDEE;margin-top:-32px;margin-left:127px;">Performance and Ranking Report</p>
       </div>

       <div class="kk" style="border:0px solid green; width:23%;height:180px;border-radius:20px;margin-left: 30px;background-color: #9AA2AC;float: left; margin-top: 40px;" >
         <div class="images" style="border:0px solid green; width:25%;height:60px;margin-left: 30px;margin-top: 50px;margin-left: 30px;" ><img src="image/dis.png" style="width:100%"></img></div>
         <p class="free" style="font-size:15px;color:#EDEDEE;margin-top:-32px;margin-left:127px;">Discussion with our Tutors & Mentors </p>
       </div>

      <!--  <div class="kk" style="border:1px solid green; width:23%;height:180px;border-radius:20px;margin-left: 340px;background-color: #9AA2AC;float: left; margin-top: 40px;" >
         <div class="images" style="border:0px solid green; width:25%;height:60px;margin-left: 30px;margin-top: 50px;margin-left: 30px;" ><img src="image/q1.png" style="width:100%"></img></div>
         <p class="free" style="font-size:15px;color:#EDEDEE;margin-top:-32px;margin-left:127px;">Daily Brain teasing quesions to improve IQ </p>
       </div>

       <div class="kk" style="border:1px solid green; width:23%;height:180px;border-radius:20px;margin-left: 30px;background-color: #9AA2AC;float: left; margin-top: 40px;" >
         <div class="images" style="border:0px solid green; width:25%;height:60px;margin-left: 30px;margin-top: 50px;margin-left: 30px;" ><img src="image/help.png" style="width:100%"></img></div>
         <p class="free" style="font-size:15px;color:#EDEDEE;margin-top:-32px;margin-left:127px;">24*7 Online Support</p>
       </div> -->
      </div>

     <!--  <br><br><div class="stu" style="border:1px solid green; width:100%;height:900px;background-color: #F8F8F8;font-size: 33px;">
      <br><br> <center>What the Students Say About Us?</center>
      <br><div class="re" style="border:1px solid green; width:40%;height:240px;margin-left: 400px; background-color: #FFFFFF;">
        <div class="ddd" style="border:1px solid black; width:30%;height: 240px; ">
         <center><div class="photo" style="border:0px solid black; width:60%;height: 100px; border-radius:50px; font-size:14spx"><img class="pi" src="image/roshan2.jpeg" style="width:100% ;height: 100px; border-radius:50px;"></img>
             <h3 style="color:white;font-size: 15px;">Sophie Daniel</h3>

Java

        </div></center> -->
     <!--  </div> 
      </div> -->
        <!-- /.content-header -->
        <!-- Main content -->
        <br><br><br><br>
        <section class="content" style="background-color:#FFFFFF">
          <div class="container" >
            <?php 
              if(!file_exists($page.".php") && !is_dir($page)){
                  include '404.html';
              }else{
                if(is_dir($page))
                  include $page.'/index.php';
                else
                  include $page.'.php';

              }
            ?>
          </div>
        </section>
        <!-- /.content -->
        <!-- <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
      </div> -->
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
</html>
