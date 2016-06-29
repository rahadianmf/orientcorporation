@extends("app")

@section("title")
	About Us
@stop

@section("content")
	<h1>About {{ $first }} {{ $last }}</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
	@if (count($bro))
		<h2>My Brothers :</h2>
		<ul>
			@foreach ($bro as $people)
				<li>{{ $people }}</li>
			@endforeach
		</ul>
	@endif
@stop