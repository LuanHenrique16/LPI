<?php
include'connect.php';


if(isset($_POST['sub'])){
	
	
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "select * from reg where username='$u' and password='$p'";   
    // $s= "select * from reg where username='$u' and pass";   
    // $s= "select * from reg";   
   $qu= mysqli_query($con, $s);
   
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location: reg.php');
   }
   else{
       echo 'Nome de usuario ou senha não existem';
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
					<li><a href="../dashboard/iframe.html">Home</a></li>
					<li><a href="../dashboard/index3.html">Sobre</a></li>
					<li><a href="../Serviços/index.php">Serviços</a></li>
					<li><a href="../Serviços/index.php">Planos</a></li>
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
<section id="home" style="padding:160px 0;background-image: url(https://unsplash.it/1324/683?random=0); background-position: center; background-repeat: no-repeat;background-size: cover;background-attachment:fixed;">
	<div class="container">
		<div class="textwidget">
				<h1 class="toptitle"> <font color = #02ff6d> GUIANDO NA<br/> TECNOLOGIA <br/><br/><i class="fa fa-star roundicon"></i>
				</h1>								
			<div class="contactstyle topform">										
				<form method="POST" enctype="multipart/form-data">
					<table>
						
						<tr>
							<td>
								Nome
								<input type="text" name="user">
							</td>
						</tr>
						<tr>
							<td>
								Senha
								<input type="password" name="pass">
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="sub" value="submit">
							</td>
						</tr>
						<tr>
							<td>
								<a href= "login-form-20/index3.php"> Registrar</a>
								<br>
								<a href= "../dashboard/iframe.html"> Home</a>
							
							</td>
						</tr>
					</table>
						<div class="done">
							<div class="alert alert-success">						
								<button type="button" class="close" data-dismiss="alert">×</button>			
								Sua mensagem foi enviada. Obrigado!
							</div>
						</div>
                </form>
			</div>		            					
		</div>
	</div>
</section>

<!-- ABOUT
================================================== -->
<section id="about" class="whitetext" style="padding:60px;background-color:#50dcc9;" >
	<div class="container">
		<div class="so-widget-sow-headline">
			<div class="sow-headline">
				<h1 class="whitetext">Seu guia na tecnologia moderna</h1>
			</div>
		</div>
		<br/>
		<div class="w960 text-center">
		<p>
			 Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes.
		</p>
		<p>
			Fusce feugiat Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Fusce feugiat Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat.
		</p>
		<p>
			Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Fusce feugiat Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus.
		</p>
		</div>
							
	</div>
</section>

<!-- TEAM
================================================== -->
<section id="team" class="panel-grid">
	<div class="nopadding">
		<!-- #person1 -->
		<div class="col-md-4" style="background:#141414;">
			<div class="team-boxes">
				<div class="team-thumb overlay-image view-overlay">
					<img src="../Fotos/Luan.PNG" alt="" class="img-responsive">
					<div class="clear">
					</div>
					<div class="mask team_quote">
						<div class="port-zoom-link">
							<p>
								 Its is great to work in such company, some other projects will be started in the same format!
							</p>
						</div>
					</div>
				</div>
				<div class="team-info">
					<h2>Luan Henrique</h2>
					<p>
						Proprietário
					</p>
				</div>
				<div class="separator">
				</div>
				<div class="team-social">
					<a href="https://Twitter.com"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/in/luan-henrique-1b274b209"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
		<!-- #person2 -->
		<div class="col-md-4" style="background:#50dbc8;">
			<div class="team-boxes">
				<div class="team-thumb overlay-image view-overlay">
					<img src="../Fotos/Leonardo.jpg" alt="" class="img-responsive">
					<div class="clear">
					</div>
					<div class="mask team_quote">
						<div class="port-zoom-link">
							<p>
								 Its is great to work in such company, some other projects will be started in the same format!
							</p>
						</div>
					</div>
				</div>
				<div class="team-info">
					<h2>Leonardo Ruas</h2>
					<p>
						Sócio Proprietário
					</p>
				</div>
				<div class="separator">
				</div>
				<div class="team-social">
					<a href="http://www.linkedin.com/in/leonardo-ruas-78580a209"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div>
			</div>	
		</div>
		<!-- #person3 -->
		<div class="col-md-4" style="background:#141414;">
			<div class="team-boxes">
				<div class="team-thumb overlay-image view-overlay">
					<img src="https://unsplash.it/600/400?random=3" alt="" class="img-responsive">
					<div class="clear">
					</div>
					<div class="mask team_quote">
						<div class="port-zoom-link">
							<p>
								 Its is great to work in such company, some other projects will be started in the same format!
							</p>
						</div>
					</div>
				</div>
				<div class="team-info">
					<h2>CAROL STEPHENS</h2>
					<p>
						Public Relations
					</p>
				</div>
				<div class="separator">
				</div>
				<div class="team-social">
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
		<!-- end #3 -->
		<div class="clearfix"></div>
	</div>
</section>

<!-- SERVICES
================================================== -->		
<section id="services" class="services margintop60">
	<div class="container">
		<div class="sow-headline">
			<h1>SERVIÇOS</h1>
			<div class="decoration">
				<div class="decoration-inside">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3>01. Central Processing</h3>
				 Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
				<h3>02. Real Schemas</h3>
				 Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.
				
			</div>
			<div class="col-md-6">
				<h3>03. Data Cover</h3>
				 Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
				<h3>04. Time Management</h3>
				 Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.
				
			</div>
		</div>
	</div>
</section>
	
<!-- COUNTERS
================================================== -->


<!-- PRICING
================================================== -->

		

<!-- TESTIMONIAL
================================================== -->
<section id="testimonial" class="margintop60 paddingtop100 paddingbottom100" style="background-image:url(https://unsplash.it/1400/600?random=5);background-size:cover;background-attachment:fixed;">
	<div class="container">
		<div class="sow-testimonials">
			<div class="flexslider testimonials-wrapper text-center">
				<ul class="slides">
					<li>
					<div class="sow-round-image-frame" style="background-image: url(https://unsplash.it/120/120?random=6); width:120px; height:120px">
					</div>
					<p>
					“Qualquer tecnologia suficientemente avançada é equivalente à mágica”.
					</p>
					<strong class="signature">- Arthur C. Clarke <a></a></strong>
					</li>
					<li>
					<div class="sow-round-image-frame" style="background-image: url(https://unsplash.it/120/120?random=7); width:120px; height:120px">
					</div>
					<p>
					“A tecnologia tornou possível a existência de grandes populações. Grandes populações agora tornam a tecnologia indispensável”. 
					</p>
					<strong class="signature">- Joseph Krutch <a></a></strong>
					</li>
				</ul>
			</div>
		</div>
		<br/>
		<div class="text-center whitetext">
			<h1>Torne-se nosso próximo cliente</h1>
			<h2 style="margin-top:10px;">Ligue-nos - (19) 98885-1234</h2>
		</div>
	</div>
</section>

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
