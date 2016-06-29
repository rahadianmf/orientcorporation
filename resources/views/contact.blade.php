@extends("layouts/app")

@section("content")
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