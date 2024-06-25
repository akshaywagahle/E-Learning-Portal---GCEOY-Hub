<?php 

$lid = $_GET['id'];

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
          
              <?php


function __getYouTubeEmbeddedURL($url) {
    return "https://www.youtube.com/embed/" . __getYouTubeID($url);
}


function __getYouTubeID($url) {
    $queryString = parse_url($url, PHP_URL_QUERY);
    parse_str($queryString, $params);
    if (isset($params['v']) && strlen($params['v']) > 0) {
        return $params['v'];
    } else {
        return "";
    }
}

$url = 'https://www.youtube.com/watch?v=zmxhTXUr9wc';
$embed_code = '<iframe width="100%" height="500" src="'.__getYouTubeEmbeddedURL($url).'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

echo $embed_code;

?>



          <?php } ?>

</body>
</html>