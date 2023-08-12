<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo("charset") ;?>>
    <link rel="pingback" href=<?php bloginfo("pingback_url"); ?>>

    <title> <?php
        wp_title('|','true','right');
        bloginfo("name"); 
      ?></title>
    <?php wp_head(); ?>
</head>

<body>

</nav>
<div class="nav sticky-top bg-dark">
      <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg">

            <div class="navbar-brand">
              <h1><a class='site-url' href="<?php bloginfo('url')?>"><?php bloginfo("name"); ?></a></h1>
            </div>

          <!--Burger Icon For mobiles-->
          <button
            class="navbar-toggler justify-content-center"
            data-target="#navitems"
            data-toggle="collapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse justify-content-end"
            id="navitems"
          >
          <?php astro_menu();  ?>
          </div>
         <?php get_search_form();?>
        </nav>
      </div>
    </div>



