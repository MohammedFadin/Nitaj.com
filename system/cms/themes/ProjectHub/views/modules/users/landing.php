{{if user:logged_in}}
{{ helper:redirect uri="/order/images/" method="refresh" }}
<div id="main-container">
			<div class="padding-md">
				<div class="timeline-wrapper">
					<div class="timeline-item timeline-start">
						<div class="panel bg-success">
							<div class="panel-body text-center">
								<div class="timeline-icon bg-success">
									<i class="fa fa-bell"></i>
								</div>
								<strong class="font-14">
									Timeline
								</strong>
								
							</div>
						</div><!-- /panel -->
					</div><!-- /timeline-item -->
					<div class="timeline-item">
						<div class="timeline-info">
							<div class="timeline-icon bg-grey">
								<i class="fa fa-file-text-o"></i>
							</div>
							<div class="time">
								06:50 Am
							</div>
						</div>
						<div class="panel panel-default timeline-panel">
							<div class="panel-heading">
								<?php echo $projects['title'];?>
								<small class="pull-right text-muted">
									<i class="fa fa-clock-o"></i> 5m ago
								</small>
							</div>
							<div class="panel-body">
								<p>
									<a href="{{url:site uri="user/<?php echo $projects['created_by']['display_name'];?>"}}">
										<?php echo $projects['created_by']['display_name'];?>
									</a>Project is completed
								</p>
