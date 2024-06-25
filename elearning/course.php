<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <link rel="shortcut icon" type="png" href="images/icon/favicon.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Comaptible" content="IE=edge">
  <title>GCOEY hub</title>
  <meta name="desciption" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="script.js"></script>
  <script src="../../code.jquery.com/jquery-3.2.1.js"></script>
  <script>
    $(window).on('scroll', function(){
        if($(window).scrollTop()){
          $('nav').addClass('black');
       }else {
       $('nav').removeClass('black');
     }
    })
  </script>
  <style type="text/css">
      
#nav {
  list-style: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

#nav > li {
  display: inline-block;
  position: relative;
  background-color: #e62c73;
}

#nav > li > a {
  display: block;
  padding: 10px 20px;
  color: #ffffff;
  text-decoration: none;
}

#nav > li:hover {
  background-color: brown;
}

/* Sublist Styles */
#nav li ul {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fff;
  padding: 0;
  margin: 0;
  border-radius: 0 0 5px 5px;
}

#nav li:hover > ul {
  display: block;
}

#nav li ul li {
  display: block;
  position: relative;
}

#nav li ul li a {
  padding: 10px 20px;
}

/* Sub-sublist Styles */
#nav li ul ul {
  top: 0;
  left: 100%;
}

#nav li ul li:hover > ul {
  display: block;
}

#nav li ul ul {
  display: none;
  position: absolute;
  top: 0;
  left: 100%;
  background-color: #fff;
  padding: 0;
  margin: 0;
  border-radius: 0 5px 5px 5px;
}

#nav li ul ul li {
  display: block;
}

#nav li ul ul li a {
  padding: 10px 20px;
}

#nav li ul ul li:hover {
  background-color: #f0f0f0;
}

#nav li ul ul ul {
  top: 0;
  left: 100%;
  margin: 0;
}

#nav li:hover > ul ul ul {
  display: none;
}
#nav > li:first-child {
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

#nav > li:last-child {
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}

  </style>
</head>
<body>
<!-- Navigation Bar -->
  <header id="header">
    <nav>
      <div class="logo"><h1 style="color:#F54541">GCOEY hub</h1></div>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <ul id="nav">
  <li><a href="#">Department</a>
    <ul>
      <li><a href="course.php?c=3">Civil Engineering &raquo;</a>
      <ul>
          <li><a href="course.php?c=3&s=2">Sem 1</a>
          <li><a href="course.php?c=3&s=3">Sem 2</a>
          <li><a href="course.php?c=3&s=4">Sem 3</a>
          <li><a href="course.php?c=3&s=5">Sem 4</a>
          <li><a href="course.php?c=3&s=6">Sem 5</a>
          <li><a href="course.php?c=3&s=7">Sem 6</a>
          <li><a href="course.php?c=3&s=8">Sem 7</a>
          <li><a href="course.php?c=3&s=9">Sem 8</a>
        </ul></li>
      <li><a href="course.php?c=6">Mechanical Engineering &raquo;</a>
      <ul>
          <li><a href="course.php?c=6&s=2">Sem 1</a>
          <li><a href="course.php?c=6&s=3">Sem 2</a>
          <li><a href="course.php?c=6&s=4">Sem 3</a>
          <li><a href="course.php?c=6&s=5">Sem 4</a>
          <li><a href="course.php?c=6&s=6">Sem 5</a>
          <li><a href="course.php?c=6&s=7">Sem 6</a>
          <li><a href="course.php?c=6&s=8">Sem 7</a>
          <li><a href="course.php?c=6&s=9">Sem 8</a>
        </ul></li>
      <li><a href="course.php?c=2">Computer Engineering &raquo;</a>
        <ul>
          <li><a href="course.php?c=2&s=2">Sem 1</a>
          <li><a href="course.php?c=2&s=3">Sem 2</a>
          <li><a href="course.php?c=2&s=4">Sem 3</a>
          <li><a href="course.php?c=2&s=5">Sem 4</a>
          <li><a href="course.php?c=2&s=6">Sem 5</a>
          <li><a href="course.php?c=2&s=7">Sem 6</a>
          <li><a href="course.php?c=2&s=8">Sem 7</a>
          <li><a href="course.php?c=2&s=9">Sem 8</a>
        </ul>
      </li>
      <li><a href="course.php?c=4">Electrical Engineering &raquo;</a>
      <ul>
          <li><a href="course.php?c=4&s=2">Sem 1</a>
          <li><a href="course.php?c=4&s=3">Sem 2</a>
          <li><a href="course.php?c=4&s=4">Sem 3</a>
          <li><a href="course.php?c=4&s=5">Sem 4</a>
          <li><a href="course.php?c=4&s=6">Sem 5</a>
          <li><a href="course.php?c=4&s=7">Sem 6</a>
          <li><a href="course.php?c=4&s=8">Sem 7</a>
          <li><a href="course.php?c=4&s=9">Sem 8</a>
        </ul></li>
      <li><a href="course.php?c=5">Electronics Engineering &raquo;</a>
      <ul>
          <li><a href="course.php?c=5&s=2">Sem 1</a>
          <li><a href="course.php?c=5&s=3">Sem 2</a>
          <li><a href="course.php?c=5&s=4">Sem 3</a>
          <li><a href="course.php?c=5&s=5">Sem 4</a>
          <li><a href="course.php?c=5&s=6">Sem 5</a>
          <li><a href="course.php?c=5&s=7">Sem 6</a>
          <li><a href="course.php?c=5&s=8">Sem 7</a>
          <li><a href="course.php?c=5&s=9">Sem 8</a>
        </ul></li>
    </ul>
  </li>
