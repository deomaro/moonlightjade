<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <title><?php echo get_bloginfo( 'name' ) ?> | <?php echo get_bloginfo( 'description' ) ?></title>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/mobile.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/widgets.js"></script>
    <script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/main.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>
  <body>
    <!--header and title may come here-->
    <div class="nToast" id="toast" onclick="$('#toast').fadeOut()">Hello</div>
  	<div class="loader" id="loader">
  		<div class="loading"></div>
  	</div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background:var(--primaryDarkColor);z-index:2000;">
  		<div class="container">
  			<a class="navbar-brand" href="<?php echo get_site_url() ?>" style="color:var(--accentColor);"><?php echo get_bloginfo( 'name' ) ?></a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
  				<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link mNav mBlogNav" href="<?php echo get_site_url() ?>/blog.php">Blog</a></li>
            <?php wp_list_pages( '&title_li=' ); ?>
          </ul>
  			</div>
  		</div>

  	</nav>
