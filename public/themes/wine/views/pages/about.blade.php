@extends('layouts.frontend')
@section('title','About Us')
@section('content')

	<div id="breadcrumb" class="clearfix">
		<div class="container">
			<!-- Breadcrumb -->
			<div class="breadcrumb clearfix">
				<a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
				<span class="navigation-pipe" >&gt;</span>
				<span class="navigation_page">About us</span>
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
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<div class="cms-block">
										<h3 class="page-subheading">Our History</h3>
										<span>
											<p align="justify">Originally from the Nordic countries, the very first generation of Seguinot sets foot in the Vendee department of France at the beginning of the 13th century. Sincere and generous, the family is driven by a spirit of solidarity and goes from strength to strength. Whether labourer or farmer, the Seguinot develop a cultural heritage over several centuries and a deep attachment to the land</p>
										</span>
										<span>
											<img src="{{ theme('img/about/Seguinot-5_03.gif') }}" style="padding-left: 20px">
										</span>
										<span>
											<p align="justify" style="padding-top: 10px">Today, after more than 120 years of heritage and following four generations, Gerard Seguinot is the guarantor of the continuity and development of sincere family values, a unique expertise and an exceptional wine heritage</p>
										</span>
										<span>
											<img src="{{ theme('img/about/Seguinot-5_07.png') }}" style="padding-left: 20px">
										</span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-8">
									<div class="cms-box">
										<h3 class="page-subheading">How Cognac is made? </h3>
										<div class="col-xs-12 col-sm-6">
											<p>
												<strong class="dark">Vine and grape harvesting </strong>
											</p>
											<p align="justify">The «Ugni-Bianc» is the main grape selected to make the eau-de-vie destined to be turned into cognac. The harvests start as soon as the grape reaches maturity, generally from the beginning of October for Seguinot Cognacs. </p>

										</div>
										<img src="{{ theme('img/about/Seguinot-7_03.png') }}" style="padding-left: 20px">

										<p>
											<strong class="dark">Distillation  </strong>
										</p>
										<p align="justify">Immediately after harvesting, the grapes go into the wine-press. The juice obtained is fermented immediately. At Seguinot this step is carried out with the utmost of care. It has a determining influence on the end quality of our cognacs. Distillation begins after several days of fermentation. It will finish at the end ofthe following March. To do this we use a still from the Charente department of France. Like all our distillation methods it has not changed since Seguinot was founded. </p>

										<img src="{{ theme('img/about/Capture.png') }}" style="padding-left: 20px">

										<div class="col-xs-12 col-sm-6">
											<p>
												<strong class="dark">Ageing  </strong>
											</p>
											<p align="justify">During its slow ageing in barrels in our cellars, the cognac is in contact with the air which surrounds it. It absorbs the aromas of the wood, which gives it its colour and bouquet. The resulting relationship between the air, the wood and the cognac is a fascinating phenomenon. Part of the alcohol slowly evaporates. Annually this represents the equivalent of 20 million bottles. From ancient times this reaction has been poetically called "the angel's share". These vapours produce a fungus on the walls of our cellars and buildings which turns them a characteristic black.</p>
										</div>
										<img src="{{ theme('img/about/Seguinot-9_03.png') }}" style="padding-left: 20px">
									</div>
								</div>
								</div>
								<h1 class="page-subheading">More About Us</h1>
								<ul  class="toggle-footer list-group bullet" style="padding-left: 50px">
									<li class="item" style="padding-bottom: 10px">
										<a href="{{ theme('pdf/IMG_0001.pdf') }}">Cognac and Imported Brandy</a>
									</li>
									<li style="padding-bottom: 10px">
										<a href="{{ theme('pdf/IMG_0002.pdf') }}">Golden Horse</a>
									</li>
									<li style="padding-bottom: 10px">
										<a href="{{ theme('pdf/IMG_0003.pdf') }}">Imported Brandy</a>
									</li>
								</ul>
							</div>
						</div>
						<br />
					</div>
				</div>
			</div>
		</div>
@endsection