<!-- 								<a class="btn btn-xs btn-default">Read more</a>
								<a class="btn btn-xs btn-default"><i class="fa fa-reply"></i> Reply</a> -->
							</div>
						</div><!-- /panel -->
					</div><!-- /timeline-item -->
					<div class="timeline-item">
						<div class="timeline-info">
							<div class="timeline-icon bg-grey">
								<i class="fa fa-picture-o"></i>
							</div>
							<div class="time">
								07:15 Am
							</div>
						</div>
						<div class="panel panel-default timeline-panel">
							<div class="panel-heading">
								<?php echo $team[1]['display_name'];?> Added photos to the Project <a href="#"><?php echo $projects['logo'];?></a>
							</div>
							<div class="panel-body">
								<a class="timeline-img" href="#">
									<img src="{{url:base}}/resources/uploads/<?php echo $projects['logo'];?>" alt="Timeline Photo">
								</a>
							</div>
						</div><!-- /panel -->
					</div><!-- /timeline-item -->
					<!-- /timeline-item -->
					<div class="timeline-item">
						<div class="timeline-info">
							<div class="timeline-icon bg-success">
								<i class="fa fa-comment"></i>
							</div>
							<div class="time">
								10:49 Am
							</div>
						</div>
						<div class="panel panel-default timeline-panel">
							<div class="panel-heading">
								<span class="label label-success m-left-xs">NEW</span> <?php echo $team[1]['display_name'];?> commented on <?php echo $projects['title'];?>
							</div>
							<div class="panel-body">
								<p>Great idea, however why dont you tweak the idea to</p>
								<div class="seperator"></div>
								<a class="btn btn-xs btn-success">Reply</a>
								<a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
							</div>
						</div><!-- /panel -->
					</div><!-- /timeline-item -->
					
					<div class="timeline-date">
						3 Oct 2013
					</div>
				
					<!-- <div class="timeline-item">
						<div class="timeline-info">
							<div class="timeline-icon bg-warning">
								<i class="fa fa-plane"></i>
							</div>
							<div class="time">
								3:05 Pm
							</div>
						</div>
					</div> -->
					<div class="timeline-item clearfix">
						<div class="timeline-info">
							<div class="timeline-icon bg-grey">
								<i class="fa fa-pencil"></i>
							</div>
						</div>
					</div><!-- /timeline-item -->
				</div><!-- /timeline-wrapper -->
			</div><!-- /.padding -->
		</div>
{{else}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{settings:site_name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ url:base }}/system/cms/themes/ProjectHub/css/endless-landing.min.css" rel="stylesheet">    
  </head>

  <body class="overflow-hidden">
	<!-- Overlay Div -->

	<div id="wrapper" >
		<header class="navbar navbar-fixed-top bg-white">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><span class="text-danger">{{settings:site_name}}</a>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#landing-content" class="top-link">Home</a>
						</li>
						<li>
							<a href="{{url:site uri='users/login'}}" class="top-link">Login</a>
						</li>
						<!-- <li>
							<a href="#feature" class="top-link">Features</a>
						</li> -->
						<li>
							<a href="#portfolio" class="top-link">About Us</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		
		<div id="landing-content">
			<div id="main-slider" class="carousel slide bg-dark" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#main-slider" data-slide-to="0" class="active"></li>
					<li data-target="#main-slider" data-slide-to="1"></li>
					<!-- <li data-target="#main-slider" data-slide-to="2"></li> -->
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="{{url:base}}system/cms/themes/ProjectHub/img/sliders/1.jpg" alt="" class="img-background">
						<div class="row">
							<div class="col-md-6 text-right hero-unit">
								<h2 class="m-top-lg m-right-md text-white fadeInDownLarge animation-delay3">Sponsored by Acadox.com</h2>
								<p class="text-white fadeInUpLarge animation-delay6 m-right-md hidden-xs">
									
								</p>
								<a href="{{url:site uri='users/register_choice'}}" class="btn btn-default btn-lg fadeInLeftLarge animation-delay8 m-bottom-lg m-right-md">Join Us</a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="{{url:base}}/system/cms/themes/ProjectHub/img/sliders/2.jpg" alt="" class="img-background">
						<div class="row">
							<div class="col-xs-6 text-right">
							</div>
							<div class="col-xs-6">
								<h2 class="m-top-lg text-white fadeInDownLarge animation-delay3">Nitaj Hub</h2>
								<p class="text-white fadeInUpLarge animation-delay6 hidden-xs">
									Share your projects, get feedback <br/>
									and team up with other students and get sponsored!
								</p>
								<a href="index.html" class="btn btn-danger btn-lg fadeInRightLarge animation-delay8">Join Us <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#main-slider" data-slide="prev">
					<span class="fa fa-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#main-slider" data-slide="next">
					<span class="fa fa-chevron-right"></span>
				</a>
			</div>
			
			
			
			<!-- <div class="bg-light padding-md" id="feature">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 content-padding">
							<div class="feature-icon text-center ">
								<i class="fa fa-bold fa-4x"></i>
							</div>
							<div class="text-center font-lg">
								<h3>Bootstrap 3</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.</p>
						</div>
						<div class="col-sm-4 content-padding">
							<div class="feature-icon text-center">
								<i class="fa fa-html5 fa-4x"></i>
							</div>
							<div class="text-center font-lg">
								<h3>HTML5 & CSS3</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.</p>
						</div>
						<div class="col-sm-4 content-padding">
							<div class="feature-icon text-center">
								<i class="fa fa-tag fa-4x"></i>
							</div>
							<div class="text-center font-lg">
								<h3>Flat Design</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.</p>
						</div>
					</div>
				</div>
			</div> -->
			
			<!-- <div class="padding-md">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 content-padding">
							<div class="feature-icon text-center">
								<i class="fa fa-tablet fa-4x"></i>
							</div>
							<div class="text-center font-lg">
								<h3>Responsive Design</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.</p>
						</div>
						<div class="col-sm-4 content-padding">
							<div class="feature-icon text-center">
								<i class="fa fa-magic fa-4x"></i>
							</div>
							<div class="text-center font-lg">
								<h3>Lightweight</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.</p>
						</div>
						<div class="col-sm-4 content-padding">
							<div class="feature-icon text-center">
								<i class="fa fa-check fa-4x"></i>
							</div>
							<div class="text-center font-lg">
								<h3>Browser Compatibility</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.</p>
						</div>
					</div>
				</div>
			</div> -->
			<div class="bg-white text-center content-padding">
				<div class="container">
					{{theme:image file="logo.png"}}
					<p></p>
