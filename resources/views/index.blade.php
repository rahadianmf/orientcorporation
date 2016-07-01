@extends('layouts/app')

@section('content')
<section class = "main-quotes clearfix">
	<h1 class = "quotes">
		Orient Corporation
		Started off as an aspirant company in 1996 to become a Premium Global Manufacturing Company. 
		Living up to our brand promise, our business has been operating for 20 years and still counting.
	</h1>
	<div class = "short-separator"></div>
</section>

<section class="main clearfix" id = "products">
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

<section class = "main" id = "about">
	<div class = "container-fluid">
		<div class = "row whitespace">
			<div class = "col-sm-4">
				<h2>About Us</h2>
				<div class = "short-separator-2"></div>
				<!-- <img class = "img-responsive" src="img/about.jpg"> -->
			</div>
			<div class = "col-sm-7">
				<p>Orient Corporation started off as an aspirant company in 1996 to become a Premium Global Manufacturing Company. Living up to our brand promise, our business has been operating for 20 years and still counting. Now Orient Corporation is the leading manufacturer and supplier of Orient Clean Agent Fire Suppressions Systems. Our organization specialises in industrial and corporate solutions for fire protection against the world’s most priceless and substantial assets.</p>
				<p>Since 1996, we have built our company’s vision alongside with our global network of manufacturers, Research & Development associates, and our customers in order to ensure that their requirements of timely supply of high performance products in increasingly competitive environments are met. In order to achieve this goal, Orient Corporation has made partnerships to establish manufacturing facilities in the United States, Taiwan, Malaysia, Indonesia, China and Singapore. Through all of these, we have created our very own success story.</p>
				<p>Orient Corporation Clean Agent Fire Suppressions Systems is largely used in industrial and commercial areas to prevent loss of lives, protect valuable assets, ensure continuity of business and at the same time be kind to our ever changing environment/climate. Orient’s Clean Agent Fire Extinguishing Systems are supported with a strong team of R&D Engineers located in our United States, China and Singapore facility to conduct fire tests and various tests required for Underwriters Laboratories (UL) Listing and Factory Mutual (FM) Approvals</p>
			</div>
		</div>
		<div class="row whitespace" id = "services">
			<div class="col-sm-11 col-xs-12" style = "padding-top:20px;">
				<h3 class = "text-center">Our Services</h3>
			</div>
			<div class="whitespace"></div>
			<div class="col-sm-11 col-xs-12">
				<div class = "col-sm-4 text-center service">
					<div class = "col-sm-6 col-sm-offset-3">
						<img class = "img-responsive service" src="img/service1.png">
					</div>
					<div class="clearfix"></div>
					<p class = "service">Fill Station</p>
					<p class="text-center">Provides refilling of Clean Agent to various types of Fire Suppression Containers</p>
				</div>
				<div class = "col-sm-4 text-center service">
					<div class = "col-sm-6 col-sm-offset-3">
						<img class = "img-responsive service" src="img/service2.png">
					</div>
					<div class="clearfix"></div>
					<p class = "service">Room Integrity Test</p>
					<p class="text-center">Door Fans complete with accessories: To measure the amount of leakages from a closure. It is mainly used to test the integrity of room where Clean Agent Fire Suppression System is provided.</p>
				</div>
				<div class = "col-sm-4 text-center service">
					<div class = "col-sm-6 col-sm-offset-3">
						<img class = "img-responsive service" src="img/service3.png">
					</div>
					<div class="clearfix"></div>
					<p class = "service">Hydraulic Test Station (Water Jacket Test)</p>
					<p class="text-center">Perform hydraulic pressures re-test for
					System Cylinders when required.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class = "main">
	<div class="col-sm-11 col-xs-12 whitespace">
		<div id = "contact" class = "row text-center">
			<br/>
			<h3>Build a Contact with Us!</h3>
			<br/>
		</div>
		<form role = "form" action="" method="post" enctype="">
			<div class="col-sm-5 col-sm-offset-1">
				<div class="form-group">
			      <input type="text" class="form-control" placeholder = "Name" name = "nama" id="usr">
			    </div>
			    <div class="form-group">
			      <input type="text" class="form-control" placeholder = "Company" name = "company" id="company">
			    </div>
			    <div class="form-group">
			      <input type="text" class="form-control" placeholder = "Telephone" name = "phone" id="phone">
			    </div>
			    <div class="form-group">
			      <input type="email" class="form-control" placeholder = "Email" name = "email" id="email">
			    </div>
			</div>
			<div class = "col-sm-5 ">
				<div class="form-group">
			      <textarea class="form-control" rows="8" placeholder = "Message" name = "message" id="message"></textarea>
			    </div>
			</div>
			<div class="col-sm-11 col-xs-12 text-center">
				<br/>
				<input type="submit" class="btn btn-info" value="Submit Button">
				<br/>
				<br/>
			</div>
		</form>
	</div>
</section>
<section class = "main" id = "contact2">
	<div class = "col-sm-11 col-xs-12">
		<div class="row whitespace-2">
			<div class="col-sm-4">
				<h4><b>PT ORIENT INDO CHEMORI</b></h4>
				<p>
					JAKARTA GARDEN CITY<br/>
					Rukan Avenue No. 8-002<br/>
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
@stop