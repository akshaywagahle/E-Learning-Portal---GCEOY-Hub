<?php

$d = $_GET['c'];
$s = $_GET['s'];

?>

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


    /*  #nav {
    list-style:none inside;
    margin:0;
    padding:0;
    text-align:center;
    }

#nav li {
    display:block;
    border-radius: 10px;
    position:relative;
    float:left;
    background: #e62c73; /* menu background color 
    }

#nav li a {
    display:block;
    padding:0;
    text-decoration:none;
    width:200px; /* this is the width of the menu items 
    line-height:35px; /* this is the hieght of the menu items 
    color:#ffffff; /* list item font color 
    }
        
#nav li li a {font-size:80%;} /* smaller font size for sub menu items 
    
#nav li:hover {background:brown} /* highlights current hovered list item and the parent list items when hovering over sub menues */

.title2 {
	position: relative;
	padding-top: 20px;
	margin-left: 100px;
}
.title2 span{
	font-weight: 700;
	font-family: 'Open Sans', sans-serif;
	font-size: 30px;
	color: #2E3D49;
}
.title2 .shortdesc2 {
	padding: 10px;
	font-family: 'Open Sans', sans-serif;
	font-size: 15px;
	color: #2E3D49;
	margin-bottom: 10px;
}
/*Videos Section*/
.ccardbox2 {
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
  margin-bottom: 50px;
}

.dcard2 {
  margin-top: 30px;
  margin-left:20px;
  margin-right:20px;
  margin-bottom: 70px;
  width: 300px;
	height: 160px;
	background: linear-gradient(to right, #FA4B37, #DF2771);
	border-radius: 10px;
}
.dcard2:hover .fpart2 img {
	display: none;
}
.dcard2 .fpart2 { 
	width: inherit;
	height: 180px;
	background: #000;
	color: #000;
	text-align: left;
	border-top-right-radius: 100px;
	transform: translateY(-19px);
	box-shadow: 0 0 20px rgba(0,0,0,0.4);
	overflow: hidden;
}
.dcard2 .tag {
	position: relative;
	margin-left: 270px;
	top: 10px;
	color: #fff;
}
.dcard2 .fpart2 img {
	width: 100%;
	height: 100%;
}
.fpart2 iframe {
	height: inherit;
	width: inherit;
}

/*Watch Full Playlist*/
.click-me {
	justify-content: center;
	display: flex;
}
.click-me a {
	color: #DF2771;
	text-decoration: none;
	transition-duration: .5s;
	padding: 10px;
}
.click-me a:hover {
	background: #DF2771;
	color: #fff;
}

/*--- Sublist Styles ---
#nav ul {
    position:absolute;
    padding:0;
    left:0;
    display:none; /* hides sublists 
    }

#nav li:hover ul ul {display:none;} /* hides sub-sublists 

#nav li:hover ul {display:block;} /* shows sublist on hover 

#nav li li:hover ul {
    display:block; /* shows sub-sublist on hover 
    margin-left:200px; /* this should be the same width as the parent list item 
    margin-top:-35px; /* aligns top of sub menu with top of list item 
    } */
  </style>
</head>
<body>
<!-- Navigation Bar -->
<header id="header">
		<nav>
			<div class="logo"><h1 style="color:#F54541">GCOEY hub</h1></div>
			<ul>
				<li><a class="active" href="#">Home</a></li>
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
			<a class="get-started" href="http://localhost/elearning/student">Student Login</a>
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu" >
		</nav>

  </header>

  <div class="title2" id="c++" style="margin-top:-33%">
		<span>Start learning with Video Tutorials</span>
		<div class="shortdesc2">
			<p>Practice and Practice to become successfull</p>
		</div>
	</div>
	<center>
		<div class="ccardbox2">
      
      <?php

      $con = mysqli_connect("localhost","root","","elearning");

      $sql = "SELECT * from lessons where types='Video' and academic_year_id = '$s' and subject_id='$d'";

      $query = mysqli_query($con,$sql);
      $i=1;
      while ($row=mysqli_fetch_array($query)){
        $id = $row['id'];
        $ppt = $row['ppt_path'];
        $title = $row['title'];
        $links = $row['links'];
        $types = $row['types'];
        ?>

        <div class="dcard2"><span class="tag" ><?php echo $i++ ?></span>
      <div class="fpart2">
        <img src="image/video.jpg">
        <a href="<?php echo $links ?>"><button>Click to Open Video</button></a><br><br>
        <h3 style="color:#fff"><?php echo $title ?></h3>
    </div>
    <h3 style="color:#888"><?php echo $title ?></h3>
      </div>

<?php } ?>
		</div>
	</center>
</body>
</html>