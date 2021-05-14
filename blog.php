<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');
require_once ('./php/header.php');

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FBI Fear Of Being Innocent</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styler.css">
	
<style>
body{
background: black;
}
.rowi {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.columni {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.columni img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .columni {
    flex: 50%;
    max-width: 30%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .columni {
    flex: 100%;
    max-width: 100%;
  }
}
</style>
</head>

<body>


<section class="header-2">
<video autoplay loop class ="video-back" muted plays-inline>

<source src="upload/fb-2.mp4" type="video/mp4">

</video>
</section>


<div class="rowi">
  <div class="columni">
    
	
	<img src="images/gallery-42.jpeg">
    <img src="images/gallery-39.jpeg">
    <img src="images/gallery-29.jpeg">
    <img src="images/gallery-32.jpeg">
  </div>
  <div class="columni">
  <img src="images/gallery-11.jpg">
    <img src="images/gallery-30.jpeg">
   
    <img src="images/gallery-41.jpeg">
    <img src="images/gallery-43.jpg">
  
   
  </div>
  <div class="columni">
   
    <img src="images/gallery-38.jpeg">
	<img src="images/gallery-5.jpg">
    <img src="images/gallery-31.jpeg">
    <img src="images/gallery-27.jpeg">
	
    
  </div>
  <div class="columni">
    
	 <img src="images/gallery-20.jpg">
   
    <img src="images/gallery-19.jpg">
    <img src="images/gallery-2.jpg">
	 <img src="images/gallery-21.jpg">
  
  </div>
</div>

<br>

<br>
<br>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<footer>
 
 <?php
    require_once ('footer.php');
?>
</footer>