</ul>
        <li><a href="#about_section">About</a></li>
        <li><a href="#contactus_section">Contact</a></li>
        <li><a href="http://localhost/elearning/admin/">Admin</a></li>
        <li><a href="http://localhost/elearning/faculty/">Faculty</a></li>
      </ul>
			<!--<div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="images/icon/search.png" alt="search" onclick=slide()></div> -->
      <a class="get-started" href="http://localhost/elearning/student">Get Started</a>
      <img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu" >
    </nav>

  </header>

<?php

$cid = $_GET['c'];
$sid = $_GET['s'];

      $con = mysqli_connect("localhost","root","","elearning");

      $sql = "SELECT * from department where id='$cid'";

      $query = mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array($query)){

       $d = $row['department'];
   }
   ?>


    <center><h1 style="color:#DF2771;margin-top: -30%;"><?php echo $d ?></h1></center>
  <br><br>
	<!--<div class="rev-container">

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
              <div class="rev-card">

              
               <?php if($types =="Pdf"){ ?>

                <a href="<?php echo $links ?>">

                <?php }else { ?>
                <a href="video.php?id=<?php echo $id ?>">
                <?php } ?>
                  <h1 style="text-align: center;"><?php echo $title ?></h5>
                  <h6 style="text-align: center; text-decoration: none;color:gray"><?php echo $types ?></h6></a>
              </div>
          <?php } ?>
             -->

            <div class="course">
    <center><div class="cbox">
    <div class="det"><a href="http://localhost/elearning/pdf.php?c=<?php echo $cid; ?>&s=<?php echo $sid ?>"><img src="images/courses/book.png">PDF Notes/Books</a></div>

    <div class="det"><a href="http://localhost/elearning/video.php?c=<?php echo $cid; ?>&s=<?php echo $sid ?>"><img src="images/courses/d1.png">Video Tutorials</a></div>
    <div class="det"><a href="http://localhost/elearning/qa.php?c=<?php echo $cid; ?>&s=<?php echo $sid ?>"><img src="images/courses/book.png">Question Paper and Answers</a></div>

    <div class="det"><a href="http://localhost/elearning/assign.php?c=<?php echo $cid; ?>&s=<?php echo $sid ?>"><img src="images/courses/d1.png">Assignments</a></div>

    <div class="det"><a href="http://localhost/elearning/test.php?c=<?php echo $cid; ?>&s=<?php echo $sid ?>"><img src="images/courses/paper.png">Quiz Tests</a></div>
        </div>
    </center>
    
    
  </div>
    
</body>
</html>