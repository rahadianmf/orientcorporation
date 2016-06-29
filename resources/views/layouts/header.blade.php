<header>
	<div class="logo">
		<a href="{{ URL::to('/') }}">
		<img class = "logo" src="img/logo-orient.png" title="Orient Corporation Indonesia" alt="Orient Corporation Indonesia"/>
		</a>
	</div><!-- end logo -->

	<div id="menu_icon"></div>
	<nav>
		<ul>
			<li><a href="{{ URL::to('/') }}" class="menu">Home</a></li>
			<li><a href="{{ URL::to('product') }}" class="menu">Product</a></li>
			<li><a href="{{ URL::to('about') }}" class="menu">About Us</a></li>
			<li><a href="{{ URL::to('about') }}" class="menu">Services</a></li>
			<li><a href="{{ URL::to('contact') }}" class="menu">Contact Us</a></li>
		</ul>
	</nav><!-- end navigation menu -->

	<div class="footer clearfix">
		<div class = "certification"><img src = "img/header_image_certificationlogo.jpg" title="Orient Corporation Certification" alt="Orient Corporation Certification"/></div>
		<div class="rights">
			<p>Copyright &copy 2016.</p>
			<p><a href="">PT Orient Indo Chemori</a></p>
		</div><!-- end rights -->
	</div ><!-- end footer -->
</header><!-- end header -->