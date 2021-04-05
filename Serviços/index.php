<?php
include'connect.php';
if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "select * from reg where username='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:home.php');
   }
   else{
       echo 'Nome de usuario ou senha não exintem';
   }
  
}
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<title>HelpTech.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/animate.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%2C800%7CMontserrat%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%7CDosis%3A400%2C700&#038;ver=4.5' type='text/css' media='all'/>
<link rel='stylesheet' href='icons/elegantline/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all'/>
</head>
<body class="frontpage">
<div class="page-loader">
	<img src="assets/img/loader.gif" alt="loader">
</div>

<!-- Header
================================================== -->
<header id="header">
<div id="mega-menu" class="header header2 header-sticky primary-menu icons-no default-skin zoomIn align-right">
	<nav class="navbar navbar-default redq">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">
			<img src="assets/img/logo-dark.jpg" alt="logo">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<a class="mobile-menu-close"><i class="fa fa-close"></i></a>
			<div class="menu-top-menu-container">
				<ul id="menu-top-menu" class="nav navbar-nav nav-list">
					<li><a href="../login/index.php">Home</a></li>
					<li><a href="../dashboard/index3.html">Sobre</a></li>
					<li><a href="serviços.php">Serviços</a></li>
					<li><a href="#pricing">Planos</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#contact">Contato</a></li>
					<li style="background: rgba(255, 255, 0, 0.51);"><a target="_blank" href="https://www.wowthemes.net/themes/expertum/">WP Version</a></li>
				</ul>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
	</nav>
</div>
</header>	

<!-- INTRO
================================================== -->


<!-- PRICING
================================================== -->
<section id="pricing" class="margintop60 ow-pt-columns-atom">
	<div class="container">
		<div class="sow-headline">
			<h1><b>Serviços</b></h1>
		</div>
		<br/>			
		<!-- #1 -->
		<div class="col-md-4 ow-pt-column ow-pt-first ow-pt-even">
			<div class="ow-pt-title">
				 EXPERTUM THEME
				<div class="ow-pt-subtitle">
					One Page WordPress
				</div>
			</div>
			<div class="ow-pt-details">
				<div class="ow-pt-price">
					$35
				</div>
				<div class="ow-pt-per">
					One Time
				</div>
			</div>
			<div class="ow-pt-features">
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Wordpress Theme
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-odd">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 One Page
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Page Builder
					</p>
				</div>
			</div>
			<div class="ow-pt-button">
				<a href='https://www.wowthemes.net/themes/expertum/' class="ow-pt-link">Buy Now</a>
			</div>
		</div>
		
		<!-- #2 -->
		<div class="col-md-4 ow-pt-column ow-pt-featured ow-pt-odd">
			<div class="ow-pt-title">
				 ALL THEMES PACKAGE
				<div class="ow-pt-subtitle">
					by WowThemes.net
				</div>
			</div>
			<div class="ow-pt-details">
				<div class="ow-pt-price">
					$89
				</div>
				<div class="ow-pt-per">
					Per Year
				</div>
			</div>
			<div class="ow-pt-features">
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Yours Forever
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-odd">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 1 Year Support
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 1 Year Updates
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-odd">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 All Themes
					</p>
				</div>
			</div>
			<div class="ow-pt-button">
				<a target="_blank" href='https://www.wowthemes.net/themes/all-themes-package/' class="ow-pt-link">Join Membership</a>
			</div>
		</div>
		
		<!-- #3 -->
		<div class="col-md-4 ow-pt-column ow-pt-last ow-pt-even">
		<div class="ow-pt-title">
				 EXPERTUM THEME
				<div class="ow-pt-subtitle">
					One Page WordPress
				</div>
			</div>
			<div class="ow-pt-details">
				<div class="ow-pt-price">
					$35
				</div>
				<div class="ow-pt-per">
					One Time
				</div>
			</div>
			<div class="ow-pt-features">
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Wordpress Theme
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-odd">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 One Page
					</p>
				</div>
				<div class="ow-pt-feature ow-pt-feature-even">
					<span class="sow-icon-fontawesome" data-sow-icon="&#xf00c;"></span>
					<p>
						 Page Builder
					</p>
				</div>
			</div>
			<div class="ow-pt-button">
				<a href='https://www.wowthemes.net/themes/expertum/' class="ow-pt-link">Buy Now</a>
			</div>
		</div>
	</div>
</section>
		

<!-- TESTIMONIAL
================================================== -->

<!-- BLOG
================================================== -->

		
<!-- CONTACT
================================================== -->
<section id="contact" class="margintop60 nopadding" style="background:#292929;">
		<div class="col-md-6 whitetext" style="padding: 60px;">
			<div class="textwidget">
				<div class="bookarea">
					 CONTATO<br>
					<span class="bordered">NetworkHelpTech@gmail.com </span><br>
					<span class="call">(19) 991356643</span>
				</div>
			</div>
		</div>
		<div class="col-md-6 whitetext" style="padding: 60px; background-color: #50dcc9;">
			<div class="textwidget">
				<h2 class="box">Nos <b>Contate</b></h2>						
				<div class="bottomform">										
					<form method="post" action="contact/bottomcontact.php" id="bottomcontactform">
						<div class="form">
							<div class="row">
								<span class="col-md-6">
									<input type="text" name="namebottom" placeholder="Name *">
								</span>
								
								<span class="col-md-6">
									<input type="text" name="emailbottom" placeholder="E-mail *">
								</span>
									
							</div>
							<div class="clearfix"></div>
							<textarea name="comment" rows="7" placeholder="Message *"></textarea>
							<input type="submit" id="submit2" class="clearfix btn" value="Send">
						</div>
					</form>
					<div class="done2">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
				</div>						
			</div>
		</div>
		<div class="clearfix"></div>
</section>
<!-- THE END OF SECTIONS -->	
	
<!-- FOOTER
================================================== -->
<footer id="footer" class="footer2">
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<small>
					&copy; <a href="https://www.wowthemes.net/">
							  Expertum - Free HTML Template by WowThemes.net
							</a>
					</small>
				</div>
				<div class="col-md-6 text-right">
					<div class="footer-menu">
						<ul id="menu-footer-links" class="menu">
							<li><a href="https://www.facebook.com.br"><i class="fa fa-facebook"></i> Curta-nos no Facebook</a></li>
							<li><a href="https://Twitter.com"><i class="fa fa-twitter"></i> Siga-nos no Twitter</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- SCRIPTS
================================================== -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="contact/topvalidate.js"></script>
<script src="contact/bottomvalidate.js"></script>

</body>
</html>
