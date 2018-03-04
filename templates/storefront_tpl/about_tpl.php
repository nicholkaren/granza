<?php 
require_once('templates/storefront_tpl/header.php');
?>

<link type="text/css" rel="stylesheet" href="css/storefront/about_us.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Dr+Sugiyama" rel="stylesheet">

<!--OM OSS-->
<img class="background_flowers" src="img/inspo/flowers_about.jpg" alt="about page content">

<div id="about_us_wrapper">
    <!-- Rubrik -->
    <h1 class="about_us_headline">
        <?php echo $pagecontent->title; ?>
    </h1>

    <!-- Brödtext -->
    <p class="about_us_describing_text">
        <?php echo $pagecontent->content1; ?>
    </p>
    <p class="about_us_describing_text2">
        <?php echo $pagecontent->content2; ?>
    </p>
    <!-- Bilder -->
    <div id="collage">
        <img class="about_content_img" src="<?php echo $pagecontent->img_url; ?>">
    </div>
    <br>

    <p id="signature"> / Fransesco Granza </p>

</div>
