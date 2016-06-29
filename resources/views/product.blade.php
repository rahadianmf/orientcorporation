@extends("layouts/app")

@section('content')
<section class="main clearfix whitespace" id = "products">
	<br/>
	<h2 class = "menu-product">Our Products</h2>
	<div id="exTab1">	
		<ul  class="nav nav-pills">
			<li class="active">
        		<a  href="#1a" class = "menu-product" data-toggle="tab">Total Flooding System</a>
			</li>
			<li>
				<a href="#2a" class = "menu-product" data-toggle="tab">Pre-Engineered System</a>
			</li>
		</ul>
		<div class="tab-content clearfix">
			<div class="tab-pane active" id="1a">
				<div class="row">
					<div class = "col-xs-12">
		          		<div class="work">
							<a href="inner.html">
									<img src="img/work1.jpg" class="media" alt=""/>
								<div class="caption">
									<div class="work_title">
										<p>culpa qui officia deserunt mollit</p>
									</div>
								</div>
							</a>
						</div>
						<div class="work">
							<a href="inner.html">
								<img src="img/work2.jpg" class="media" alt=""/>
								<div class="caption">
									<div class="work_title">
										<p>culpa qui officia deserunt mollit</p>
									</div>
								</div>
							</a>
						</div>
						<div class="work">
							<a href="inner.html">
								<img src="img/work3.jpg" class="media" alt=""/>
								<div class="caption">
									<div class="work_title">
										<p>culpa qui officia deserunt mollit</p>
									</div>
								</div>
							</a>
						</div>
						<div class="work">
							<a href="inner.html">
								<img src="img/work4.jpg" class="media" alt=""/>
								<div class="caption">
									<div class="work_title">
										<p>culpa qui officia deserunt mollit</p>
									</div>
								</div>
							</a>
						</div>
						<div class="work">
							<a href="inner.html">
								<img src="img/work5.jpg" class="media" alt=""/>
								<div class="caption">
									<div class="work_title">
										<p>culpa qui officia deserunt mollit</p>
									</div>
								</div>
							</a>
						</div>
						<div class="work">
							<a href="inner.html">
								<img src="img/work6.jpg" class="media" alt=""/>
								<div class="caption">
									<div class="work_title">
										<p>culpa qui officia deserunt mollit</p>
									</div>
								</div>
							</a>
						</div>
						<div class="work">
							<a href="inner.html">
								<img src="img/work2.jpg" class="media" alt=""/>
								<div class="caption">
									<div class="work_title">
										<p>culpa qui officia deserunt mollit</p>
									</div>
								</div>
							</a>
						</div>
						<div class="work">
							<a href="inner.html">
								<img src="img/work3.jpg" class="media" alt=""/>
								<div class="caption">
									<div class="work_title">
										<p>culpa qui officia deserunt mollit</p>
									</div>
								</div>
							</a>
						</div>
						<div class="work">
							<a href="inner.html">
								<img src="img/work1.jpg" class="media" alt=""/>
								<div class="caption">
									<div class="work_title">
										<p>culpa qui officia deserunt mollit</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="2a">
			</div>
		</div>
	</div>
</section><!-- end main -->

<div class = "whitespace fixed-bg-one"></div>

<section class = "main" id = "contact2">
	<div class = "col-sm-11 col-xs-12">
		<div class="row whitespace-2">
			<div class="col-sm-4">
				<h4>PT ORIENT INDO CHEMORI</h4>
				<p>
					<b>
						JAKARTA GARDEN CITY<br/>
						Rukan Avenue No. 8-002<br/>
					</b>
					Jl. Raya Cakung Cilincing KM 0.5<br/>
					Cakkung Timur, Jakarta 13910<br/>
					Indonesia
				</p>
				<p>
					<a href = "mailto:sales@orientcorporation.co.id?Subject=Hello!" target="_blank">
						sales@orientcorporation.co.id
					</a>
				</p>
				<div class="short-separator-2"></div>
			</div>
			<div class="col-sm-8">
				<div id="googleMap" style="width:100%;height:380px;"></div>
			</div>
		</div>
		<br/>
		<br/>
		<br/>
		<div class="row text-center">
			<h4 class = "copyright">&copy Copyright 2016 | <a href="http://www.orientcorporation.co.id">orientcorporation.co.id</a></h4>
		</div>
	</div>
</section>
@end