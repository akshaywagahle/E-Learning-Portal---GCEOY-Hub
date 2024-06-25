<style type="text/css">
  #nav {
    list-style:none inside;
    margin:0;
    padding:0;
    text-align:center;
    }

#nav li {
    display:block;
    position:relative;
    float:left;
    background: brown; /* menu background color */
    }

#nav li a {
    display:block;
    padding:0;
    text-decoration:none;
    width:200px; /* this is the width of the menu items */
    line-height:35px; /* this is the hieght of the menu items */
    color:#ffffff; /* list item font color */
    }
        
#nav li li a {font-size:80%;} /* smaller font size for sub menu items */
    
#nav li:hover {background:brown} /* highlights current hovered list item and the parent list items when hovering over sub menues */



/*--- Sublist Styles ---*/
#nav ul {
    position:absolute;
    padding:0;
    left:0;
    display:none; /* hides sublists */
    }

#nav li:hover ul ul {display:none;} /* hides sub-sublists */

#nav li:hover ul {display:block;} /* shows sublist on hover */

#nav li li:hover ul {
    display:block; /* shows sub-sublist on hover */
    margin-left:200px; /* this should be the same width as the parent list item */
    margin-top:-35px; /* aligns top of sub menu with top of list item */
    }
</style>
      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container" style="border: 0px solid red;">
        <a href="<?php echo base_url ?>" class="navbar-brand">
          <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 2.5rem;height: 2.5rem;max-height: unset">
          <b><span class="brand-text font-weight-light"><?php echo (!isMobileDevice()) ? $_settings->info('name'):$_settings->info('short_name'); ?></span></b>
        </a>
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
      <li><a href="course.php?c=6">Machanical Engineering &raquo;</a>
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
      <li><a href="course.php?c=4">Electric Engineering &raquo;</a>
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
      <li><a href="course.php?c=5">Electronic Engineering &raquo;</a>
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

            <a class="nav-link" data-widget="navbar-search" href="aboutus.php" role="button">
                  <p style="color: brown;"><b>ABOUT</b></p>
            </a>
         
          
            <a class="nav-link" data-widget="navbar-search" href="contactus.php" role="button">
                  <p style="color: brown;"><b>CONTACT</b></p>
            </a>
          

        <ul class="order-1 order-md-3 navbar-nav  ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="http://localhost/elearning/student/" role="button">
                  <p style="color: brown;"><b>STUDENT</b></p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="http://localhost/elearning/faculty/" role="button">
                  <p style="color: brown;"><b>FACULTY</b></p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="http://localhost/elearning/admin/" role="button">
                  <p style="color: brown;"><b>ADMIN</b></p>
            </a>
          </li>
        </ul>







        <!-- <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav" style="float:right">
          <li class="nav-item">
            <a href="<?php echo base_url ?>" class="nav-link">Home</a>
          </li>
        </ul>
      </div> -->
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Navbar Search -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li> -->
          <!-- Messages Dropdown Menu -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="javascript:void(0)" onclick="location.replace('<?php echo base_url.'/classes/Login.php?f=elogout' ?>')" role="button">
            <i class="fas fa-sign-out-alt"></i>
            </a>
          </li> -->
         <!--  <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
            </a>
          </li> -->
        </ul>
      </div>
      </nav>
      <!-- /.navbar