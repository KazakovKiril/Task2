<?php include '/inc/env.php'; ?>
<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js eq-ie9 ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <base href="<?php echo $basehref; ?>">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/normalize.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/blog-item.css">
    <?php if($page_title == 'Contacts') { ?>
=======
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/header.css">

   <?php if($page_title == 'Contacts') { ?>
>>>>>>> 190155a6d79e2dffc3b46f773972fd5bade3d884
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXSvNhrGGECmJMZKs3Ewbz32jVRvLTTq4&language=en"></script>
    <?php } ?>
    <script type="text/javascript">
        var currentPage = '<?php echo $page_title; ?>';
    </script>
</head>
<body>
    <div class="wrapper clearfix" role="main">

<<<<<<< HEAD
=======
        <a href="home.php"class="logo">Gridzilla</a>
        <div class="search">
    	    <form action="get" class="search-box">
        	   <input type="text" id="search" placeholder="Enter your search...">
        	   <button class="icon"><i class="fa fa-search"></i></button>
            </form>
        </div>

         <div class="nav clearfix">
    		<nav id="nav">
    			<li><a href="home.php">HOME</a></li>
    			<li><a href="#">ABOUT</a></li>
    			<li><a href="#">BLOG</a></li>
    			<li><a href="contacts.php">CONTACT</a></li>
    		</nav>
        </div>
>>>>>>> 190155a6d79e2dffc3b46f773972fd5bade3d884
