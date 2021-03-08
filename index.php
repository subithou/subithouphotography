<html>

 <html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta https-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>subith o u photography</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/logo3.png" type="image/icon type">
   

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" >
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		
        <link rel="stylesheet" href="assets/css/nexa-web-font.css" >
        <link rel="stylesheet" href="assets/css/opensans-web-font.css" >

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <meta name="google-site-verification" content="yzn_5EV-HvlIzgR2mZGH9hwAn-f5yKfb0spYV28jwGM" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    </head>
    <body>
        
		
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
		
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home1">Home</a></li>
                        <li><a href="#about1">About Me</a></li>
                        <li><a href="#portfolio1">Portfolio</a></li>
                        <li><a href="#contact1">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

		<!--Home page style-->
	<section id="home1">
        <header id="home" class="home">
			<div class="overlay sections">
				<div class="container">
					
					<div class="row">
						<div class="wrapper">
							<div class="col-md-6 col-md-offset-3">
								
								<div class="home-details text-center">
									
									<div class="logo">
										<img src="assets/images/logo3.png" alt="Logo Image" />
									</div>
										
									<div class="home-title">
										<h1><span>subith o u</span></h1>
										<h1>PHOTOGRAPHY</h1>
									</div>
									
									<div class="scroll-down">
										<h5>Scroll down to see more</h5>
										<a href="#about"><i class="fa fa-angle-double-down"></i></a>
									</div>

								</div>
									
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</section>

		<!-- Sections -->
	<section id="about1">
        <section id="about" class="about sections">
            <div class="container">

                <!-- Example row of columns -->
                <div class="row">
                    <div class="wrapper">
					
                    	<div class="col-md-6">
                    		<div class="about-photo">
								<img src="assets/images/about.jpg" alt="About Image" />
							</div>
                    	</div>
						
						<div class="col-md-6">
                    		<div class="heading about-content">
								<h3>Hi...</h3>
								<b>"Adopt the pace of nature ,her secret is patience "</b>
-Ralph Waldo Emerson

                        </p>
                        <p class="text-white-50">
All of you nature lovers out there, I am Subith, an engineer to be by profession, My passion I am a nature Enthusiast. I hail from kannur, a Paradise in Kerala, the gods own country, a town which is still untouched by the fast paced life.I want people to see the beauty of nature through my eyes.


I love capturing .....the serenity of nature through photography, the stillness through sketching and use my literally skills to describe it. I love travelling to get to all this.


Lo behold mates my work!


Love to hear your comments criticisms and advises. After all life is a continuous journey of learning, growing and learning!
								
							</div>
                    	</div>

				
						
                    </div>
                </div>
				
				
            </div> <!-- /container -->      




		</section>
	</section>	
		
		
		<!-- Sections -->
	<section id="portfolio1">
        <section id="portfolio" class="portfolio">
			<div class="overlay sections">
				<div class="container">
				
					<div class="heading text-center">
						<div class="title">
							<h3>Portfolio</h3>
						</div>
					</div>
					
					<!-- Example row of columns -->
					
					<div class="row">
						<div class="portfolio-wrapper">

                        
							
                            
                            <?php 
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Target directory
  $dir = 'portfolio/';
  if (is_dir($dir)){
 
   if ($dh = opendir($dir)){
    $count = 1;

    // Read files
    while (($file = readdir($dh)) !== false){

     if($file != '' && $file != '.' && $file != '..'){
 
      // Thumbnail image path
      $thumbnail_path = "portfolio/thumbnail/".$file;

      // Image path
      $image_path = "portfolio/".$file;
 
      $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

	  // Check its not folder and it is image file
	  // Check its not folder and it is image file
      if(!is_dir($image_path) && 
         in_array($thumbnail_ext,$image_extensions) && 
         in_array($image_ext,$image_extensions)){
      ?>

                            <div class="portfolio-item">
							<a href="portfolio/1.jpeg" class="portfolio-img"><img src="portfolio/1.jpg" alt="Portfolio" /></a>

								<div class="portfolio-details">
									
									<a href="<?php echo $image_path;?>" class="portfolio-img"><img src="<?php echo $thumbnail_path;?>" alt="Portfolio" /></a>
                                </div>
                            </div>
                                <?php

// Break
if( $count%4 == 0){

}
$count++;
}
}

}
closedir($dh);
}
  }

?>
								
							
							
							<div class="scroll-down">
								<h5>Do you want to see it with your own eyes? Scroll!</h5>
								<a href="#contact"><i class="fa fa-angle-double-down"></i></a>
							</div>
							
						</div>
					</div>
				</div> <!-- /container -->
			</div>	
		</section>
	</section>
		
	<section id="contact1">
		<section id="contact" class="contact sections">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="contact-details text-center">
						
							<div class="contact-category">
								<div class="mail">
									<h4>Mail :</h4>
									<h2>ousubith@gmail.com</h2>
								</div>
							</div>
							
							<div class="contact-category">
								<div class="phone">
									<h4>Phone :</h4>
									<h5>+91 9526312988</h5>
								</div>
							</div>
							
							<div class="contact-category">
								<div>
									<h4>Social Media :</h4>
									<a href="https://www.facebook.com/profile.php?id=100005029694788"><i class="fa fa-facebook"></i></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="https://twitter.com/subithou"><i class="fa fa-twitter"></i></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="https://www.instagram.com/bhraaanthan/"><i class="fa fa-instagram"></i></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="https://www.linkedin.com/in/subith-o-u-9b003716b/"><i class="fa fa-linkedin"></i></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="https://www.behance.net/subithou"><i class="fa fa-behance"></i></a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
            	<div class="row">
            		<div class="col-md-12">
            			<div class="copyright text-center">
            			<p style="color:black">copyright &copy; 2020 subith o u photography. All rights reserved </p>
            			</div>
            		</div>
            	</div>
            </div>
        </footer>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
		<script src="assets/js/jquery.magnific-popup.js"></script>

		 
        <script src="assets/js/main.js"></script>
    </body>
</html>
