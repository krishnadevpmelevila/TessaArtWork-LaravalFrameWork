<!DOCTYPE html>
<html>

<head>
	<script src="https://kit.fontawesome.com/a5893312b9.js" crossorigin="anonymous"></script>
	<script src="{{ asset('../public/js/app.js') }}" defer></script>

    <!-- References: https://github.com/fancyapps/fancyBox -->
   
   
    

	<link rel="shortcut icon" type="image/x-icon" href="../public/bundles/mainslide1.jpg">
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>TESSA ARTWORKS</title>

	<link href="../public/bundles/css/style-starter.css" rel="stylesheet" type="text/css"><!-- Style-CSS -->
	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;display=swap" rel="stylesheet">
	<!-- /web fonts -->

	<style>
	</style>
</head>

<body>
	
	<!-- page -->
	<div id="page" class="page">

		<!-- Header -->
		<section class="w3l-header-4 editContent">
			<header id="headers4-block" class="editContent">
				<div class="container">
					<div class="d-grid nav-mobile-block header-align  ">
						<div class="logo"><br></div>
						<div class="logo"><br></div>
						<div class="logo">
							<a class="brand-logo editContent" href="/">TESSA ARTWORKS</a>&nbsp; &nbsp; &nbsp;&nbsp;
							<!-- if logo is image enable this   
              <a class="navbar-brand" href="#index.html">
                  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
              </a> -->
						</div>
						<input type="checkbox" id="nav">
						<label class="nav" for="nav"></label>
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop">
							<ul class="menu">
								<li class="propClone"><a href="/" style="outline: none; cursor: inherit;">Home</a></li>
								<li class="propClone">
									<color="#ea3a60"><span style="outline-color: initial; outline-width: initial; outline-offset: -2px; cursor: inherit; text-transform: uppercase;"><b><a href="/about">ABOUT</a></b></span>
								</li>
								<li class="propClone"><a href="/services">Services</a></li>
								<li class="propClone"><a href="/works">Works</a></li>
								<li class="propClone"><a href="/contact">Contacts</a></li>
								
								@guest
							<a href="/admin"><button class="btn btn-success" href="/admin">Admin Login</button></a>
								@endguest
								@auth
								<a href="/edit"><button class="btn btn-success" href="/edit">Add Artwork</button></a>
                                    <button class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </button>
        

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
									</form>
								@endauth
                              


								<!-- sumenu Drop Down -->
								<li class="propClone drop-list">
									</label>

									<input type="checkbox" id="drop-1">


								</li>

							</ul>
						</nav>
					</div>
				</div>
			</header>
		</section>
		<!-- Header -->
		<!--  Main banner section -->
		@yield('content')

		<footer class="w3l-footer">
			<div id="footers14-block" class="py-3">
				<div class="container">
					<div class="footers14-bottom text-center">
						<div class="social">
							<a href="http://fb.com/tessaartworks" class="facebook editContent"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							<a href="https://www.instagram.com/tessamol_/" class="instagram editContent"><span class="fa fa-instagram" aria-hidden="true"></span></a>

						</div>
						<div class="copyright mt-1">
							<p>© 2020 Tessa Artworks. All Rights Reserved | Developed by <a href="http://roughbook.online">Rough Book</a></p>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-angle-up" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function() {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->
			<!-- Add icon library -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://kit.fontawesome.com/a5893312b9.js" crossorigin="anonymous"></script>


		</footer>
		<!-- Footer -->
	</div><!-- /#page -->


</body>

</html>