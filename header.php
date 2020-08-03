<?php
	$name = $_SERVER['PHP_SELF'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="RxHTWBoegbcbsWYmNV6PyuF4stxy1h9LPwfVAVx5q-k" />
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172313454-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172313454-1');
</script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5QN9PHS');</script>
<!-- End Google Tag Manager -->
    <title>Devi Plastic</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QN9PHS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
   <!--Header Section-->
   <div id="wrapper">
   	
  
  <header id="top3">
    <nav  id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="pull-left visible-md visible-lg">
            <div id="logo-img" alt="Logo image"></div>
          </a>
          <div class="navbar-brand">
            <a href="index.php"><h1>Devi Plastic</h1></a>
            <p>
              <img src="images/star-k-logo.png" alt="Kosher Certificate">
              <span>Iso Certified</span>
            </p>
          </div>
          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expand="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="collapsable-nav" class="collapse navbar-collapse">
          <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li <?php if(strpos($name,'index')>1){
				echo "class='visible-xs active'";
			}
			else{
				echo "class='visible-xs'";
			}?> >
              <a href="index.php">
                <span class="glyphicon glyphicon-home"></span><br class="hidden-xs"> Home</a>
            </li>
           <li <?php if(strpos($name,'index')<1){
				echo "class=' active'";
			}
			?>>
             <a href="menu-categories.php">
               <span class="glyphicon glyphicon-th"></span><br class="hidden-xs"> Products</a>
           </li>
           <li>
             <a href="#about">
               <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About</a>
           </li>
           <li>
             <a href="#">
               <span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs"> Awards</a>
           </li>
           <li id="phone" class="hidden-xs">
             <a href="tel:9924008173">
               <span>9924008173</span></a><div>* For Enquirey</div>
           </li>
         </ul><!-- #nav-list -->
       </div><!-- .collapse .navbar-collapse -->
      </div>
    </nav>
  </header>
  
  <div id="call-btn" class="visible-xs">
    <a class="btn" href="tel:9924008173">
    <span class="glyphicon glyphicon-earphone"></span>
    9924008173
    </a>
  </div>
  <div id="xs-deliver" class="text-center visible-xs">* For Enquirey</div>
