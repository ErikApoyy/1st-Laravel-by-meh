@extends('layouts.app')
@section('content')

<div class="container-fluid text-center" id="header">
			<h3>2023 Web Development Conference</h3>
			<p>
				Welcome to the 1st international conference on web development. It will take place in Hobart, Australia and it
				is hosted by University of Tasmania
			</p>
	</div>
	
	<section class="container mt-3" id="pic-container">
		<div>
			<img 
			src="/ecahyadi/Tutorial_Submission/Tutorial2/images/harbourBridgeByLeio.jpg" 
			alt="Sydney Harbour Bridge"
			width="250px"
			height="250px"/>
			<p style="text-align: center;">Harbour Bridge</p>
		</div>

		<div>
			<img src="/ecahyadi/Tutorial_Submission/Tutorial2/images/kangarooByChris.jpg" 
			alt="Kangaroo"
			width="250px"
			height="250px">
			<p style="text-align: center;">Kangaroo</p>
		</div>
		
		<div>
			<img src="/ecahyadi/Tutorial_Submission/Tutorial2/images/seacliffByBenjamin.jpg" 
			alt="Seacliff Bridge, Sydney"
			width="250px"
			height="250px">	
			<p style="text-align: center;">Seacliff Bridge, Sydney</p>
		</div>
	</section>

	<div class="container mt-4" id="sponsor-container">
		<div class="row">
			<div class="col-6 text-start">
				<h3>Sponsors</h3>
			</div>

			<div class="col-6 text-start">
				<ul class="list-unstyled">
					<li class="mb-2">The University of ABC</li>
					<li class="mb-2">ABC Network Company</li>
					<li class="mb-2">Hobart Launceston</li>
				</ul>
			</div>
		</div>
	</div>

@endsection