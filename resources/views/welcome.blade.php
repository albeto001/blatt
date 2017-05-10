<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="esp">
	<head>
		<meta charset="utf-8">
		<title>Blatt</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <!-- start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var base_url = "{{url('/')}}";
			jQuery(document).ready(function($) {
				scroll();
			});
			function scroll(){
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
			}
		</script>
		 <!-- start-smoth-scrolling-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<!--tart-top-nav-script-->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!--//End-top-nav-script-->
	</head>
	<body>
		<!--- start-header-->
			<!-- <div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="#"><img src="images/logo.png" title="Johndeo" /></a>
						</div>
						
						 <nav class="top-nav">
							<ul class="top-nav">
								<li><a href="#home" class="scroll">Home</a><span> </span></li>
								<li><a href="#about" class="scroll">About ME </a></li>
								<li><a href="#services" class="scroll">Services</a></li>
								<li><a href="#work" class="scroll">MY work</a><span> </span></li>
								<li><a href="#contact" class="scroll">contact ME</a></li>
								<div class="clearfix"> </div>
							</ul>
							<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>-->
			<!--- //End-header-->
			<!--banner-->
			<div class="banner">
				<!-- banner-info -->
				<div class="banner-info text-center">
					<h1><img src="images/logo.png"></img></h1>
					<h2><b><span>¿Qué plumas necesitas para tu auto?</span></b></h2>
					<label> </label>
					<div class="clearfix"> </div>
					<a class="bannner-btn scroll" href="#about">Continuar</a>
				</div>
				<!-- banner-info -->
			</div>
			<!--//banner-->
			<!-- about -->
			<div id="about" class="about">
				<div class="about-head text-center">
					<div class="container">
						<h2>Selecciona la marca y el modelo</h2>
						<span> </span> 	
					</div>
				</div>
				<!-- about-grids -->
				<div class="about-grids text-center">
					<div class="container">
							<div class="col-md-1 about-grid">
								<div class="search">
									@foreach($anios as $anio)
										<div class="row anio selector" id="{{$anio['anio']}}"><a class="scroll" href="#marcas">{{$anio['anio']}}</a></div>
									@endforeach
								</div>
							</div>
							<div class="col-md-10 about-grid">
								
									<div class="search marcas" id="marcas">
								
									</div>
								
							</div>
							<div class="col-md-1 about-grid codigos">
								<div class="search modelos" id="modelos">
								</div>
							</div>
							
							<div class="clearfix"> </div>
					</div>
				</div>
				<!-- about-grids -->
			</div>
			<!--//about -->
			<!-- container -->
			<section id="codigos" class="bg-light-gray">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h3 class="section-subheading text-muted">Las plumas recomendadas para tu vehículo son:</h3>
						</div>
					</div>
				<div class="row cont_codigos">
				</div>
			</section>
			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

<!-- Small modal -->
<!-- Large modal -->
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title"></h4></center>
      </div>
      <div class="modal-body">
        <div class="row imgs_pluma"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
           <script type="text/javascript">
           
           </script> 						
	</body>
</html>