<!-- 					<a href="#" class="btn btn-lg btn-success animated-element fadeInUp no-animation">PURCHASE NOW</a>
 -->				</div>
			</div>
			
			<div id="portfolio">
				<div class="section-header">
					<hr class="left visible-lg">
					<span>
						The Humble Founders
					</span>
					<hr class="right visible-lg">
				</div>
			
				<div class="container">
					<div class="row recent-work">
						<div class="col-sm-4">		
							<div class="detail fadeInUp animated-element no-animation">
								<a href="http://www.linkedin.com/pub/mohammed-fadin/19/70/3a3" class="hoverBorder" target="_blank">
									<span class="hoverBorderWrapper">
										{{theme:image file='founders/1.jpeg'}}
										<span class="hoverBorderInner"></span>
										<span class="readMore">+ Read more</span>
									</span>	
								</a>
								<div class="seperator"></div>
								<p>
									<h4>Founder and Programmer</h4>
									<small>Patienate about programming and problem solving!</small> 
								<p>
							</div><!--detail-->
						</div><!--col-->
						<div class="col-sm-4">
							<div class="detail fadeInUp animated-element no-animation animation-delay2">
								<a href="http://www.linkedin.com/pub/mohammed-fadin/19/70/3a3" class="hoverBorder" target="_blank">
									<span class="hoverBorderWrapper">
										{{theme:image file='founders/2.jpeg'}}
										<span class="hoverBorderInner"></span>
										<span class="readMore">+ Read more</span>
									</span>	
								</a>
								<div class="seperator"></div>
								<p>
									<h4>Project Manager and Coder</h4>
									<small></small> 
								<p>
							</div><!--detail-->
						</div><!--col-->
						<div class="col-sm-4">
							<div class="detail fadeInUp animated-element no-animation animation-delay4">
								<a href="http://www.linkedin.com/pub/mohammed-fadin/19/70/3a3" class="hoverBorder" target="_blank">
									<span class="hoverBorderWrapper">
										{{theme:image file='founders/3.jpeg'}}
										<span class="hoverBorderInner"></span>
										<span class="readMore">+ Read more</span>
									</span>	
								</a>
								<div class="seperator"></div>
								<p>
									<h4>Idea Brainstormer and designer</h4>
									<small></small> 
								<p>
							</div><!--detail-->
						</div><!--col-->
						<!-- <div class="col-sm-3">
							<div class="detail fadeInUp animated-element no-animation animation-delay6">
								<a href="#" class="hoverBorder">
									<span class="hoverBorderWrapper">
										<img src="img/gallery14.jpg" alt="portfolio">
										<span class="hoverBorderInner"></span>
										<span class="readMore">+ Read more</span>
									</span>	
								</a>
								<div class="seperator"></div>
								<p>
									<h4>Browser Compatibility</h4>
									<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.</small> 
								<p>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			
			<div class="content-padding bg-light">
				<div class="container">
					<div class="panel">
						<div class="panel-body content-padding">
							<div class="pull-left">
								<p class="font-lg">Join NitajHub community and Share your projects</p>
								<p class="text-muted">Hundreds of students are looking forward to join new projects and to team up.</p>
								<p class="text-muted">If your project is well deserved, a sponsor may contact you and fund you!</p>
							</div>
							<a href="{{url:site uri='users/register_choice'}}" class="btn btn-lg btn-danger pull-right m-top-xs fadeInLeftLarge no-animation animated-element animation-delay1">Join the community</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /landing-content -->
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 padding-md">
						<p class="font-lg">About NitajHub</p>
						<p><small>We try to be a miduim between students and sponsors and the world</small></p>
					</div><!-- /.col -->
					<div class="col-sm-3 padding-md">
						<p class="font-lg">Useful Links</p>
						<ul class="list-unstyled useful-link">
							<li>
								<a href="http://acadox.com" target="_blank">
									<small><i class="fa fa-chevron-right"></i>Acadox.com</small>
								</a>
							</li>
						</ul>
					</div><!-- /.col -->
					<div class="col-sm-3 padding-md">
						<p class="font-lg">Stay Connect</p>
						<a href="http://twitter.com/mohammedfadin" class="social-connect tooltip-test twitter-hover" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
						<a href="http://www.linkedin.com/pub/mohammed-fadin/19/70/3a3" class="social-connect tooltip-test linkedin-hover" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
					</div><!-- /.col -->
					<div class="col-sm-3 padding-md">
						<p class="font-lg">Contact Us</p>
						<div class="seperator"></div>
						<a href="{{url:site uri='contact'}}" class="btn btn-info"><i class="fa fa-envelope"></i> Contact Us</a>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</footer>
	</div><!-- /wrapper -->

	<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	

	
	<script>
		$(function()	{
			$('.animated-element').waypoint(function() {
				
				$(this).removeClass('no-animation');
				
			}, { offset: '70%' });
			
			$('.nav').localScroll({duration:800});
		});
	</script>
	
  </body>
</html>
{{endif}}