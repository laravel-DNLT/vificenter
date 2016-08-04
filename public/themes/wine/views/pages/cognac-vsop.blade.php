@extends('layouts.frontend')
@section('title', 'Cognac V.S.O.P')
@section('content')
	<div id="breadcrumb" class="clearfix">
		<div class="container">

			<!-- Breadcrumb -->
			<div class="breadcrumb clearfix">
				<a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
				<span class="navigation-pipe" >&gt;</span>
				<span class="navigation_page">Cognac</span>
				<span class="navigation-pipe" >&gt;</span>
				<span class="navigation_page">V.S.O.P</span>
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
							Cognac
						</h4>
						<div class="block_content">
							<ul class="list-block bullet tree dhtml">

								<li >
									<a href="{{ url('cognac') }}" class="selected" title="Kosher">
										Cognac
										<span id="leo-cat-14" style="display:none" class="leo-qty badge"></span>
									</a>
								</li>

								<li >
									<a href="{{ url('champagne') }}" title="Champagne">
										Champagne
										<span id="leo-cat-13" style="display:none" class="leo-qty badge"></span>
									</a>
								</li>
								{{--<li >--}}
									{{--<a href="15-organic.html" title="Organic">--}}
										{{--Organic--}}
										{{--<span id="leo-cat-15" style="display:none" class="leo-qty badge"></span>--}}
									{{--</a>--}}
								{{--</li>--}}


								<li >
									<a href="{{ url('red-wine') }}" title="Rose">
										Red Wine
										<span id="leo-cat-16" style="display:none" class="leo-qty badge"></span>
									</a>
									{{--<ul>--}}

										{{--<li >--}}
											{{--<a href="22-boxwine-.html" title="Boxwine ">--}}
												{{--Boxwine--}}
												{{--<span id="leo-cat-22" style="display:none" class="leo-qty badge"></span>--}}
											{{--</a>--}}
										{{--</li>--}}


										{{--<li >--}}
											{{--<a href="23-broadbent.html" title="Broadbent">--}}
												{{--Broadbent--}}
												{{--<span id="leo-cat-23" style="display:none" class="leo-qty badge"></span>--}}
											{{--</a>--}}
										{{--</li>--}}


										{{--<li >--}}
											{{--<a href="24-finca-las-nubes.html" title="Finca Las Nubes">--}}
												{{--Finca Las Nubes--}}
												{{--<span id="leo-cat-24" style="display:none" class="leo-qty badge"></span>--}}
											{{--</a>--}}
										{{--</li>--}}


										{{--<li class="last">--}}
											{{--<a href="25-ichanka.html" title="Ichanka">--}}
												{{--Ichanka--}}
												{{--<span id="leo-cat-25" style="display:none" class="leo-qty badge"></span>--}}
											{{--</a>--}}
										{{--</li>--}}

									{{--</ul>--}}
								</li>


								{{--<li >--}}
									{{--<a href="17-sparkling.html" title="Sparkling">--}}
										{{--Sparkling--}}
										{{--<span id="leo-cat-17" style="display:none" class="leo-qty badge"></span>--}}
									{{--</a>--}}
								{{--</li>--}}


								{{--<li class="last">--}}
									{{--<a href="18-blush.html" title="Blush">--}}
										{{--Blush--}}
										{{--<span id="leo-cat-18" style="display:none" class="leo-qty badge"></span>--}}
									{{--</a>--}}
									{{--<ul>--}}

										{{--<li >--}}
											{{--<a href="19-anoro.html" title="Anoro">--}}
												{{--Anoro--}}
												{{--<span id="leo-cat-19" style="display:none" class="leo-qty badge"></span>--}}
											{{--</a>--}}
										{{--</li>--}}


										{{--<li class="last">--}}
											{{--<a href="21-altivo.html" title="Altivo">--}}
												{{--Altivo--}}
												{{--<span id="leo-cat-21" style="display:none" class="leo-qty badge"></span>--}}
											{{--</a>--}}
										{{--</li>--}}

									{{--</ul>--}}
								</li>

							</ul>
						</div>
					</div>
					<!-- /Block categories module -->
					<!-- Block CMS module -->
					<section id="informations_block_left_1" class="block informations_block_left nopadding">
						<h4 class="title_block">
							<a href="category/1-home.html">
								Information				</a>
						</h4>
						<div class="block_content list-block">
							<ul class="bullet">
								<li>
									<a href="delivery.html" title="Delivery">
										Delivery
									</a>
								</li>
								<li>
									<a href="legal-notice.html" title="Legal Notice">
										Legal Notice
									</a>
								</li>
								<li>
									<a href="terms-and-conditions-of-use.html" title="Terms and conditions of use">
										Terms and conditions of use
									</a>
								</li>
								<li>
									<a href="about-us.html" title="About us">
										About us
									</a>
								</li>
								<li>
									<a href="secure-payment.html" title="Secure payment">
										Secure payment
									</a>
								</li>
								<li>
									<a href="stores.html" title="Our stores">
										Our stores
									</a>
								</li>
							</ul>
						</div>
					</section>
					<!-- /Block CMS module -->
					<!-- MODULE Block specials -->
					<div id="special_block_right" class="block nopadding">
						<h4 class="title_block">
							<a href="prices-drop.html" title="Specials">
								Specials
							</a>
						</h4>
						<div class="block_content products-block">

							<ul class="products products-block">
								<li class="clearfix media">

									<div class="product-block">

										<div class="product-container media" itemscope itemtype="http://schema.org/Product">
											<a class="products-block-image img pull-left" href="home/9-donec-tellus-purus.html" title="Donec tellus purus"><img class="replace-2x img-responsive" src="{{ theme('img/product/donec-tellus-purus31small.jpg') }}" alt="Fusce a congue" />
											</a>

											<div class="media-body">
												<div class="product-content">
													<h5 class="name media-heading">
														<a class="product-name" href="home/9-donec-tellus-purus.html" title="Fusce a congue">
															Fusce a congue</a>
													</h5>
													<div class="content_price price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                                                                <span class="old-price product-price">
                                        $193.00
                                    </span>
                                                                <span itemprop="price" class="product-price">
                                    $167.91                                </span>
														<meta itemprop="priceCurrency" content="1" />
													</div>


													<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
														<div class="star_content">
															<div class="star"></div>
															<div class="star"></div>
															<div class="star"></div>
															<div class="star"></div>
															<div class="star"></div>
															<meta itemprop="worstRating" content = "0" />
															<meta itemprop="ratingValue" content = "0" />
															<meta itemprop="bestRating" content = "5" />
														</div>
														<span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
													</div>


												</div>
											</div>
										</div>


									</div>
								</li>
							</ul>
							<div class="lnk">
								<a
										class="btn btn-default button button-small btn-sm"
										href="prices-drop.html"
										title="All specials">
									<span>All specials</span>
								</a>
							</div>
						</div>
					</div>
					<!-- /MODULE Block specials --><!-- Block stores module -->
					<div id="stores_block_left" class="block">
						<h4 class="title_block">
							<a href="stores.html" title="Our stores">
								Our stores
							</a>
						</h4>
						<div class="block_content blockstore">
							<p class="store_image">
								<a href="stores.html" title="Our stores">
									<img class="img-responsive" src="{{ theme('modules/blockstore/store.jpg') }}" alt="Our stores" />
								</a>
							</p>
							<div>
								<a
										class="btn btn-default button button-small btn-sm"
										href="stores.html"
										title="Our stores">
									<span>Discover our stores</span>
								</a>
							</div>
						</div>
					</div>
					<!-- /Block stores module -->
					<!-- Block categories module -->
					{{--<div id="categories_blog_menu" class="block blog-menu nopadding">--}}
						{{--<h4 class="title_block">Blog Categories</h4>--}}
						{{--<div class="block_content">--}}
							{{--<ul class="level1 tree dhtml "><li id="list_3" class=" ">--}}
									{{--<a href="{{ url('blog/blog-category')}}" title="Category 1">--}}
										{{--<span>Category 1</span></a>--}}
									{{--<ul class="level2 ">--}}
									{{--<li id="list_4" class=" ">--}}
									{{--<a href="blog/sub-category-1-c4.html" title="Sub Category 1">--}}
									{{--<span>Sub Category 1</span></a> --}}
									{{--</li>--}}
									{{--<li id="list_5" class=" ">--}}
									{{--<a href="blog/sub-category-2-c5.html" title="Sub Category 2">--}}
									{{--<span>Sub Category 2</span></a> --}}
									{{--</li>--}}
									{{--</ul>--}}
								{{--</li>--}}
							{{--</ul>--}}
						{{--</div>--}}
					{{--</div>--}}
					<!-- /Block categories module -->

				</div>
				<!-- Center -->
				<div id="center_column" class="col-md-9">
					<div class="clearfix">



						<div class="content_scene_cat">
							<!-- Category image -->
							<div class="content_scene_cat_bg scene_cat">
								<div class="image">
									<img class="img-responsive" src="{{ theme('../c/14-category_default/kosher.jpg') }}" alt="Cognac" title="Cognac" id="categoryImage"  />
								</div>
								<div class="cat-desc">
									<div class="rte"><p>Wine lovers delight in the discovery of unique tastes from regions around the world — whether it's Malbec from the high-altitude vineyards of Mendoza, or Sauvignon Blanc from Casablanca, Chile, or even classic Chianti from Tuscany.</p></div>
								</div>
							</div>
						</div>
						<h1 class="page-heading product-listing">
            <span class="cat-name">
                Cognac&nbsp;  / &nbsp;V.S.O.P          </span>
							<small class="heading-counter">There are ... products.</small>
						</h1>

						<div class="content_sortPagiBar clearfix">
							<div class="sortPagiBar clearfix row">
								<div class="col-md-10 col-sm-8 col-xs-6">
									<div class="sort">
										<div class="display hidden-xs btn-group pull-left">
											<div id="grid"><a rel="nofollow" href="#" title="Grid"><i class="fa fa-th-large"></i></a></div>
											<div id="list"><a rel="nofollow" href="#" title="List"><i class="fa fa-th-list"></i></a></div>
										</div>

										<form id="productsSortForm" action="http://demo4leotheme.com/prestashop/leo_wine_store/en/14-kosher" class="productsSortForm form-horizontal pull-left hidden-xs ">
											<div class="select">
												<label for="selectProductSort">Sort by</label>
												<select class="form-control selectProductSort" id="selectProductSort">
													<option value="position:asc" selected="selected">--</option>
													<option value="price:asc" >Price: Lowest first</option>
													<option value="price:desc" >Price: Highest first</option>
													<option value="name:asc" >Product Name: A to Z</option>
													<option value="name:desc" >Product Name: Z to A</option>
													<option value="quantity:desc" >In stock</option>
													<option value="reference:asc" >Reference: Lowest first</option>
													<option value="reference:desc" >Reference: Highest first</option>
												</select>

											</div>
										</form>
										<!-- /Sort products -->


										<!-- nbr product/page -->
										<!-- /nbr product/page -->

									</div>
								</div>
								<div class="product-compare col-md-2 col-sm-4 col-xs-6">
									<form method="post" action="http://demo4leotheme.com/prestashop/leo_wine_store/en/products-comparison" class="compare-form">
										<button type="submit" class="btn btn-default button button-medium bt_compare bt_compare" disabled="disabled">
											<span>Compare (<strong class="total-compare-val">0</strong>)</span>
										</button>
										<input type="hidden" name="compare_product_count" class="compare_product_count" value="0" />
										<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
									</form>





								</div>
							</div>
						</div>






						<!-- Products list -->
						<div  class="product_list grid row ">




							{{--<div class="ajax_block_product col-sp-12 col-xs-12 col-sm-6 col-md-4 first-in-line		 last-line		 first-item-of-tablet-line		 last-item-of-mobile-line--}}
				{{--">--}}

								{{--<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">--}}
									{{--<div class="left-block">--}}
										{{--<div class="product-image-container image">--}}
											{{--<div class="leo-more-info" data-idproduct="10"></div>--}}
											{{--<a class="product_img_link"	href="{{ url('cognac/selection/cognac-seguinot-sélection') }}" title="Cognac Seguinot Sélection--}}
												{{--</a>" itemprop="url">--}}
												{{--<img class="replace-2x img-responsive" src="{{ theme('img/products/cognac.jpg') }}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />--}}
												{{--<span class="product-additional" data-idproduct="10"></span>--}}
											{{--</a>--}}
											{{--<a class="quick-view btn-outline btn" href="home/10-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/home/10-donec-tellus-purus.html" title="Quick view" >--}}
											{{--</a>--}}
										{{--<span class="new-box">--}}
					{{--<span class="new-label product-label">New</span>--}}
				{{--</span>--}}
										{{--</div>--}}


									{{--</div>--}}
									{{--<div class="right-block">--}}
										{{--<div class="product-meta">--}}
											{{--<h5 itemprop="name" class="name">--}}
												{{--<a class="product-name" href="{{ url('cognac/selection/cognac-seguinot-sélection') }}" title="Donec tellus purus" itemprop="url" >--}}
													{{--Cognac Seguinot Sélection--}}
												{{--</a>--}}
											{{--</h5>--}}
											{{--<p class="product-desc" itemprop="description">--}}
												{{--This Cognac has fruity aromas. It is a young Cognac but genuine and fragrant. He has matured in oad barrels during the first year, then aged in Limousin barrels for at least 3 years--}}
											{{--</p>--}}


											{{--<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">--}}
												{{--<div class="star_content">--}}
													{{--<div class="star star_on"></div>--}}
													{{--<div class="star star_on"></div>--}}
													{{--<div class="star star_on"></div>--}}
													{{--<div class="star"></div>--}}
													{{--<div class="star"></div>--}}
													{{--<meta itemprop="worstRating" content = "0" />--}}
													{{--<meta itemprop="ratingValue" content = "3" />--}}
													{{--<meta itemprop="bestRating" content = "5" />--}}
												{{--</div>--}}
												{{--<span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>--}}
											{{--</div>--}}

											{{--<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">--}}
											{{--<span itemprop="price" class="price product-price">--}}
							{{--$323.00						</span>--}}
												{{--<meta itemprop="priceCurrency" content="USD" />--}}


											{{--</div>--}}
											{{--<div class="product-flags">--}}
											{{--</div>--}}


											{{--<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">--}}
													{{--<span class="available-now">--}}
								{{--<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>--}}
											{{--</div>--}}

											{{--<!--  -->--}}
											{{--<div class="functional-buttons clearfix">--}}


												{{--<a class="cart button ajax_add_to_cart_button btn btn-default" href="ordera5cc.html?add=1&amp;id_product=10&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="10">--}}
													{{--<i class="fa fa-shopping-cart"></i>--}}
													{{--<span>Add to cart</span>--}}
												{{--</a>--}}


												{{--<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/10-donec-tellus-purus.html" data-id-product="10" title="Add to compare" >--}}
													{{--<i class="fa fa-retweet"></i>--}}
													{{--<span>Add to compare</span>--}}
												{{--</a>--}}



												{{--<a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_10" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">--}}
													{{--<i class="fa fa-heart"></i>--}}
													{{--<span>Add to Wishlist</span>--}}
												{{--</a>--}}

											{{--</div>--}}

										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<!-- .product-container> -->--}}


							{{--</div>--}}





							<div class="ajax_block_product col-sp-12 col-xs-12 col-sm-6 col-md-4		 last-line		 last-item-of-tablet-line
				 last-item-of-mobile-line
				">

								<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
									<div class="left-block">
										<div class="product-image-container image">
											<div class="leo-more-info" data-idproduct="11"></div>
											<a class="product_img_link"	href="{{ url('/cognac/VSOP/VSOP-seguinot') }}" title="Donec tellus purus" itemprop="url">
												<img class="replace-2x img-responsive" src="{{ theme('img/products/vsop-seguinot.jpg') }}" alt="VSOP Seguinot" title="VSOP Seguinot" itemprop="image" />
												<span class="product-additional" data-idproduct="11"></span>
											</a>
											<a class="quick-view btn-outline btn" href="{{ url('/cognac/VSOP/VSOP-seguinot') }}" rel="#" title="Quick view" >
											</a>
										<span class="new-box">
					<span class="new-label product-label">New</span>
				</span>
										</div>


									</div>
									<div class="right-block">
										<div class="product-meta">
											<h5 itemprop="name" class="name">
												<a class="product-name" href="{{ url('/cognac/VSOP/VSOP-seguinot') }}" title="VSOP Seguinot" itemprop="url" >
													VSOP Seguinot
												</a>
											</h5>
											<p class="product-desc" itemprop="description">
												Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
											</p>


											<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
												<div class="star_content">
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<meta itemprop="worstRating" content = "0" />
													<meta itemprop="ratingValue" content = "0" />
													<meta itemprop="bestRating" content = "5" />
												</div>
												<span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
											</div>

											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
											<span itemprop="price" class="price product-price">
							$243.00						</span>
												<meta itemprop="priceCurrency" content="USD" />


											</div>
											<div class="product-flags">
											</div>


											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
													<span class="available-now">
								<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
											</div>

											<!--  -->
											<div class="functional-buttons clearfix">


												<a class="cart button ajax_add_to_cart_button btn btn-default" href="order37e9.html?add=1&amp;id_product=11&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="11">
													<i class="fa fa-shopping-cart"></i>
													<span>Add to cart</span>
												</a>


												<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="{{ url('cognac/VSOP-seguinot') }}" data-id-product="11" title="Add to compare" >
													<i class="fa fa-retweet"></i>
													<span>Add to compare</span>
												</a>



												<a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_11" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '11', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
													<i class="fa fa-heart"></i>
													<span>Add to Wishlist</span>
												</a>

											</div>

										</div>
									</div>
								</div>
								<!-- .product-container> -->


							</div>


							<div class="ajax_block_product col-sp-12 col-xs-12 col-sm-6 col-md-4 last-in-line
				 last-line		 first-item-of-tablet-line		 last-item-of-mobile-line
				 last-mobile-line">

								<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
									<div class="left-block">
										<div class="product-image-container image">
											<div class="leo-more-info" data-idproduct="12"></div>
											<a class="product_img_link"	href="{{ url('cognac/VSOP/tour-eiffel') }}" title="Morbi ullamcorper" itemprop="url">
												<img class="replace-2x img-responsive" src="{{ theme('img/products/tour-eiffel.jpg') }}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" style="height: 360px"/>
												<span class="product-additional" data-idproduct="12"></span>
											</a>
											<a class="quick-view btn-outline btn" href="{{ url('cognac/VSOP/tour-eiffel') }}" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/home/12-donec-tellus-purus.html" title="Quick view" >
											</a>
										<span class="new-box">
					<span class="new-label product-label">New</span>
				</span>
										</div>


									</div>
									<div class="right-block">
										<div class="product-meta">
											<h5 itemprop="name" class="name">
												<a class="product-name" href="{{ url('cognac/VSOP/tour-eiffel') }}" title="Morbi ullamcorper" itemprop="url" >
													VSOP Tour Eiffel
												</a>
											</h5>
											<p class="product-desc" itemprop="description">
												Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
											</p>


											<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
												<div class="star_content">
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<meta itemprop="worstRating" content = "0" />
													<meta itemprop="ratingValue" content = "0" />
													<meta itemprop="bestRating" content = "5" />
												</div>
												<span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
											</div>

											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
											<span itemprop="price" class="price product-price">
							$238.00						</span>
												<meta itemprop="priceCurrency" content="USD" />


											</div>
											<div class="product-flags">
											</div>


											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
													<span class="available-now">
								<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
											</div>

											<!--  -->
											<div class="functional-buttons clearfix">


												<a class="cart button ajax_add_to_cart_button btn btn-default" href="order9543.html?add=1&amp;id_product=12&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="12">
													<i class="fa fa-shopping-cart"></i>
													<span>Add to cart</span>
												</a>


												<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/12-donec-tellus-purus.html" data-id-product="12" title="Add to compare" >
													<i class="fa fa-retweet"></i>
													<span>Add to compare</span>
												</a>



												<a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_12" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
													<i class="fa fa-heart"></i>
													<span>Add to Wishlist</span>
												</a>

											</div>

										</div>
									</div>
								</div>
								<!-- .product-container> -->


							</div>


							<div class="ajax_block_product col-sp-12 col-xs-12 col-sm-6 col-md-4 last-in-line
				 last-line		 first-item-of-tablet-line		 last-item-of-mobile-line
				 last-mobile-line">

								<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
									<div class="left-block">
										<div class="product-image-container image">
											<div class="leo-more-info" data-idproduct="12"></div>
											<a class="product_img_link"	href="{{ url('cognac/VSOP/XO') }}" title="Morbi ullamcorper" itemprop="url">
												<img class="replace-2x img-responsive" src="{{ theme('img/products/X_O_COGNAC.jpg') }}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" style="height: 360px"/>
												<span class="product-additional" data-idproduct="12"></span>
											</a>
											<a class="quick-view btn-outline btn" href="{{ url('cognac/VSOP/XO') }}" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/home/12-donec-tellus-purus.html" title="Quick view" >
											</a>
										<span class="new-box">
					<span class="new-label product-label">New</span>
				</span>
										</div>


									</div>
									<div class="right-block">
										<div class="product-meta">
											<h5 itemprop="name" class="name">
												<a class="product-name" href="{{ url('cognac/VSOP/XO') }}" title="Morbi ullamcorper" itemprop="url" >
													VSOP X.O
												</a>
											</h5>
											<p class="product-desc" itemprop="description">
												Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
											</p>


											<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
												<div class="star_content">
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<meta itemprop="worstRating" content = "0" />
													<meta itemprop="ratingValue" content = "0" />
													<meta itemprop="bestRating" content = "5" />
												</div>
												<span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
											</div>

											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
											<span itemprop="price" class="price product-price">
							$238.00						</span>
												<meta itemprop="priceCurrency" content="USD" />


											</div>
											<div class="product-flags">
											</div>


											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
													<span class="available-now">
								<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
											</div>

											<!--  -->
											<div class="functional-buttons clearfix">


												<a class="cart button ajax_add_to_cart_button btn btn-default" href="order9543.html?add=1&amp;id_product=12&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="12">
													<i class="fa fa-shopping-cart"></i>
													<span>Add to cart</span>
												</a>


												<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/12-donec-tellus-purus.html" data-id-product="12" title="Add to compare" >
													<i class="fa fa-retweet"></i>
													<span>Add to compare</span>
												</a>



												<a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_12" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
													<i class="fa fa-heart"></i>
													<span>Add to Wishlist</span>
												</a>

											</div>

										</div>
									</div>
								</div>
								<!-- .product-container> -->


							</div>


							<div class="ajax_block_product col-sp-12 col-xs-12 col-sm-6 col-md-4 last-in-line
				 last-line		 first-item-of-tablet-line		 last-item-of-mobile-line
				 last-mobile-line">

								<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
									<div class="left-block">
										<div class="product-image-container image">
											<div class="leo-more-info" data-idproduct="12"></div>
											<a class="product_img_link"	href="{{ url('cognac/VSOP/age-inconnu') }}" title="Morbi ullamcorper" itemprop="url">
												<img class="replace-2x img-responsive" src="{{ theme('img/products/age_inconnu.jpg') }}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" style="height: 360px"/>
												<span class="product-additional" data-idproduct="12"></span>
											</a>
											<a class="quick-view btn-outline btn" href="{{ url('cognac/VSOP/age-inconnu') }}" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/home/12-donec-tellus-purus.html" title="Quick view" >
											</a>
										<span class="new-box">
					<span class="new-label product-label">New</span>
				</span>
										</div>


									</div>
									<div class="right-block">
										<div class="product-meta">
											<h5 itemprop="name" class="name">
												<a class="product-name" href="{{ url('cognac/VSOP/age-inconnu') }}" title="Morbi ullamcorper" itemprop="url" >
													VSOP Age Inconnu
												</a>
											</h5>
											<p class="product-desc" itemprop="description">
												Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
											</p>


											<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
												<div class="star_content">
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<meta itemprop="worstRating" content = "0" />
													<meta itemprop="ratingValue" content = "0" />
													<meta itemprop="bestRating" content = "5" />
												</div>
												<span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
											</div>

											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
											<span itemprop="price" class="price product-price">
							$238.00						</span>
												<meta itemprop="priceCurrency" content="USD" />


											</div>
											<div class="product-flags">
											</div>


											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
													<span class="available-now">
								<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
											</div>

											<!--  -->
											<div class="functional-buttons clearfix">


												<a class="cart button ajax_add_to_cart_button btn btn-default" href="order9543.html?add=1&amp;id_product=12&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="12">
													<i class="fa fa-shopping-cart"></i>
													<span>Add to cart</span>
												</a>


												<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/12-donec-tellus-purus.html" data-id-product="12" title="Add to compare" >
													<i class="fa fa-retweet"></i>
													<span>Add to compare</span>
												</a>



												<a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_12" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
													<i class="fa fa-heart"></i>
													<span>Add to Wishlist</span>
												</a>

											</div>

										</div>
									</div>
								</div>
								<!-- .product-container> -->


							</div>


							<div class="ajax_block_product col-sp-12 col-xs-12 col-sm-6 col-md-4 last-in-line
				 last-line		 first-item-of-tablet-line		 last-item-of-mobile-line
				 last-mobile-line">

								<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
									<div class="left-block">
										<div class="product-image-container image">
											<div class="leo-more-info" data-idproduct="12"></div>
											<a class="product_img_link"	href="{{ url('cognac/VSOP/reserve') }}" title="Morbi ullamcorper" itemprop="url">
												<img class="replace-2x img-responsive" src="{{ theme('img/products/reserve.jpg') }}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" style="height: 360px"/>
												<span class="product-additional" data-idproduct="12"></span>
											</a>
											<a class="quick-view btn-outline btn" href="{{ url('cognac/VSOP/reserve') }}" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/home/12-donec-tellus-purus.html" title="Quick view" >
											</a>
										<span class="new-box">
					<span class="new-label product-label">New</span>
				</span>
										</div>


									</div>
									<div class="right-block">
										<div class="product-meta">
											<h5 itemprop="name" class="name">
												<a class="product-name" href="{{ url('cognac/VSOP/reserve') }}" title="Morbi ullamcorper" itemprop="url" >
													VSOP Reserve D'OR
												</a>
											</h5>
											<p class="product-desc" itemprop="description">
												Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
											</p>


											<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
												<div class="star_content">
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<meta itemprop="worstRating" content = "0" />
													<meta itemprop="ratingValue" content = "0" />
													<meta itemprop="bestRating" content = "5" />
												</div>
												<span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
											</div>

											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
											<span itemprop="price" class="price product-price">
							$238.00						</span>
												<meta itemprop="priceCurrency" content="USD" />


											</div>
											<div class="product-flags">
											</div>


											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
													<span class="available-now">
								<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
											</div>

											<!--  -->
											<div class="functional-buttons clearfix">


												<a class="cart button ajax_add_to_cart_button btn btn-default" href="order9543.html?add=1&amp;id_product=12&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="12">
													<i class="fa fa-shopping-cart"></i>
													<span>Add to cart</span>
												</a>


												<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/12-donec-tellus-purus.html" data-id-product="12" title="Add to compare" >
													<i class="fa fa-retweet"></i>
													<span>Add to compare</span>
												</a>



												<a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_12" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
													<i class="fa fa-heart"></i>
													<span>Add to Wishlist</span>
												</a>

											</div>

										</div>
									</div>
								</div>
								<!-- .product-container> -->


							</div>


							<div class="ajax_block_product col-sp-12 col-xs-12 col-sm-6 col-md-4 last-in-line
				 last-line		 first-item-of-tablet-line		 last-item-of-mobile-line
				 last-mobile-line">

								<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
									<div class="left-block">
										<div class="product-image-container image">
											<div class="leo-more-info" data-idproduct="12"></div>
											<a class="product_img_link"	href="{{ url('cognac/VSOP/vincemus') }}" title="Morbi ullamcorper" itemprop="url">
												<img class="replace-2x img-responsive" src="{{ theme('img/products/vincemus.jpg') }}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" style="height: 360px"/>
												<span class="product-additional" data-idproduct="12"></span>
											</a>
											<a class="quick-view btn-outline btn" href="{{ url('cognac/VSOP/vincemus') }}" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/home/12-donec-tellus-purus.html" title="Quick view" >
											</a>
										<span class="new-box">
					<span class="new-label product-label">New</span>
				</span>
										</div>


									</div>
									<div class="right-block">
										<div class="product-meta">
											<h5 itemprop="name" class="name">
												<a class="product-name" href="{{ url('cognac/VSOP/vincemus') }}" title="Morbi ullamcorper" itemprop="url" >
													VSOP Vincemus
												</a>
											</h5>
											<p class="product-desc" itemprop="description">
												Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
											</p>


											<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
												<div class="star_content">
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<meta itemprop="worstRating" content = "0" />
													<meta itemprop="ratingValue" content = "0" />
													<meta itemprop="bestRating" content = "5" />
												</div>
												<span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
											</div>

											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
											<span itemprop="price" class="price product-price">
							$238.00						</span>
												<meta itemprop="priceCurrency" content="USD" />


											</div>
											<div class="product-flags">
											</div>


											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
													<span class="available-now">
								<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
											</div>

											<!--  -->
											<div class="functional-buttons clearfix">


												<a class="cart button ajax_add_to_cart_button btn btn-default" href="order9543.html?add=1&amp;id_product=12&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="12">
													<i class="fa fa-shopping-cart"></i>
													<span>Add to cart</span>
												</a>


												<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/12-donec-tellus-purus.html" data-id-product="12" title="Add to compare" >
													<i class="fa fa-retweet"></i>
													<span>Add to compare</span>
												</a>



												<a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_12" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
													<i class="fa fa-heart"></i>
													<span>Add to Wishlist</span>
												</a>

											</div>

										</div>
									</div>
								</div>
								<!-- .product-container> -->


							</div>

						</div>






						<div class="content_sortPagiBar">
							<div class="bottom-pagination-content clearfix row">
								<div class="col-md-10 col-sm-8 col-xs-6">


									<!-- Pagination -->
									<div id="pagination_bottom" class="pagination clearfix pull-left">
									</div>
									<div class="product-count pull-right">
										Showing 1 - 6 of 6 items
									</div>
									<!-- /Pagination -->

								</div>
								<div class="product-compare col-md-2 col-sm-4 col-xs-6">
									<form method="post" action="http://demo4leotheme.com/prestashop/leo_wine_store/en/products-comparison" class="compare-form">
										<button type="submit" class="btn btn-default button button-medium bt_compare bt_compare_bottom" disabled="disabled">
											<span>Compare (<strong class="total-compare-val">0</strong>)</span>
										</button>
										<input type="hidden" name="compare_product_count" class="compare_product_count" value="0" />
										<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
									</form>

								</div>
							</div>
						</div>

					</div>
				</div>


			</div>
		</div>
	</div>
@endsection