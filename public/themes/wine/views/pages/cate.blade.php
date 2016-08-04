@extends('layouts.frontend')
@section('title', 'Wine Distribution')
@section('content')
	<div id="breadcrumb" class="clearfix">
		<div class="container">

			<!-- Breadcrumb -->
			<div class="breadcrumb clearfix">
				<a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
				<span class="navigation-pipe" >&gt;</span>
				<span class="navigation_page">{{ $name_cate->title }}</span>
			</div>
			<!-- /Breadcrumb -->
		</div>
	</div>
	<!-- Content -->
	<div id="columns" class="columns-container">
		<div class="container">
			<div class="row">
				<div id="top_column" class="center_column col-xs-12 col-sm-12 col-md-12">

				</div>
			</div>
			<div class="row">
				<!-- Left -->
				<div id="left_column" class="column sidebar col-md-3" role="navigation">
					<!-- Block categories module -->
					<div id="categories_block_left" class="block nopadding">
						<h4 class="title_block">
							Categories
						</h4>
						<div class="block_content">
							<ul class="list-block bullet tree dhtml">
								@foreach($menu_cate as $item_cate)
									<li >
										<a href="{{  URL('product',[$item_cate->id,$item_cate->alias]) }}" class="selected" title="Kosher">
											{{ $item_cate->title }}
											<span id="leo-cat-14" style="display:none" class="leo-qty badge"></span>
										</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /Block categories module -->
					<!-- Block CMS module -->
					{{--<section id="informations_block_left_1" class="block informations_block_left nopadding">--}}
						{{--<h4 class="title_block">--}}
							{{--<a href="category/1-home.html">--}}
								{{--Information				</a>--}}
						{{--</h4>--}}
						{{--<div class="block_content list-block">--}}
							{{--<ul class="bullet">--}}
								{{--<li>--}}
									{{--<a href="delivery.html" title="Delivery">--}}
										{{--Delivery--}}
									{{--</a>--}}
								{{--</li>--}}
								{{--<li>--}}
									{{--<a href="legal-notice.html" title="Legal Notice">--}}
										{{--Legal Notice--}}
									{{--</a>--}}
								{{--</li>--}}
								{{--<li>--}}
									{{--<a href="terms-and-conditions-of-use.html" title="Terms and conditions of use">--}}
										{{--Terms and conditions of use--}}
									{{--</a>--}}
								{{--</li>--}}
								{{--<li>--}}
									{{--<a href="about-us.html" title="About us">--}}
										{{--About us--}}
									{{--</a>--}}
								{{--</li>--}}
								{{--<li>--}}
									{{--<a href="secure-payment.html" title="Secure payment">--}}
										{{--Secure payment--}}
									{{--</a>--}}
								{{--</li>--}}
								{{--<li>--}}
									{{--<a href="stores.html" title="Our stores">--}}
										{{--Our stores--}}
									{{--</a>--}}
								{{--</li>--}}
							{{--</ul>--}}
						{{--</div>--}}
					{{--</section>--}}
					<!-- /Block CMS module -->
					<!-- MODULE Block specials -->
					<!-- /MODULE Block specials --><!-- Block stores module -->
					<div id="stores_block_left" class="block">

					</div>
				</div>
				<!-- Center -->
				<div id="center_column" class="col-md-9">
					<div class="clearfix">
						{{--<div class="content_sortPagiBar clearfix">--}}
							{{--<div class="sortPagiBar clearfix row">--}}
								{{--<div class="col-md-10 col-sm-8 col-xs-6">--}}
									{{--<div class="sort">--}}
										{{--<div class="display hidden-xs btn-group pull-left">--}}
											{{--<div id="grid"><a rel="nofollow" href="#" title="Grid"><i class="fa fa-th-large"></i></a></div>--}}
											{{--<div id="list"><a rel="nofollow" href="#" title="List"><i class="fa fa-th-list"></i></a></div>--}}
										{{--</div>--}}

										{{--<form id="productsSortForm" action="http://demo4leotheme.com/prestashop/leo_wine_store/en/14-kosher" class="productsSortForm form-horizontal pull-left hidden-xs ">--}}
											{{--<div class="select">--}}
												{{--<label for="selectProductSort">Sort by</label>--}}
												{{--<select class="form-control selectProductSort" id="selectProductSort">--}}
													{{--<option value="position:asc" selected="selected">--</option>--}}
													{{--<option value="price:asc" >Price: Lowest first</option>--}}
													{{--<option value="price:desc" >Price: Highest first</option>--}}
													{{--<option value="name:asc" >Product Name: A to Z</option>--}}
													{{--<option value="name:desc" >Product Name: Z to A</option>--}}
													{{--<option value="quantity:desc" >In stock</option>--}}
													{{--<option value="reference:asc" >Reference: Lowest first</option>--}}
													{{--<option value="reference:desc" >Reference: Highest first</option>--}}
												{{--</select>--}}

											{{--</div>--}}
										{{--</form>--}}
										{{--<!-- /Sort products -->--}}
										{{--<!-- nbr product/page -->--}}
										{{--<!-- /nbr product/page -->--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="product-compare col-md-2 col-sm-4 col-xs-6">--}}
									{{--<form method="post" action="http://demo4leotheme.com/prestashop/leo_wine_store/en/products-comparison" class="compare-form">--}}
										{{--<button type="submit" class="btn btn-default button button-medium bt_compare bt_compare" disabled="disabled">--}}
											{{--<span>Compare (<strong class="total-compare-val">0</strong>)</span>--}}
										{{--</button>--}}
										{{--<input type="hidden" name="compare_product_count" class="compare_product_count" value="0" />--}}
										{{--<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />--}}
									{{--</form>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
						<!-- Products list -->
						<div  class="product_list grid row ">
							@foreach($product_cate as $item_product)
							<div class="ajax_block_product col-sp-12 col-xs-12 col-sm-6 col-md-4">
									<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
										<div class="left-block">
											<div class="product-image-container image">
												<div class="leo-more-info" data-idproduct="10"></div>
												<a class="product_img_link"	href="{{url('detail',[$item_product->id,$item_product->title])}}" title="{{$item_product->title}}" itemprop="url">
													<img class="replace-2x img-responsive" src="{{ asset('uploads/wine/image/'.$item_product->imagePath) }}" alt="{{$item_product->title}}" title="{{$item_product->title}}" itemprop="image" style="height: 360px"/>
													<span class="product-additional" data-idproduct="10"></span>
												</a>
												<a class="quick-view btn-outline btn" href="{{url('detail',[$item_product->id,$item_product->title])}}" rel="{{ asset('uploads/wine/image/'.$item_product->imagePath) }}" title="Quick view" >
												</a>
												{{--<span class="new-box"><span class="new-label product-label">New</span></span>--}}
											</div>
										</div>
										<div class="right-block">
											<div class="product-meta">
												<h5 itemprop="name" class="name">
													<a class="product-name" href="{{url('detail',[$item_product->id,$item_product->title])}}" title="{{$item_product->title}}" itemprop="{{ asset('uploads/wine/image/'.$item_product->imagePath) }}" >
														{{ $item_product->title }}
													</a>
												</h5>
												<p class="product-desc" itemprop="description">
													{{ $item_product->description }}
												</p>
												<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">{{ $item_product->price }}</span>
													<meta itemprop="priceCurrency" content="USD"  property=""/>
												</div>
											</div>
										</div>
									</div>
											<!-- .product-container> -->
							</div>
							@endforeach
						</div>
						<div class="content_sortPagiBar">
							<div class="bottom-pagination-content clearfix row">
								<div class="col-md-10 col-sm-8 col-xs-6">
									<!-- Pagination -->
									<div class="pagination pull-right">
										@if ($product_cate->currentPage() !=1 )
											<li><a href="{!! str_replace('/?','?',$product_cate->url($product_cate->currentPage() - 1 )) !!}" > Previous </a></li>
										@endif
										@for($i = 1 ; $i <= $product_cate->lastPage() ; $i = $i + 1)
											<li class="{!! ($product_cate->currentPage() == $i) ? 'active' : '' !!}" >
												<a href="{!! str_replace('/?','?',$product_cate->url($i)) !!}">{!! $i !!}</a>
											</li>
										@endfor
										@if ($product_cate->currentPage() != $product_cate->lastPage())
											<li><a href="{!! str_replace('/?','?',$product_cate->url($product_cate->currentPage() + 1 )) !!}" > Next </a></li>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection