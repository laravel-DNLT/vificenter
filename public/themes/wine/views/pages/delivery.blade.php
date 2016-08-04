@extends('layouts.frontend')
@section('title', 'Delivery')
@section('content')



	<div id="breadcrumb" class="clearfix">
		<div class="container">
			<!-- Breadcrumb -->
			<div class="breadcrumb clearfix">
				<a class="home" href="{{ url('/') }}">Home</a>
				<span class="navigation-pipe" >&gt;</span>
				<span class="navigation_page">Delivery</span>
			</div>
			<!-- /Breadcrumb -->
		</div>
	</div>
	<!-- Content -->
	<div id="columns" class="columns-container">
		<div class="container">
			<div class="row">
				<div id="top_column" class="center_column col-xs-12 col-sm-12 col-md-12"></div>
			</div>
			<div class="row">
				<!-- Center -->
				<div id="center_column" class="col-md-12">
					<div class="inner block clearfix">
						<div class="rte">
							<h2>Shipments and returns</h2>
							<h3>Your pack shipment</h3>
							<p>Packages are generally dispatched within 2 days after receipt of payment and are shipped via UPS with tracking and drop-off without signature. If you prefer delivery by UPS Extra with required signature, an additional cost will be applied, so please contact us before choosing this method. Whichever shipment choice you make, we will provide you with a link to track your package online.</p>
							<p>Shipping fees include handling and packing fees as well as postage costs. Handling fees are fixed, whereas transport fees vary according to total weight of the shipment. We advise you to group your items in one order. We cannot group two distinct orders placed separately, and shipping fees will apply to each of them. Your package will be dispatched at your own risk, but special care is taken to protect fragile objects.
								<br />
								<br />Boxes are amply sized and your items are well-protected.
							</p>
						</div>
						<br />
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection